<?php

namespace App\Http\Controllers;
use App\Http\Requests\EventBookingRequest;
use App\Services\EventBookingService;
use Illuminate\Http\Request;

class EventBookingController extends Controller
{

    public $eventBookingService;
    public function __construct()
    {
        $this->eventBookingService = new EventBookingService();
    }


    public function create(EventBookingRequest $request)
    {

        $data = $this->eventBookingService->create_event($request);
        return response()->json([
            'message' => 'Event Created successfully',
        ]);
    }
}
