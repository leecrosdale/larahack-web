<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function scopeCurrent()
    {
        return $this::where('active', true)->first();
    }
}
