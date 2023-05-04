<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email', #|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        try {
            $user = User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]);

            event(new Registered($user));

            return $this->apiSuccess($user, "Sign up successful. A verification code is on it's way to your inbox.", 201);
        } catch (\Throwable $th) {
            return $this->apiError('Registration failed', $th->getMessage(), 500);
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $data['email'])->first();
        if (!$user) {
            return $this->apiError('Login failed', 'Invalid credentials', 401);
        }

        if (!Hash::check($data['password'], $user->password)) {
            return $this->apiError('Login failed', 'Invalid credentials', 401);
        }

        $user->tokens()->delete();

        $token = $user->generateToken();
        return $this->apiSuccess(['token' => $token], 'Login successful');
    }

    public function sendEmailVerification(Request $request)
    {
        $user = $request->user();

        $code = Str::random(6);
        Cache::put("{$user->id}-email-code", $code, now()->addMinutes(10));
        $user->notify(new \App\Notifications\EmailVerification($code));

        return $this->apiSuccess(null, 'Verification code sent to your e-mail address');
    }

    public function verifyEmailAddress(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'code' => 'required|string|min:6'
        ]);

        /**
         * @var User
         */
        $user = User::where('email', $data['email'])->firstOrFail();
        $code = Cache::get("{$user->id}-email-code");
        if ($code != $data['code']) {
            return $this->apiError("E-mail verification failed. Please check your code and try again.");
        }

        Cache::delete("{$user->id}-email-code");
        $user->update([
            'email_verified_at' => now()
        ]);

        $user->tokens()->delete();
        $token = $user->generateToken();

        return $this->apiSuccess(['user' => $user, 'token' => $token], 'E-mail verified successfully');
    }
}
