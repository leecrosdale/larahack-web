@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a new Post</div>

                    <div class="panel-body">


                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($latest_post && $latest_post->created_at > \Carbon\Carbon::now()->addMinutes(-30))

                            You can create a new post once every 30 minutes.

                        @else

                            <form class="form-horizontal" action="{{ url('posts') }}" method="post">

                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-4 control-label">Title</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control" name="title"
                                               value="{{ old('title') }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class="col-md-4 control-label">Post</label>

                                    <div class="col-md-6">
                                        <textarea id="description" type="text" class="form-control" name="description"
                                                  required autofocus>{{ old('description') }}</textarea>

                                        @if ($errors->has('team_url'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('team_url') }}</strong>
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



                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
