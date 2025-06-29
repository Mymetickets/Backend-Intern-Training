<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Repositories\TicketRepository;
use App\Services\TicketService;
use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;

class TicketController extends Controller
{

    public $ticketService;
    public function __construct()
    {
        $this->ticketService = new TicketService();
    }
    function index(Request $request)
    {
        $data = $this->ticketService->getAllTickets();
        if (!$data) {
            return response()->json([
                'message' => 'error occurred'
            ], 400);
        }
        return response()->json([
            'message' => 'All Tickets Fetched successfully',
            "data" => $data
        ], 201);
    }
    function create(TicketRequest $request)
    {
        $data = $this->ticketService->createTicket($request->validated());
        if (!$data) {
            return response()->json([
                'message' => 'Error occurred'
            ],400);
        }

        return response()->json([
            'message' => 'Ticket Created Successfully',
            'data' => $data
        ], 201);
    }

    function show($id)
    {
        $data = $this->ticketService->getSingleTicket($id);
        if (!$data) {
            return response()->json([
                'messsage' => 'No Ticket found'
            ], 404);
        }
        return response()->json([
            "status" => "00",
            'message' => 'Ticket Found Successfully',
            'data' => $data,
            "errors" => []
        ], 201);
    }
    function update(TicketRequest $request, $id)
    {
        $data = $this->ticketService->updateTicket($request->validated(),$id);
        if (!$data) {
            return response()->json([
                "status" => false,
                'message' => 'Ticket not found'
            ],200);
        }
        return apiResponse("Ticket updated", $data, 200);
    }

    function delete($id){
        $data = $this->ticketService->deleteTicket($id);
        if($data != true){
            return response()->json([
                'message'=>'Ticket delete Failed'
            ],400);

        }

        return response()->json([
            'message'=>'Ticket Deleted Successfully'
        ],200);
    }
}
