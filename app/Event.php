<?php

namespace App;

use App\Enums\EventStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $appends = ['status'];

    public function getStatusAttribute()
    {

        $now = Carbon::now()->toDateTimeString();

        if (!$this->active) {
            return EventStatus::PLANNING;
        }

        if ($this->event_end <= $now) {
            $status = EventStatus::ENDED;
        } else if ($this->event_voting_end <= $now) {
            $status = EventStatus::VOTING_ENDED;
        } else if ($this->event_voting_start <= $now) {
            $status = EventStatus::VOTING;
        } else if ($this->event_start <= $now) {
            $status = EventStatus::RUNNING;
        } else {
            $status = EventStatus::STARTING;
        }

        return $status;

    }


    public function scopeCurrentEvent($query)
    {
        return $query->where('event_start', '<=', Carbon::now()->toDateTimeString())
            ->where('event_end', '>=', Carbon::now()->toDateTimeString())
            ->where('active', true);
    }

}
