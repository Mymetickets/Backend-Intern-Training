<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    function index(Request $request)
    {
        return response()->json([
            'message' => 'Ticket created successfully'
        ]);
    }
}
