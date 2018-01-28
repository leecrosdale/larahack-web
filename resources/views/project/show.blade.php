@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                                <h2>Members - <a href="{{ url('project/' . $project->id . '/join') }}"><button class="btn btn-success">Join</button></a></h2>

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
