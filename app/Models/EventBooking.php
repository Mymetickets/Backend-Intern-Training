<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    
    protected $fillable = [
        'Name',
        'location',
        'date'
    ];


}
