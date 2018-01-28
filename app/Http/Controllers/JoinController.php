<?php

namespace App\Http\Controllers;

use App\JoinRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myJoins = JoinRequest::where('user_id', Auth::user()->id)->get();
        $project = Auth::user()->projects()->where('owner', 1)->first();

        if ($project) {
            $projectJoins = $project->join_requests()->where('status', '<', 1)->get();
        } else {
            $projectJoins = null;
        }

        return view('join.index', ['myJoins'=>$myJoins, 'projectJoins'=>$projectJoins]);
    }

    public function cancelRequest($id) {
        $jr = Auth::user()->join_requests()->where('id', $id)->first();
        $jr->status = 3;
        $jr->save();

        return redirect(url('requests'));
    }

    public function joinUpdate($id, $project_id, $status) {

        $jr = JoinRequest::findOrFail($id);
        $project = Auth::user()->projects()->where('id', $project_id)->where('owner', 1)->first();


        if ($project && $jr) {
            $jr->status = $status;
            $jr->save();


            if ($status == 1) {
                $user = $jr->user;
                $user->projects()->attach($project);
            }
        }

        return redirect(url('request'));

    }

}
