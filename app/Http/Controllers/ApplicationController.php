<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogApplicationResource;
use App\Models\LogApplication;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        /**
         * @var User
         */
        $user = $request->user();

        $apps = $user->log_apps->load(['status']);

        return $this->apiSuccess(LogApplicationResource::collection($apps), "Log applications retrieved.");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        /**
         * @var User
         */
        $user = $request->user()?->load('log_apps');

        if ($user->log_apps->count() >= 3) {
            return $this->apiError("You have reached the maximum number of log applications.", statusCode: 403);
        }

        $app = $user->log_apps()->create(
            $request->only(['title', 'description']) + [
                'status_id' => status_active()
            ]
        );

        return $this->apiSuccess($app, "Log application created.");
    }

    public function generateApiKey(LogApplication $app)
    {
        $token = $app->createToken();

        return $this->apiSuccess($token->only('token'), "API key generated.");
    }
}
