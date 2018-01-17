@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Teams - <a href="{{ url('team/create') }}">Create a Team</a></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @if ($teams->isEmpty())
                            <h3>No teams yet, Create one!</h3>
                        @else

                            <table class="table table-striped table-responsive">
                                <tr>
                                    <th>Team Name</th>
                                    <th>Member Count</th>
                                </tr>
                            @foreach ($teams as $team)

                                <tr>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->users->count() }}</td>
                                </tr>


                            @endforeach
                            </table>

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
