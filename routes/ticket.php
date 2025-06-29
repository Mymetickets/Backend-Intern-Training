<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;



Route::get('/fetch-allticket', [TicketController::class, 'index']);
Route::post('/create-ticket',[TicketController::class, 'create']);
Route::get('/get-ticket/{id}',[TicketController::class, 'show']);
Route::put('/update-ticket/{id}',[TicketController::class, 'update']);
Route::delete('/delete-ticket/{id}',[TicketController::class,'delete']);
