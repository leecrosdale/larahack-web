<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta name="google-site-verification" content="8hXPsBeIeEwKfMyoLpMuzjy9GvWlYxD8hMqDtWyIXXM" />
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="A Laravel Hackathon Starting 3rd Feb 2018">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Laravel Hackathon February LaravelUK">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>LaraHack - A Laravel Hackathon - Starting 3rd Feb 2018</title>

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
<div class="main-wrapper-first" id="app">
    <header>
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav class="hide">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('register') }}">Join</a>
                            <a href="{{ url('login') }}">Login</a>
                        </nav>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="banner-area">
        <div class="container">
            <div class="row justify-content-center height align-items-center">
                <div class="col-lg-8">
                    <div class="banner-content text-center">
                        <span class="text-white top text-uppercase">LaraHack - The 48 Hour Online Laravel Hackathon</span>
                        <h1 class="text-white text-uppercase">Starting February 3rd 2018</h1>
                        <countdown-component></countdown-component>
                        <h3>Join {{ $count }} other LaraHackers now!</h3> <br/>
                        <a href="{{ url('register') }}" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Join The Hackathon</span><span class="lnr lnr-arrow-right"></span></a>


                        <br/><br/><h3 class="text-white">Check out the amazing prizes below</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Feature Area -->
    <section class="featured-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-feature d-flex flex-wrap justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="lnr lnr-sun"></span>
                        </div>
                        <div class="desc">
                            <h6 class="title text-uppercase">Theme Based</h6>
                            <p>A theme will be announced at the starting time.</p>
                            <p><i>Don't feel the theme?</i> Make something else.</p>
                            <p>All submissions will be accepted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-feature d-flex flex-wrap justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="lnr lnr-code"></span>
                        </div>
                        <div class="desc">
                            <h6 class="title text-uppercase">Solo or Team</h6>
                            <p>Work together in a <i>Team</i> or go <i>Solo</i>.</p>
                            <p>All the work you produce is <i>yours to keep</i>. We just ask that you are available for press / questions if needed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-feature d-flex flex-wrap justify-content-between">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="lnr lnr-clock"></span>
                        </div>
                        <div class="desc">
                            <h6 class="title text-uppercase">Help where you can</h6>
                            <p>Not a developer / designer? Join our <a href="{{ url('chat') }}">chat</a> and see how you can help. There is always <i>something</i> you can do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Area -->
    <!-- Start Service Area -->
    <section class="service-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h3 class="text-white">Prizes</h3>
                        <span class="text-white text-uppercase">
                            <h3 class="text-white"> First Place: $500 in DigitalOcean Credits</h3>
                            <h3 class="text-white"> Second Place: $250 in DigitalOcean Credits</h3>
                            <h3 class="text-white">Third Place: $100 in DigitalOcean Credits</h3>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row" style="display:none;">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s1.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Creative Design</h6>
                            <p class="text-white">WordPress, the premier free open-source blogging utility, has gone through several upgrades in</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s2.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Driving Lesson</h6>
                            <p class="text-white">The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s3.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Climbing Stairs</h6>
                            <p class="text-white">Having used discount toner cartridges for twenty years, there have been a lot of changes in the </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s4.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Bike Accident</h6>
                            <p class="text-white">Every avid independent filmmaker has dre amed about making that special interest documentary, or </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s5.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Car Driving</h6>
                            <p class="text-white">Looking to buy a new computer Overwhelmed by all of the options available to you? Stressed by the </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s6.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Beach HoTel</h6>
                            <p class="text-white">Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution, since it lets you use the headphones </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s7.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Under Passway</h6>
                            <p class="text-white">Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service">
                        <div class="thumb" style="background: url(img/s8.jpg);">
                            <div class="overlay overlay-content d-flex justify-content-center align-items-center">
                                <a href="#" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="desc">
                            <h6 class="text-uppercase text-white">Dawn to dusk</h6>
                            <p class="text-white">Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    <!-- Start Amazing Works Area -->
</div>
<div class="main-wrapper">
    <section class="amazing-works-area">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h3>Sponsors</h3>
                </div>
            </div>
        </div>

        <div class="active-works-carousel mt-40">

            <div class="item">
                <a href="https://linode.com"><div class="thumb" style="background: url(img/sponsor/digitalocean.png);"></div></a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://www.digitalocean.com/">DigitalOcean</a></h6>
                    <p>DigitalOcean gets out of your way so teams can build, deploy, and scale cloud applications faster and more efficiently. </p>
                </div>
            </div>

            <div class="item">
                <a href="https://linode.com"><div class="thumb" style="background: url(img/sponsor/linode.png);"></div></a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://linode.com">Linode</a></h6>
                    <p>High performance SSD Linux servers for all of your infrastructure needs.</p>
                </div>
            </div>

            <div class="item">
                <a href="https://snapshooter.io"><div class="thumb" style="background: url(img/sponsor/snapshooter.png);"></div></a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://snapshooter.io">Snapshooter.io</a></h6>
                    <p>Don't lose your data. Schedule frequent customizable DigitalOcean backups of your droplets and volumes.</p>
                </div>
            </div>
            <div class="item">
                <a href="https://laraveluk.gitlab.io/"><div class="thumb" style="background: url(img/sponsor/laraveluk.png);"></div></a>
                <div class="caption text-center">
                    <h6 class="text-uppercase"><a href="https://laraveluk.gitlab.io/">LaravelUK</a></h6>
                    <p>The most exciting coding group in the UK</p>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="main-wrapper">
    <!-- End Amazing Works Area -->
    <!-- Start Story Area -->
    <section class="story-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="story-title">
                        <h3 class="text-white">The Laravel Framework</h3>
                        <span class="text-uppercase text-white"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-box">
                        <h6 class="text-uppercase">Change the world with Laravel</h6>
                        <p>Laravel is a powerful framework, and perfect for all sorts of websites and services.</p>
                        <a href="https://laravel.com" target="_blank" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Find Out More</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Story Area -->
    <!-- Start Subscription Area -->
    <section class="subscription-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h3>Contact Us</h3>
                        <span class="text-uppercase">Have a question? Contact us here.</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-lg-offset-2">
                    <div id="mc_embed_signup">
                     <i>  Email: <a href="mailto:lee@larahack.com">lee@larahack.com</a> | <a href="https://leecrosdale.com" target="_blank">leecrosdale.com</a></i>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Subscription Area -->
    <!-- Start footer Area -->
    <footer>
        <div class="container">
            <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="footer-social">                    
                    <a href="https://twitter.com/leecrosdale"><i class="fa fa-twitter"></i></a>                    
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="js/moment.js"></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
