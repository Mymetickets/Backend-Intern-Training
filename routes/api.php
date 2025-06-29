<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/user', function (Request $request) {
    return response()->json([
        "name" => "Absam",
        "data" => $request->all(),
        "token" => "5253gdguiwuydghdghsvdjhsgh"
    ]);
});
