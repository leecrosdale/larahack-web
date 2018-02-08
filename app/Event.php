<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $dates = [
        'created_at',
        'updated_at',
        'event_start',
        'event_voting_start',
        'event_voting_end',
        'event_ends'
    ];

}