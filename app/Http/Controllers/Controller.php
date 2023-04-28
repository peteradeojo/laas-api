<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function apiSuccess(mixed $data = [], string $message = null ,$statusCode = 200) {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public function apiError(string $message = null, $errors = [] , int $statusCode = 400) {
        return response()->json([
            'message' => $message,
            'errors' => $errors
        ], $statusCode);
    }
}
