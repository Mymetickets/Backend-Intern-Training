<?php

namespace App\Services;

use App\DTOs\TicketDTO;
use App\Http\Resources\TicketResource;
use App\Repositories\TicketRepository;

class TicketService extends BaseService
{
    public $ticketRepo;
    public function __construct()
    {
        parent::__construct();
        $this->ticketRepo = new TicketRepository;
    }

    public function getAllTickets()
    {
        $resp = $this->ticketRepo->getAll();
        return $resp;
    }

    public function createTicket($reqData)
    {
        $resp = $this->ticketRepo->createTicket($reqData);
        return $resp;
    }

    public function getSingleTicKet($id)
    {
        $resp = $this->ticketRepo->getSingleTicket($id);
        $resp = new TicketResource($resp);
        //$resp = new TicketDTO($resp->ticket_name, $resp->ticket_type, $resp->amount, $resp->status);
        return $resp;
    }

    public function updateTicket($reqData, $id)
    {
        $resp = $this->ticketRepo->updateTicket($reqData, $id);
        return $resp;
    }

    public function deleteTicket($id){
        $resp =$this->ticketRepo->deleteTicket($id);
        return $resp;
    }
}
