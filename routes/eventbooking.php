<?php
use App\Http\Controllers\EventBookingController;
use Illuminate\Support\Facades\Route;

Route::get('/event', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/event/booking', [EventBookingController::class, 'create']);
