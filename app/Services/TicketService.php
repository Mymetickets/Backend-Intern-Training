<?php 

namespace App\Services;

use App\Repositories\TicketRepository;

class TicketService extends BaseService {
    public $ticketRepo;
    public function __construct() {
        parent::__construct();
        $this->ticketRepo = new TicketRepository;
    }

    public function getAllTickets(){
        $resp = $this->ticketRepo->getAll();
        return $resp;
    }
}