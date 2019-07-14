<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{


    public function scopeCurrentEvent()
    {
        $event = Event::current();
    }
}
