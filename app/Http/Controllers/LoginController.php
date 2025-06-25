<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(LoginRequest $request){
        $appname = config('services.paystack.public_key');
    }
}
