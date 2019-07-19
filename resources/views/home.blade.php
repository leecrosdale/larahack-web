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

                    @if ($stage === 1)
                     <h1>Theme: {{ $event->theme }}</h1>


                    This LaraHack the theme was chosen by a member of our community, so I'm sure you understand why the theme is what it is. <br/>
                    I feel this feel is broad enough to basically open up the entire Laravel framework, <br/>
                    and should give you the opportunity to build something cool.

                    <h3>Good luck LaraHackers! May Laravel be with you.</h3>


                            Judgment Categories:

                        <ul>
                            <li>1. Best use of theme</li>
                            <li>2. Best idea / project</li>
                            <li>3. Best use of the Laravel Framework</li>
                        </ul>





                    @elseif ($stage === 2)




                            <h3>The event has ended, the voting process has now started.</h3>

                            <hr/>
                            <h1>Theme:  {{ $event->theme }}</h1>

                            <hr/>

                            <p><b>Voting</b></p>
                            <p>The voting process is easy, everyone has 3 votes. Simply go to the projects screen, and view each project.</p>
                            <p>If you see a project worth a vote, click the category you'd like to vote for</p>
                            <p>Each person gets 3 votes, 1 for each category. You can only vote once for each category, but if you like, you can vote for all categories against a single project</p>
                            <p>It's late, I hope this makes sense. I will be around to help if anyone has questions</p>


                    @elseif ($stage === 3)

                    <h3>Voting has Ended. <br/> I will announce the winners in the LaravelUK Slack channel shortly</h3>


                    @else

                        <h3>Event is being planned right now!</h3>

                    @endif


                    <hr/>

                    <h2>FAQ</h2>
                    What do I do now? <br/><br/>






                    <ol>
                        <li>Join the LaravelUK Slack Channel (see link at the top). <br/> This is where most of us will be, there is also a #larahack channel to join</li> <br/>
                        <li>Decide if you are working alone or in a team.</li> <br/>
                        <li>Once decided, the leader should create a project at the top, and team members (if any) can then request to join the project by viewing it and clicking 'join'</li><br/>
                        <li>Work on your project :-)</li><br/>
                        @if ($event) <li>In {{ $event->event_voting_start->diffForHumans() }} at {{ $event->event_voting_start->format("H:i ") }} the event will end. By this time, you should cease working and post an image of your latest commit (and time) to the larahack on the LaravelUK slack channel</li><br/> @endif
                        <li>The judging process now begins</li><br/>
                        <li>We ask everyone to vote for a project in each of the categories.</li><br/>
                        <li>In 1 weeks time, we will total the votes and announce the winners</li><br/>
                        <li>If you won, we will contact you via the email address you signed up with.</li>
                    </ol>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
