<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;



Route::get('/create-ticket', [TicketController::class, 'index']);
