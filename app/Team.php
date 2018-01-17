<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function users() {
        return $this->hasManyThrough('App\User', 'App\TeamUser');
    }
}
