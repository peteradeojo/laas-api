<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogResource;
use App\Models\AppToken;
use App\Models\Log;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LogApplication;

class LogController extends Controller
{
    public function index(Request $request, LogApplication $app)
    {
        $logs = $app->logs()->with('application')->latest()->limit(100)->paginate($request->query('count', 20));

        return LogResource::collection($logs);
    }

    public function store(Request $request)
    {
        $token = $request->header('APP_ID');
        if (!$token) {
            return $this->apiError("Invalid APP_ID specified", 401);
        }

        $data = $request->validate([
            'level' => ['required', 'string', function ($attr, $value, $fail) {
                return in_array($value, array_keys(Log::LEVELS)) ? true : $fail("Invalid log level specified.");
            }],
            'origin' => 'required|string',
            'message' => 'string',
            'context' => 'string|nullable',
            'extra' => 'string|nullable',
        ]);

        $app = AppToken::with('application')->where('token', $token)->firstOrFail()->application;

        if ($app->status_id != status_active()) {
            return $this->apiError("Application is deactivated. Activate this application to store logs.", 401);
        }

        $log = $app->logs()->create($data);
        return $this->apiSuccess($log, "Log stored successfully.");
    }
}
