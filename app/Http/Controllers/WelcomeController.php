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
        return Inertia::render('WelcomeComponent', [
            'event' => Event::currentEvent()->first()
        ]);
    }
}
