<!doctype html>
<html class="no-js" lang="en">

@include('layouts.global_components.front.front_head')

<body>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="/assets/front/images/banner/loader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--Header area start here-->
    <div section-scroll='0' class="wd_scroll_wrap">
        @include('layouts.global_components.front.front_nav')
        <!--Header area end here-->
        <!--Slider area start here-->
        <section class="slider-area">
           @include('layouts.global_components.front.front_head_scripts')
            <div id="particles-js">
                @include('layouts.global_components.front.front_wallpaper')
            </div>
        </section>
        <!--Slider area end here-->
        <section class="currency-area">
            <div class="container-fliud">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con">
                                    <h2><img src="/assets/front/images/icons/1.png" alt=""><span>Bitcoin</span></h2>
                                    <button class="btn3">4.160651 BTC</button>
                                </div>
                            </div>
                        </div>
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con">
                                    <h2><img src="/assets/front/images/icons/2.png" alt=""><span>Ethereum</span></h2>
                                    <button class="btn3">3.245000 ETH</button>
                                </div>
                            </div>
                        </div>
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con">
                                    <h2><img src="/assets/front/images/icons/3.png" alt=""><span>Dollar (USD)</span></h2>
                                    <button class="btn3">58634.000 USD</button>
                                </div>
                            </div>
                        </div>
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con">
                                    <h2><img src="/assets/front/images/icons/4.png" alt=""><span>Total USD</span></h2>
                                    <button class="btn3">111969.062 USD</button>
                                </div>
                            </div>
                        </div>
                        <div class="rete-list hidden-md   wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                            <div class="content">
                                <div class="con">
                                    <h2><img src="/assets/front/images/icons/5.png" alt=""><span>Token Sale</span></h2>
                                    <button class="btn3">346636.775</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--About area start here-->
    <div section-scroll='1' class="wd_scroll_wrap">
        <section class="about-area pd-t70 pd-b100 jarallax bg-img">
            @yield('content')
        </section>
        <!--About area end here-->
        <div class="sud">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #10122d;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                     c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                     c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                     c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                     c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div>
    </div>
    <div section-scroll='2' class="wd_scroll_wrap">
        <section class="features-area section">
            <div id="features-js">
                @yield('content-feature')
            </div>
        </section>
    </div>
    <div section-scroll='3' class="wd_scroll_wrap">
        <section class="projects bg-img pd-t100 pd-b70 jarallax">
            @yield('content-project')
        </section>
    </div>
    <div section-scroll='4' class="wd_scroll_wrap">
        <section class="steps-area section">
            <div id="steps-js">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                            <div class="steps-heading">
                                <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Few Steps For a Loan</h2>
                                <div class="right-con">
                                    <span>Scroll Down</span>
                                    <a data-scroll data-options='{ "speed": 100 }' href="#steps"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="steps" class="steps-details bg-mg">
            @yield('content-loan')
        </section>
        <div class="sud">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #10122d;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                     c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                     c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                     c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                     c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div>
    </div>
    <div section-scroll='5' class="wd_scroll_wrap">
        <section class="video-area section">
            <div id="video-js">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="videos-heding">
                                <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Development of Bit Money Platform<br>(Road Map)</h2>
                                <div class="videos-box">
                                    <video id="my-video" class="video-js" controls preload="auto" width="770" height="400" poster="/assets/front/images/video/1.png" data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/Gc2en3nHxA4"}], "youtube": { "customVars": { "wmode": "transparent" } } }'>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="wd_scroll_wrap">
            <section class="video-des bg-img ">
                @yield('content-video')
            </section>
        </div>
        <div class="sud">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #10122d;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                        c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                        c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                        c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                        c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div>
    </div>
    </div>
    <div section-scroll='6' class="wd_scroll_wrap">
        <section class="tokens-area section">
            <div id="token-js">
                @yield('content-plan')
            </div>
        </section>
        {{-- <section class="token-details section bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Distribution of Tokens</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                        <div class="tokes-chart-slider wow animate fadeIn" data-wow-duration="1s">
                            <div class="cart-list">
                                <div class="chart col-sm-6">
                                    <div id="e_chart_3" class="" style="height:400px;"></div>
                                    <div class="imgs"><img src="/assets/front/images/icons/l.png" alt="" /></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="label-chatrs">
                                        <div class="lsits">
                                            <span class="clabels-text">85%</span>
                                            <p>For participants of Pre-Sale and ICO</p>
                                        </div>
                                        <div class="lsits">
                                            <span class="clabels-text">8%</span>
                                            <p>Reserved for the team.</p>
                                        </div>
                                        <div class="lsits">
                                            <span class="clabels-text">4%</span>
                                            <p>Reserved for the consultants.</p>
                                        </div>
                                        <div class="lsits">
                                            <span class="clabels-text">3%</span>
                                            <p>Bounty campaign</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-list">
                                <div class="chart col-sm-6">
                                    <div id="e_chart_2" class="" style="height:400px;"></div>
                                    <div class="imgs"><img src="/assets/front/images/icons/l.png" alt="" /></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="label-chatrs">
                                        <div class="lsits">
                                            <span class="clabels-text">85%</span>
                                            <p>For participants of Pre-Sale and ICO</p>
                                        </div>
                                        <div class="lsits">
                                            <span class="clabels-text">8%</span>
                                            <p>Reserved for the team.</p>
                                        </div>
                                        <div class="lsits">
                                            <span class="clabels-text">4%</span>
                                            <p>Reserved for the consultants.</p>
                                        </div>
                                        <div class="lsits">
                                            <span class="clabels-text">3%</span>
                                            <p>Bounty campaign</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contents text-center">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">The issued tokens will be distributed as follows:</h2>
                            <a href="#" class="btn1 wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">Download WhitePaper</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sud">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #10122d;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                     c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                     c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                     c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                     c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div> --}}
        {{-- <section class="team-area pd-t100 pd-b50">
            <div id="particles-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-heading2">
                                <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Core Team</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                            <div class="team-list">
                                <div class="conte">
                                    <div class="dbox">
                                        <div class="dleft">
                                            <img src="/assets/front/images/team/1.png" alt="" />
                                        </div>
                                        <div class="dright">
                                            <div class="content">
                                                <h3>Ajay Suryavanshi</h3>
                                                <span>(Co-Founder & CEO)</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="con">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                            <div class="team-list">
                                <div class="conte">
                                    <div class="dbox">
                                        <div class="dleft">
                                            <img src="/assets/front/images/team/2.png" alt="" />
                                        </div>
                                        <div class="dright">
                                            <div class="content">
                                                <h3>Jeniffer Doe</h3>
                                                <span>(Co-Founder & CEO)</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="con">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                            <div class="team-list">
                                <div class="conte">
                                    <div class="dbox">
                                        <div class="dleft">
                                            <img src="/assets/front/images/team/3.png" alt="" />
                                        </div>
                                        <div class="dright">
                                            <div class="content">
                                                <h3>Akshay Handge</h3>
                                                <span>(Co-Founder & CEO)</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="con">
                                        <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                            <div class="team-list">
                                <div class="conte">
                                    <div class="dbox">
                                        <div class="dleft">
                                            <img src="/assets/front/images/team/4.png" alt="" />
                                        </div>
                                        <div class="dright">
                                            <div class="content">
                                                <h3>Maria Willium</h3>
                                                <span>(Co-Founder & CEO)</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="con">
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. There are many variations of passages.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="team2-area pd-t100 pd-b50 bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Our Advisors</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                        <div class="team-list">
                            <div class="conte">
                                <div class="dbox">
                                    <div class="dleft">
                                        <img src="/assets/front/images/team/5.png" alt="" />
                                    </div>
                                    <div class="dright">
                                        <div class="content">
                                            <h3>Mason Liam</h3>
                                            <span>(Co-Founder & CEO)</span>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="con">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                        <div class="team-list">
                            <div class="conte">
                                <div class="dbox">
                                    <div class="dleft">
                                        <img src="/assets/front/images/team/6.png" alt="" />
                                    </div>
                                    <div class="dright">
                                        <div class="content">
                                            <h3>Jammy Doe</h3>
                                            <span>(Co-Founder & CEO)</span>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="con">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                        <div class="team-list">
                            <div class="conte">
                                <div class="dbox">
                                    <div class="dleft">
                                        <img src="/assets/front/images/team/7.png" alt="" />
                                    </div>
                                    <div class="dright">
                                        <div class="content">
                                            <h3>Daniel Matthew</h3>
                                            <span>(Co-Founder & CEO)</span>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="con">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                        <div class="team-list">
                            <div class="conte">
                                <div class="dbox">
                                    <div class="dleft">
                                        <img src="/assets/front/images/team/8.png" alt="" />
                                    </div>
                                    <div class="dright">
                                        <div class="content">
                                            <h3>Henry Jack</h3>
                                            <span>(Co-Founder & CEO)</span>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="con">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <div class="sud">
            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #10122d;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                     c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                     c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                     c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                     c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div> --}}
    </div>
    <div section-scroll='7' class="wd_scroll_wrap">
        {{-- <section class="blog-area section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading2">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-slider">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                <figure><img src="/assets/front/images/blog/1.jpg" alt="" /></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2018</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                <figure><img src="/assets/front/images/blog/2.jpg" alt="" /></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2018</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog wow  fadeInUp animated" data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                                <figure><img src="/assets/front/images/blog/3.jpg" alt="" /></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2018</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog">
                                <figure><img src="/assets/front/images/blog/1.jpg" alt="" /></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2018</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog">
                                <figure><img src="/assets/front/images/blog/2.jpg" alt="" /></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2018</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog">
                                <figure><img src="/assets/front/images/blog/3.jpg" alt="" /></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2018</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-btn">
                        <a href="#">All News</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="media-area section bg-img jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Press (Media)</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                        <div class="mediabrand">
                            <ul>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/1.png" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/2.png" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/3.png" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/4.png" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.4s" style="visibility: visible; animation-duration: 2.4s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/5.png" alt="" /></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/6.png" alt="" /></a>
                                </li>
								<li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/7.png" alt="" /></a>
                                </li>
								<li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="/assets/front/images/media/8.png" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Footer area start here-->
      @include('layouts.global_components.front.front_footer')
    </div>
    <!--Footer area end here-->
    <!-- all js here -->
    <!-- jquery latest version -->

    @include('layouts.global_components.front.front_scripts')
</body>

</html>