<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 08/02/18
 * Time: 11:04
 */

namespace App\Helpers;


use Carbon\Carbon;

class Stage
{

    public static function stage($event) {

        $now = Carbon::now()->toDateTimeString();

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

}