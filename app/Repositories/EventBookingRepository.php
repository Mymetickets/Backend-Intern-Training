<?php

namespace App\Repositories;

use App\Models\EventBooking;

class EventBookingRepository{
    public function getAllBookings(){
        $data = EventBooking::all();
        return $data;
    }

    public function getSingleBooking($id){
        $data = EventBooking::find($id);
        return $data;
    }

    public function createBooking($reqData){
        $data = EventBooking::create($reqData);
        return $data;
    }
}



?>
