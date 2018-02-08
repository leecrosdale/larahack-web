<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($user_id) {

        $user = User::findOrFail($user_id);
        return view('user.profile',['user' => $user]);

    }
}
