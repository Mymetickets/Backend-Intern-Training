<?php

namespace App\Repositories;

use App\Models\Ticket;

class TicketRepository
{

    public function getAll()
    {
        $data = Ticket::all();
        return $data;
    }

    public function getSingleTicket($id)
    {
        $data = Ticket::find($id);
        return $data;
    }

    public function createTicket($reqData)
    {
        $data = Ticket::create($reqData);
        return $data;
    }

    public function updateTicket($reqData, $id)
    {
        $data = Ticket::find($id);
        if ($data) {
            $data->update($reqData);
            return $data;
        }
        return null;
    }

    public function deleteTicket($id){
        $data = Ticket::find($id);
        if($data){
            $data->delete();
            return true;
        }
        return $data;
    }
}
