<?php

namespace App\Http\Controllers;

use App\Helpers\Vote;
use App\JoinRequest;
use App\Project;
use App\User;
use App\ProjectUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $latest_project = $this->latestProject(Auth::user()->id);
        return view('project.create', ['latest_project' => $latest_project]);
    }

    private function latestProject($user_id) {

        $user = User::where('id', $user_id)->first();
        return $user->projects()->where('owner',1)->first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:80',
            'description' => 'required'
        ]);

        $latest_post = $this->latestProject(Auth::user()->id);


        if ($latest_post) {
            return redirect(url('projects'));
        }

        $project = Project::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'repo' => $request->input('repo'),
            'image' => url('img/blank.png')
        ]);


        if ($project) {
            Auth::user()->projects()->attach($project, ['owner' => 1]);
            return redirect(url('project/' . $project->id));
        } else {
            return redirect(url('project'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project.show', ['project' => $project, 'userIsOwner' => $project->users()->where('owner',1)->where('user_id', Auth::user()->id)->first(),  'votes' => Vote::sortVotes(Auth::user())]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project =Auth::user()->projects()->where('id', $id)->first();
        return view('project.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:80',
            'description' => 'required'
        ]);

        $project = Auth::user()->projects()->where('id', $id)->first();

        if ($project) {

            $project->title = $request->input('title');
            $project->description = $request->input('description');
            $project->url = $request->input('url');
            $project->repo = $request->input('repo');
            $project->save();

            return redirect(url('project/' . $project->id));

        }

        return redirect(url('project'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function join($id) {

        JoinRequest::create(['user_id'=>Auth::user()->id, 'project_id' => $id]);

        return redirect(url('request'));

    }


}
