<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Repositories\TicketRepository;
use App\Services\TicketService;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    
    public $ticketService;
    public function __construct(){
        $this->ticketService = new TicketService();
    }
    function index(Request $request)
    {
        $data = $this->ticketService->getAllTickets();
        return response()->json([
            'message' => 'All Tickets Fetched successfully',
            "data" => $data
        ]);
    }
}
