@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a Team</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form class="form-horizontal" action="{{ url('team') }}" method="post">

                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('team_name') ? ' has-error' : '' }}">
                                <label for="team_name" class="col-md-4 control-label">Team Name</label>

                                <div class="col-md-6">
                                    <input id="team_name" type="text" class="form-control" name="team_name" value="{{ old('team_name') }}" required autofocus>

                                    @if ($errors->has('team_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button class="btn btn-primary col-md-12" type="submit">
                                        Create
                                    </button>
                                </div>
                            </div>

                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
