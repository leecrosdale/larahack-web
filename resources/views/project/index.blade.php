@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Projects - <a href="{{ url('project/create') }}">Submit a Project</a></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @if ($projects->isEmpty())
                            <h3>No current event projects yet.</h3>
                        @else

                            <div class="row">

                            @foreach ($projects as $project)

                                <div class="col-md-4" style="text-align:center">
                                    <article>
                                        <img src="{{ $project->image }}" style="width:100%">
                                        <h2>{{ $project->title }}</h2>
                                        <p>{{ substr($project->description,0,15) }}@if (strlen($project->description) > 15)... @endif</p>
                                        <p>Members: {{ count($project->users()->get()) }}</p>
                                        <a href="{{ url('project/' . $project->id) }}"><button class="btn">View</button></a>
                                    </article>
                                </div>

                                @if ($loop->iteration % 3 === 0) </div><div class="row"><hr/> @endif

                            @endforeach

                            </div>

                        @endif


                        @if ($past_projects->isEmpty())
                                <h3>No Past Projects :(</h3>
                        @else

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr/>
                                        <h1>Past Projects</h1>
                                    </div>
                                </div>

                                <div class="row">

                                    @foreach ($past_projects as $project)

                                        <div class="col-md-4" style="text-align:center">
                                            <article>
                                                <img src="{{ $project->image }}" style="width:100%">
                                                <h2>{{ $project->title }}</h2>
                                                <p>{{ substr($project->description,0,15) }}@if (strlen($project->description) > 15)... @endif</p>
                                                <p>Members: {{ count($project->users()->get()) }}</p>
                                                <a href="{{ url('project/' . $project->id) }}"><button class="btn">View</button></a>
                                            </article>
                                        </div>

                                        @if ($loop->iteration % 3 === 0) </div><div class="row"><hr/> @endif

                                    @endforeach

                                </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
