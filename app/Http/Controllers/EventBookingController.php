<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventBookingController extends Controller
{
    public function index(Request $request)
    {

        return response()->json([
            'message' => 'Event Created successfully',
            
        ]);
    }
}
