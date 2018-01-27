<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
{
    public function project() {
        return $this->belongsTo('App\Project');
    }

    public function users() {
        return $this->hasMany('App\User');
    }
}
