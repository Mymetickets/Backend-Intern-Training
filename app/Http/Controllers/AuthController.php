<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{

    protected $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }

    //Updated Login-Function connecting to auth-service and LoginRequest by email input field
    public function login(LoginRequest $request) {
        $response = $this->authService->login($request->input('email'));
        return response()->json($response);
    }
    // The initial Demo Login-function  without logic below
    // public function login(LoginRequest $request)
    // {
    //     return response()->json(['message' => 'Login successful']);
    // }
}
