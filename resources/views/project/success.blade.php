@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Projects - <a href="{{ url('project/create') }}">Submit a Project</a></div>

                    <div class="panel-body">
                        Your vote was successful. Thanks for taking part in LaraHack.<br/>
                        Remember that you have a total of 3 votes to use.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
