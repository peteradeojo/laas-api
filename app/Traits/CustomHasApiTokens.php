<?php

namespace App\Traits;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\App;

trait CustomHasApiTokens {
    use HasApiTokens;

    public function generateToken(?string $name = 'auth_token')
    {
        $token = $this->createToken($name, expiresAt: App::environment('local') ? null : now()->addHours(1))->plainTextToken;
        return $token;
    }
}
