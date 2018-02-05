@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $project->title }}</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-12" >
                                @if ($userIsOwner)
                                    <a href="{{ url('project/' . $project->id . '/edit') }}"><button class="btn btn-success">Edit / Members</button></a> <br/><hr/><br/>
                                @endif

                                <img src="{{ $project->image }}" style="width:50%"> <hr/>
                                <div style="word-wrap: break-word;">
                                    <p>{{ $project->description }}</p>
                                </div>

                                @if ($project->url != '')  <p>Url: <a href="{{ $project->url }}">{{ $project->url }}</a></p> @endif
                                @if ($project->repo != '') <p>Repository: <a href="{{ $project->repo }}">{{ $project->repo }}</a></p> @endif

                                <hr/>

                                    @if (\Carbon\Carbon::now()->toDateTimeString() > \Carbon\Carbon::parse('2018-02-05T08:00:00')->toDateTimeString() && \Illuminate\Support\Facades\Auth::user()->created_at < \Carbon\Carbon::parse('2018-02-05T08:00:00')->toDateTimeString())

                                        <h2>Voting - <a href="{{ url('voting/rules') }}">Voting Rules</a></h2>

                                        <div class="row">
                                            <div class="col-md-4"><a href="{{ url('project/' . $project->id . '/vote/1') }}"><button class="btn btn-success" @if (isset($votes[1])) disabled="disabled" @endif >Best Use of Theme</button></a></div>
                                            <div class="col-md-4"><a href="{{ url('project/' . $project->id . '/vote/2') }}"><button class="btn btn-info" @if (isset($votes[2])) disabled="disabled" @endif >Best Idea/Project</button></a></div>
                                            <div class="col-md-4"><a href="{{ url('project/' . $project->id . '/vote/3') }}"><button class="btn btn-danger" @if (isset($votes[3])) disabled="disabled" @endif >Best Use of Laravel Framework</button></a></div>
                                        </div>

                                    @elseif(\Carbon\Carbon::now()->toDateTimeString() > \Carbon\Carbon::parse('2018-02-05T08:00:00')->toDateTimeString())

                                        <p>You registered after the event ended so you cannot vote.</p>

                                    @endif

                                <h2>Members

                                    @if(!$project->join_requests()->where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->first())
                                        - <a href="{{ url('project/' . $project->id . '/join') }}"><button class="btn btn-success">Join</button></a>
                                    @endif



                                </h2>

                                @foreach ($project->users()->get() as $user)
                                    <p>{{ $user->name }}</p>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
