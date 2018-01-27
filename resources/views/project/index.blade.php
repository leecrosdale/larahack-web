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
                            <h3>No projects yet.</h3>
                        @else
                            @foreach ($projects as $project)

                                <article>
                                    <h2>{{ $project->name }}</h2>
                                    <p>{{ $project->description }}</p>
                                    <p>Owner: {{ $project->user->name }}</p>

                                    @if (count($project->users()->get() > 0))

                                        @foreach ($project->users()->get() as $user)
                                            <p>{{ $user->name }}</p>
                                        @endforeach

                                    @endif
                                </article>

                                <hr/>


                            @endforeach


                            {{ $posts->links() }}

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
