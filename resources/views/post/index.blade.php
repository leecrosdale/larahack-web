@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts - <a href="{{ url('posts/create') }}">Create a Post</a></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @if ($posts->isEmpty())
                            <h3>No posts yet.</h3>
                        @else
                            @foreach ($posts as $post)

                                <article>
                                    <h2>{{ $post->title }}</h2>
                                    <p>{{ $post->description }}</p>
                                    <p>by <a href="{{ url('user/' . $post->user->id) }}">{{ $post->user->name }}</a> - {{ $post->created_at->diffForHumans() }} </p>
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
