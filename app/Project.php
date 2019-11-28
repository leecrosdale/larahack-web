<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function hackathon()
    {
        return $this->belongsTo(Hackathon::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }



}
