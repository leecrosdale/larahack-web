<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title','description','url','repo', 'image','event_id'];

    public function users() {
        return $this->belongsToMany('App\User');
    }

    public function join_requests() {
        return $this->hasMany('App\JoinRequest');
    }
}
