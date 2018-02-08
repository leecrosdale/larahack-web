<?php

namespace App\Http\Controllers;

use App\Helpers\Stage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $event = Stage::getEvent();

        if ($event) {
            $stage = $event->getStage();
        } else {
            $stage = 0;
        }

        return view('home', ['event' => $event, 'stage' => $stage]);
    }
}
