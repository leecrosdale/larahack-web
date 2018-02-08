<?php

namespace App\Http\Controllers;

use App\Helpers\Stage;
use App\Project;
use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
    public function addVote($project_id, $vote_type) {

        $event = Stage::getEvent();
        $stage = Stage::stage($event);

        if ($stage === 2) {

            // Check that the user hasn't already voted for that type.
            $vote = Auth::user()->votes()->where('vote_type', $vote_type)->first();

            if ($vote) {
                return redirect(url('project/' . $project_id));
            }

            $project = Project::findOrFail($project_id);

            // TODO Vote types should go into a database table
            if ($vote_type > 3 || $vote_type < 1) {
                return redirect(url('project/' . $project_id));
            }

            if ($project->event_id == $event->id) {

                Vote::create([
                    'user_id' => Auth::user()->id,
                    'project_id' => $project->id,
                    'vote_type' => $vote_type
                ]);

            }

            return redirect(url('project/' . $project_id . '/success'));

        } else{
            return redirect(url('project/' . $project_id));
        }


    }
}
