<?php

namespace App\Http\Controllers;

use App\Event;
use App\Helpers\Stage;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {

        $users = User::count();
        $event = Event::where('active',1)->where('event_start', '>=', Carbon::now()->toDateTimeString())->where('event_end', '<=', Carbon::now()->toDateTimeString())->first();

        if (!$event) {
            $event = Event::orderBy('event_start', 'DESC')->where('event_end', '>=', Carbon::now()->toDateTimeString())->first();
        }

        if ($event) {
            $stage = Stage::stage($event) ;
        } else {
            $stage = 0;
        }

        return view('welcome', ['count' => $users, 'stage' => $stage, 'event' => $event]);
    }
}
