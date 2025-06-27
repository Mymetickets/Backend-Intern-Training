<?php

namespace App\Services;
use App\Repositories\EventBookingRepository;
use App\Services\BaseService;

class EventBookingService extends BaseService {
    public $Event_booking;
    public function __construct() {
        parent::__construct();
        $this->Event_booking = new EventBookingRepository;
    }

    public function create_event($reqData){
        $data = $this->Event_booking->createBooking($reqData);
        return $data;
    }
}

?>
