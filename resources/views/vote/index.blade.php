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

                        @if ($votes->isEmpty())
                            <h3>No Votes Yet</h3>
                        @else

                            <div class="row">
                                <div class="col-md-12">
                                    <hr/>
                                    <h1>Votes</h1>
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Project</th>
                                        <th>Vote</th>
                                        <th>Votes</th>
                                    </tr>
                                @foreach ($votes as $vote)
                                    <tr>
                                        <td>{{ $vote->project->title }}</td>
                                        <td> @switch($vote->vote_type)
                                            @case(1)
                                                Best Use of Theme
                                            @break
                                            @case(2)
                                                Best Idea/Project
                                            @break
                                            @case(3)
                                                Best Use of Laravel Framework
                                            @break
                                        @endswitch
                                        </td>
                                        <td>{{ $vote->votes }}</td>
                                    </tr>
                                @endforeach
                                </table>
                            </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
