<?php

namespace App;

use App\Enums\HackathonStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Hackathon extends Model
{

    protected $appends = ['status'];

    public function getStatusAttribute()
    {

        $now = Carbon::now()->toDateTimeString();

        if (!$this->active) {
            return HackathonStatus::PLANNING;
        }

        if ($this->end <= $now) {
            $status = HackathonStatus::ENDED;
        } else if ($this->voting_end <= $now) {
            $status = HackathonStatus::VOTING_ENDED;
        } else if ($this->voting_start <= $now) {
            $status = HackathonStatus::VOTING;
        } else if ($this->start <= $now) {
            $status = HackathonStatus::RUNNING;
        } else {
            $status = HackathonStatus::STARTING;
        }

        return $status;

    }


    public function scopeCurrentHackathon($query)
    {
        return $query->where('start', '<=', Carbon::now()->toDateTimeString())
            ->where('end', '>=', Carbon::now()->toDateTimeString())
            ->where('active', true);
    }

    public function streams()
    {
        return $this->hasMany(Stream::class);
    }

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }


}
