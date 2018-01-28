<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    public function project() {
        return $this->hasOne('App\Project');
    }

    public function user() {
        return $this->hasOne('App\User');
    }
}
