<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id','title','description','url','repo', 'image'];

    public function user() {
        return $this->belongsTo('App\User');
    }


    public function users() {
        return $this->hasManyThrough('App\User','App\UserProject');
    }
}
