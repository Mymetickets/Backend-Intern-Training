<?php

namespace App\DTOs;

class TicketDTO
{
    /**
     * Create a new class instance.
     */
    public $ticket_name;
    public $ticket_type;
    public $amount;
    public $status;
    public $buyer_name;
    public function __construct(
        $ticket_name,
        $ticket_type,
        $amount,
        $status,
        $buyer_name = null
    )
    {
        //
        $this->ticket_name = $ticket_name;
        $this->ticket_type = $ticket_type;
        $this->amount = $amount;
        $this->status = $status;
        $this->buyer_name = $buyer_name;
    }
}
