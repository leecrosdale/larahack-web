@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $user->name }}
                    </div>

                    <div class="panel-body">

                        @if ($user->user_profile)

                            @if ($user->user_profile->dob) <p>D.O.B: {{ $user->user_profile->dob }}</p> @endif

                            @if ($user->user_profile->facebook) <p>Facebook: {{ $user->user_profile->facebook }}</p> @endif
                            @if ($user->user_profile->twitter) <p>Twitter: {{ $user->user_profile->twitter }}</p> @endif
                            @if ($user->user_profile->linkedin) <p>LinkedIn: {{ $user->user_profile->linkedin }}</p> @endif
                        @else

                            @if ($user->id == \Illuminate\Support\Facades\Auth::user()->id)

                                Set up your profile (Coming soon).

                            @else

                                User has not set up their profile yet.

                            @endif

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
