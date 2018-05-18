@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Swag</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @if ($stage === 1)
                            Thanks for taking part in LaraHack, <br/><br/>

                               <h2>Here's $15 Linode credit!</h2><br/>
                                For their smallest 1GB plan, that’s 3 months of service.<br/>
                                Once the event is running, Just head to Linode.com and enter the promo code, <b>LARAHACK2</b>
                        @else
                                <h2>Swag will appear here once the event starts.</h2>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
