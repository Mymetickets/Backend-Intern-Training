<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = [
        "ticket_name",
        "ticket_type",
        "amount",
        "status"
    ];
}
