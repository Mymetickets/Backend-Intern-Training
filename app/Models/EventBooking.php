<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    protected $table = 'event_bookings';

    protected $fillable = [
        'Name',
        'location',
        'date',
        
    ];


}
