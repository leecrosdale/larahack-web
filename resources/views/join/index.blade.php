@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Requests to join Projects</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($myJoins->isEmpty())
                            <h4>You can request to join a project by viewing the project and clicking 'Join'</h4>
                        @else

                            <h4>Your Project Join Requests</h4>

                            @foreach ($myJoins as $join)

                                    <div class="row">
                                        <div class=" col-md-offset-1 col-md-4">{{ $join->project->title }}</div>
                                        <div class="col-md-4">{{ $join->getStatus() }}</div>
                                        @if ($join->status < 1) <div class="col-md-2"><button class="btn btn-danger">Cancel</button></div> @endif
                                    </div>

                            @endforeach
                        @endif

                            <hr/>

                            @if ($projectJoins == null || $projectJoins->isEmpty())
                                <h4>No one has requested to join your project, Yet.</h4>
                            @else

                                <h4>Your Project Join Requests</h4>

                                    @foreach ($projectJoins as $join_request)
                                        <div class="row">
                                            <div class=" col-md-offset-1 col-md-4">{{ $join_request->user->name }}</div>
                                            <div class="col-md-2"><a href="{{ url('request/' . $join_request->id . '/' . $join_request->project_id . '/1') }}"><button class="btn btn-success">Allow</button></a></div>
                                            <div class="col-md-2"><a href="{{ url('request/' . $join_request->id . '/' .  $join_request->project_id . '/2') }}"><button class="btn btn-danger">Disallow</button></a></div>
                                        </div>
                                    @endforeach

                            @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
