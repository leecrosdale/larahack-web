<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinRequest extends Model
{
    protected $fillable = ['user_id', 'project_id'];

    protected $statuses = ['Waiting', 'Approved', 'Disallowed', 'Cancelled'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function project() {
        return $this->belongsTo('App\Project');
    }


    public function getStatus() {
        return $this->statuses[$this->status];
    }



}
