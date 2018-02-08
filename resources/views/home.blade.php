@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (\Carbon\Carbon::now()->toDateTimeString() > \Carbon\Carbon::parse('2018-02-03T08:00:00')->toDateTimeString() && \Carbon\Carbon::now()->toDateTimeString() < \Carbon\Carbon::parse('2018-02-05T08:00:00')->toDateTimeString())
                     <h1>Theme: {{ env('THEME') }}</h1>

                    <hr/>

                    <h3>Help! I don't have any ideas yet!</h3>

                    <p>Do not worry my LaraHack buddy, here are some pointers/ideas to get you started. </p>
                    <p>First of all, the theme is more of a guideline than a rule (points if you got the reference).</p>
                    <p>Second, yes, there is a prize aimed at the theme, but there are 2 other prizes too. Maybe you can still come up with a good idea, OR use the Laravel framework in an amazing way. </p>
                    <p>Third, TEXT BASED ADVENTURE GAME (Make the 21st century great again).</p>
                    <p>Fourth, You could use Laravel as some sort of API backend for a game, or use VueJS to make something, just use Laravel in some way.</p>
                    <p>Fifth, Just use the event to learn something, do something you've never done before, try something new. Self-Improvement is what it's all about.</p>
                    <p>And last but not least, have fun, maybe you'll finish something, maybe you won't, but you'd have done your best, and that's all we can ask.</p>

                    <h3>Good luck LaraHackers! May Laravel be with you.</h3>

                    @elseif (\Carbon\Carbon::now()->toDateTimeString() > \Carbon\Carbon::parse('2018-02-05T08:00:00')->toDateTimeString())

                            <h1>Theme: {{ env('THEME') }}</h1>
                            <hr/>

                            <h3>The event has ended!!</h3>

                            <p>WOW, That went really fast.</p>
                            <p>It's nearly midnight as I write this, I've just finished my project.</p>
                            <p>I can say that this has been an amazing experience, I have got to speak to and meet so many people.</p>
                            <p>I can't stress how thankful I am to everyone that took time out of their weekend to take part in LaraHack</p>
                            <p>Thank you to everyone involved, especially <i>Symfonycoda</i>, who's kept the hype train going while I was coding, and also a big thanks to the LaravelUK community for being so warm and welcoming.</p>
                            <p>I will keep everyone that has registered up to date with the next event.</p>
                            <p></p>
                            <p>Lee</p>

                            <hr/>

                            <p><b>Voting</b></p>
                            <p>The voting process is easy, there are 3 prizes, everyone has 3 votes. Simply goto the projects screen, and view each project.</p>
                            <p>If you see a project worth a vote, click the category you'd like to vote for</p>
                            <p>Each person gets 3 votes, 1 for each prize. You can only vote once for each prize, but if you like, you can vote for all categories against a single project</p>
                            <p>It's late, I hope this makes sense. I will be around to help if anyone has questions</p>


                        @else

                    <h1>Theme: TBA</h1>


                    @endif


                    <hr/>

                    {{--<h2>FAQ</h2>--}}
                    {{--What do I do now? <br/><br/>--}}

                    {{--<ol>--}}
                        {{--<li>Join the LaravelUK Slack Channel (see link at the top). <br/> This is where most of us will be, there is also a #larahack channel to join</li> <br/>--}}
                        {{--<li>Decide if you are working alone or in a team.</li> <br/>--}}
                        {{--<li>Once decided, the leader should create a project at the top, and team members (if any) can then request to join the project by viewing it and clicking 'join'</li><br/>--}}
                        {{--<li>Work on your project :-)</li><br/>--}}
                        {{--<li>At 8am on Monday the 5th the event will close. By this time, you should cease working and post an image of your latest commit (and time) to the larahack on the LaravelUK slack channel</li><br/>--}}
                        {{--<li>The judging process now begins</li><br/>--}}
                        {{--<li>We ask everyone to vote for a project in each of the prize categories.</li><br/>--}}
                        {{--<li>In 1 weeks time, we will total the votes and announce the winners</li><br/>--}}
                        {{--<li>If you won, we will contact you via the email address you signed up with.</li>--}}

                    {{--</ol>--}}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
