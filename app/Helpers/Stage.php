<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 08/02/18
 * Time: 11:04
 */

namespace App\Helpers;


use App\Event;
use Carbon\Carbon;

class Stage
{

    public static function stage($event) {

        $now = Carbon::now()->toDateTimeString();

        if (!$event) {
            return 0;
        }

        if ($event->event_end <= $now) {
            $stage = 4;
        } else if ($event->event_voting_end <= $now) {
            $stage = 3;
        } else if ($event->event_voting_start <= $now) {
            $stage = 2;
        } else if ($event->event_start <= $now) {
            $stage = 1;
        } else {
            $stage = 0;
        }

        return $stage;

    }

    public static function getEvent($upcoming = false) {
        $event = Event::where('active',1)->where('event_start', '>=', Carbon::now()->toDateTimeString())->where('event_end', '<=', Carbon::now()->toDateTimeString())->first();

        if (!$event) {

            if ($upcoming) {
                $event = Event::orderBy('event_start', 'DESC')->where('event_end', '>=', Carbon::now()->toDateTimeString())->first();
            } else {
                $event = Event::where('active',1)->orderBy('event_start', 'DESC')->where('event_end', '>=', Carbon::now()->toDateTimeString())->first();
            }


        }


        return $event;
    }

}