<?php

function apiResponse($message, $data = [], $statusCode = 200){
    return response()->json([
        "message" => $message,
        "data" => $data
    ], $statusCode);
}