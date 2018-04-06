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

        $event = Stage::getEvent();

        if ($event) {
            $stage = $event->getStage();
        } else {
            $stage = 0;
        }


        return view('welcome', ['count' => $users, 'stage' => $stage, 'event' => $event]);
    }

	public function terms() {
		return view('terms');
	}
}
