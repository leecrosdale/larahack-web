<?php

namespace App\Http\Controllers;

use App\Hackathon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{


    public function index()
    {
        $hackathon = Hackathon::currentHackathon()->first();

        return Inertia::render('Welcome/WelcomeComponent', [
            'hackathon' => $hackathon,
            'streams' => $hackathon->streams,
            'sponsors' => $hackathon->sponsors
        ]);
    }
}
