<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MT7GJR3');</script>
    <!-- End Google Tag Manager -->

    <meta name="google-site-verification" content="8hXPsBeIeEwKfMyoLpMuzjy9GvWlYxD8hMqDtWyIXXM"/>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="LaraHack - A Laravel Hackathon">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Laravel Hackathon LaravelUK Every 3 months">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>LaraHack - The Laravel Hackathon</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MT7GJR3"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="app">
    <div class="header">
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">

                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav>
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('register') }}">Get started</a>
                            <a href="{{ url('login') }}">Login</a>
                        </nav>
                        <div class="menu-bar"><span class="lnr lnr-cross"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="text-center absolute-Center">
                        <h5 class="text-light" style="font-weight:lighter;">LARAHACK - THE ONLINE LARAVEL HACKATHON</h5>
                        <h3 class="display-3 text-light"><strong>Larahack</strong></h3>
                        <h4 class="text-light">Join {{ $count }} other LaraHackers now!</h4>
                        <button type="button" class="btn btn-outline-join  btn-lg mt-3">Join today</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center height align-items-center">
            <div class="col-lg-8">
                <div class="banner-content text-center">
                    @if ($stage === 1)
                        <h3 class="text-dark">Event has Started <br/>Theme: {{ $event->theme }}
                        </h3>
                        <h3 class="text-dark">Event Ends / Voting Starts:</h3>
                        <countdown-component
                                deadline="{{ $event->event_voting_start->toRfc3339String() }}"></countdown-component>
                        <a href="{{ url('register') }}" class="primary-btn d-inline-flex align-items-center"><span
                                    class="mr-10">Join The Hackathon</span><span class="lnr lnr-arrow-right"></span></a>
                    @elseif ($stage === 2)
                        <h3>Voting has Begun</h3>
                        <h3>Thankyou to everyone who took part, please log in and vote!</h3>
                        <h3>Voting Ends:</h3>
                        <countdown-component
                                deadline="{{ $event->event_voting_end->toRfc3339String() }}"></countdown-component>
                    @elseif ($stage === 3)

                        <h1>Voting has ended!</h1>
                        <h3>The winners will be announced in the LaravelUK Slack Channel</h3>

                    @elseif ($event)
                        <h1 class="text-dark">{{ $event->name }}</h1>
                        <h2>{{$event->event_start->formatLocalized('%A %d %B %Y')}}</h2>
                        <countdown-component
                                deadline="{{ $event->event_start->toRfc3339String() }}"></countdown-component>
                        <a href="{{ url('register') }}" class="primary-btn d-inline-flex align-items-center"><span
                                    class="mr-10">Join The Hackathon</span><span class="lnr lnr-arrow-right"></span></a>

                    @else
                        <h3 class="text-dark">Next Event is being planned!</h3>
                        <a href="{{ url('register') }}" class="primary-btn d-inline-flex align-items-center"><span
                                    class="mr-10">Join Us!</span><span class="lnr lnr-arrow-right"></span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="js/moment.js"></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
