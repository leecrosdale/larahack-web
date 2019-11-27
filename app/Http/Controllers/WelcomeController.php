<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event = Event::currentEvent()->first();

        return Inertia::render('WelcomeComponent', [
            'event' => $event,
            'streams' => $event->streams
        ]);
    }
}
