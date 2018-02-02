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

                        Thanks for taking part in LaraHack, <br/><br/>

                           <h2>Here's $15 Linode credit!</h2><br/>
                            For their smallest 1GB plan, that’s 3 months of service.<br/>
                            Just head to Linode.com and enter the promo code, <b>LARAHACK2018</b>, when you sign up.

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
