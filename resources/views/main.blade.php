@extends('layouts.master')

@section('content-background')

<div class="uk-section uk-padding-remove-vertical">
    <div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="background-image: url(assets/front/img/in-liquid-slide-bg.png);" data-uk-slideshow>
        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-container">
                    <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-overlay">
                                <h1>Simple.
                                    <br>Flexible. <br>
                                    Reliable.
                                </h1>
                                <p class="uk-text-lead uk-visible@m">Trade forex, commodities, synthetic and stock indices</p>
                                <a href="register" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Create free account</a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <img class="in-slide-img" src="assets/img/devices.png" data-src="assets/img/devices.png" alt="image-slide" width="500" height="400" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
            {{-- <li>
                <div class="uk-container">
                    <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-overlay">
                                <h1>Award-winning trading platforms.</h1>
                                <p class="uk-text-lead uk-visible@m">Explore endless trading opportunities with tight spreads and no commission</p>
                                <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Discover platform</a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <img class="in-slide-img" src="assets/img/devices.png" data-src="assets/img/devices.png" alt="image-slide" width="500" height="400" data-uk-img>
                        </div>
                    </div>
                </div>
            </li> --}}
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
        {{-- <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-grid uk-child-width-1-6@m uk-text-center" data-uk-grid>
                            <div class="uk-width-1-1">
                                <p class="uk-text-lead">1700+ market. Countless opportunities.</p>
                            </div>
                            <div class="slide-icons-1">
                                <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-icon-5.svg" alt="sample-icon" width="48" height="48" data-uk-img>
                                <a class="uk-button uk-button-text uk-align-center" href="#">Forex<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="slide-icons-1">
                                <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-icon-6.svg" alt="sample-icon" width="48" height="48" data-uk-img>
                                <a class="uk-button uk-button-text uk-align-center" href="#">Indices<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="slide-icons-1">
                                <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-icon-7.svg" alt="sample-icon" width="48" height="48" data-uk-img>
                                <a class="uk-button uk-button-text uk-align-center" href="#">Crypto<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="slide-icons-1">
                                <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-icon-8.svg" alt="sample-icon" width="48" height="48" data-uk-img>
                                <a class="uk-button uk-button-text uk-align-center" href="#">Shares<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="slide-icons-1">
                                <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-icon-9.svg" alt="sample-icon" width="48" height="48" data-uk-img>
                                <a class="uk-button uk-button-text uk-align-center" href="#">Commodities<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="slide-icons-1">
                                <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-icon-10.svg" alt="sample-icon" width="48" height="48" data-uk-img>
                                <a class="uk-button uk-button-text uk-align-center" href="#">All Markets<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection

@section('content')
<div class="uk-section in-liquid-6">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
            <div class="uk-width-expand@m">
                {{-- <h2>Discover a World of <span class="in-highlight">Opportunities</span>.</h2> --}}
                <h2>Trade the way you like</h2>
                <p>Choose from three powerful platforms — designed with you in mind</p>
                <div class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-3@m uk-margin-medium" data-uk-grid>
                    <div>
                        <div class="in-count-wrap">
                            {{-- <p class="uk-text-lead uk-margin-remove-bottom count" data-counter-end="1700" data-counter-append="+">0+</p> --}}
                            <p class="uk-text-muted uk-margin-remove-top">Dtrader</p>
                        </div>
                    </div>
                    <div>
                        <div class="in-count-wrap">
                            {{-- <p class="uk-text-lead uk-margin-remove-bottom count" data-counter-end="33">0</p> --}}
                            <p class="uk-text-muted uk-margin-remove-top">
                                <a href="register">Dbot</a>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="in-count-wrap">
                            {{-- <p class="uk-text-lead uk-margin-remove-bottom count" data-counter-end="23">0</p> --}}
                            <p class="uk-text-muted uk-margin-remove-top">DTM5</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-3-5@m uk-inline uk-dark">
                <img src="assets/img/dtrader.png" data-src="assets/img/dtrader.png" alt="sample-image" data-width data-height data-uk-img>
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse one" style="left: 24%; top: 42%"></span> --}}
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse two" style="left: 26%; top: 32%"></span> --}}
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse one" style="left: 34%; top: 30%"></span> --}}
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse one" style="left: 48%; top: 27%"></span> --}}
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse one" style="left: 54%; top: 30%"></span> --}}
                <span class="uk-position-absolute uk-transform-center dot-pulse two" style="left: 71%; top: 38%"></span>
                <span class="uk-position-absolute uk-transform-center dot-pulse two" style="left: 62%; top: 26%"></span>
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse two" style="left: 76%; top: 53%"></span> --}}
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse one" style="left: 86%; top: 35%"></span> --}}
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse two" style="left: 80%; top: 43%"></span> --}}
                {{-- <span class="uk-position-absolute uk-transform-center dot-pulse one" style="left: 89%; top: 72%"></span> --}}
                {{-- <p class="uk-text-small uk-text-muted uk-text-center uk-margin-top">Graphic is for illustration purpose only and should not be relied upon for investment decisions.</p> --}}
            </div>
        </div>
    </div>
</div>

@endsection


{{-- @section('content-platform') --}}

{{-- <div class="uk-text-center">
    <h2 class="uk-margin-remove">Liquid trading platform.</h2>
    <p class="uk-text-lead uk-text-muted uk-margin-small-top">Improve your trading results with our industry-leading technology</p>
</div>
<div class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center uk-margin-top" data-uk-grid>
    <div>
        <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best CFD Broker</h6>
        <p class="uk-text-small uk-margin-remove-top">TradeON Summit 2020</p>
    </div>
    <div>
        <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Execution Broker</h6>
        <p class="uk-text-small uk-margin-remove-top">Forex EXPO Dubai 2020</p>
    </div>
    <div>
        <img src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Trading Platform</h6>
        <p class="uk-text-small uk-margin-remove-top">London Summit 2020</p>
    </div>
</div>
<img class="uk-align-center" src="assets/front/img/in-liquid-7-mockup.png" data-src="assets/front/img/in-liquid-7-mockup.png" alt="sample-images" width="691" height="420" data-uk-img>
<div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center in-offset-top-10" data-uk-grid>
    <div>
        <h2 class="uk-margin-small-bottom">~30ms</h2>
        <p class="uk-text-small uk-text-uppercase uk-margin-remove-top">executions speed*</p>
    </div>
    <div>
        <h2 class="uk-margin-small-bottom">24/5</h2>
        <p class="uk-text-small uk-text-uppercase uk-margin-remove-top">support</p>
    </div>
    <div>
        <h2 class="uk-margin-small-bottom">0.0</h2>
        <p class="uk-text-small uk-text-uppercase uk-margin-remove-top">spread from 0.0 pips</p>
    </div>
    <div>
        <h2 class="uk-margin-small-bottom">150+</h2>
        <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
                <span class="d-block subheading mb-3">Testimonials</span>
                <h2 class="heading">People Says</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial">
                    <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.&rdquo;</blockquote>
                    <div class="d-flex author align-items-center">
                        <div class="img"><img src="images/person_1.jpg" alt=""></div>
                        <div class="text">
                            <h3>Alan Crew</h3>
                            <p class="mb-0">Partner at XYZ Co.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial">
                    <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.&rdquo;</blockquote>
                    <div class="d-flex author align-items-center">
                        <div class="img"><img src="images/person_2.jpg" alt=""></div>
                        <div class="text">
                            <h3>Jean Doe</h3>
                            <p class="mb-0">Partner at XYZ Co.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial">
                    <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.&rdquo;</blockquote>
                    <div class="d-flex author align-items-center">
                        <div class="img"><img src="images/person_3.jpg" alt=""></div>
                        <div class="text">
                            <h3>Jessica Smith</h3>
                            <p class="mb-0">Partner at XYZ Co.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial">
                    <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.&rdquo;</blockquote>
                    <div class="d-flex author align-items-center">
                        <div class="img"><img src="images/person_4.jpg" alt=""></div>
                        <div class="text">
                            <h3>Ben Miller</h3>
                            <p class="mb-0">Partner at XYZ Co.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="row mb-5">
    <div class="col-lg-7 mx-auto text-center">
        <span class="d-block subheading mb-3">Testimonials</span>
        <h2 class="heading">People Says</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_1.jpg" alt=""></div>
                <div class="text">
                    <h3>Alan Crew</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_2.jpg" alt=""></div>
                <div class="text">
                    <h3>Jean Doe</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_3.jpg" alt=""></div>
                <div class="text">
                    <h3>Jessica Smith</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_4.jpg" alt=""></div>
                <div class="text">
                    <h3>Ben Miller</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
</div><div class="row mb-5">
    <div class="col-lg-7 mx-auto text-center">
        <span class="d-block subheading mb-3">Testimonials</span>
        <h2 class="heading">People Says</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_1.jpg" alt=""></div>
                <div class="text">
                    <h3>Alan Crew</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_2.jpg" alt=""></div>
                <div class="text">
                    <h3>Jean Doe</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_3.jpg" alt=""></div>
                <div class="text">
                    <h3>Jessica Smith</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_4.jpg" alt=""></div>
                <div class="text">
                    <h3>Ben Miller</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
</div><div class="row mb-5">
    <div class="col-lg-7 mx-auto text-center">
        <span class="d-block subheading mb-3">Testimonials</span>
        <h2 class="heading">People Says</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_1.jpg" alt=""></div>
                <div class="text">
                    <h3>Alan Crew</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_2.jpg" alt=""></div>
                <div class="text">
                    <h3>Jean Doe</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_3.jpg" alt=""></div>
                <div class="text">
                    <h3>Jessica Smith</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_4.jpg" alt=""></div>
                <div class="text">
                    <h3>Ben Miller</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
</div><div class="row mb-5">
    <div class="col-lg-7 mx-auto text-center">
        <span class="d-block subheading mb-3">Testimonials</span>
        <h2 class="heading">People Says</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_1.jpg" alt=""></div>
                <div class="text">
                    <h3>Alan Crew</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_2.jpg" alt=""></div>
                <div class="text">
                    <h3>Jean Doe</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_3.jpg" alt=""></div>
                <div class="text">
                    <h3>Jessica Smith</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="testimonial">
            <blockquote>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                coast of the Semantics, a large language ocean.&rdquo;</blockquote>
            <div class="d-flex author align-items-center">
                <div class="img"><img src="images/person_4.jpg" alt=""></div>
                <div class="text">
                    <h3>Ben Miller</h3>
                    <p class="mb-0">Partner at XYZ Co.</p>
                </div>
            </div>
        </div>
    </div>
</div><p class="uk-text-small uk-text-uppercase uk-margin-remove-top">trading instruments</p>
    </div>
</div>
<div class="uk-text-center uk-margin-medium-top">
    <a class="uk-button uk-button-primary uk-border-rounded uk-margin-small-right" href="#">Create account<i class="fas fa-angle-right uk-margin-small-left"></i></a>
    <a class="uk-button uk-button-secondary uk-border-rounded" href="#">Discover platform<i class="fas fa-angle-right uk-margin-small-left"></i></a>
</div> --}}

{{-- @endsection --}}

@section('content-trading')
<div class="uk-section uk-section-muted uk-padding-large in-liquid-8">
    <div class="uk-container">

        <div class="uk-grid uk-flex uk-flex-center in-offset-bottom-20">
            <div class="uk-width-5-6@m uk-text-center">
                <h2 class="uk-margin-remove">Trade Types</h2>
                <p class="uk-text-lead uk-text-muted uk-margin-small-top">Explore different trade types to trade on your preferred market.</p>
                <div class="uk-grid-medium uk-child-width-1-3@m" data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OSIgdmlld0JveD0iMCAwIDQ4IDQ5Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIuMzI1JSIgeDI9Ijk5LjY3NSUiIHkxPSIxMDAlIiB5Mj0iMCUiPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkY0NDRGIiAvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRjY0NDQiIC8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJwogICAgICAgIGQ9Ik0xNTggNjQuMjFjMy4zMTQgMCA2IDIuNjk0IDYgNi4wMTl2MzYuMTE3YzAgMy4zMjUtMi42ODYgNi4wMi02IDYuMDJoLTM2Yy0zLjMxNCAwLTYtMi42OTUtNi02LjAyVjcwLjIzYzAtMy4zMjUgMi42ODYtNi4wMiA2LTYuMDJoMzZ6bTAgMy4wMDloLTM2Yy0xLjU4MiAwLTIuODc3IDEuMjI4LTIuOTkyIDIuNzg1bC0uMDA4LjIyNXYzNi4xMTdjMCAxLjU4NyAxLjIyNCAyLjg4NyAyLjc3NiAzLjAwMmwuMjI0LjAwOGgzNmMxLjU4MiAwIDIuODc3LTEuMjI4IDIuOTkyLTIuNzg1bC4wMDgtLjIyNVY3MC4yM2MwLTEuNTg3LTEuMjI0LTIuODg3LTIuNzc2LTMuMDAyTDE1OCA2Ny4yMnptLTkgMjIuNTczYzQuMTQyIDAgNy41IDMuMzcgNy41IDcuNTI1IDAgNC4xNTYtMy4zNTggNy41MjUtNy41IDcuNTI1LTQuMTQyIDAtNy41LTMuMzctNy41LTcuNTI1IDAtNC4xNTYgMy4zNTgtNy41MjUgNy41LTcuNTI1em0wIDMuMDFjLTIuNDg1IDAtNC41IDIuMDIyLTQuNSA0LjUxNXMyLjAxNSA0LjUxNSA0LjUgNC41MTUgNC41LTIuMDIyIDQuNS00LjUxNS0yLjAxNS00LjUxNS00LjUtNC41MTV6bTIuNzA1LTE2LjIyYy41ODYuNTg2LjU4NSAxLjUzNy0uMDAzIDIuMTI1TDEzMC40MTkgOTkuOTljLS41ODcuNTg3LTEuNTM5LjU4OS0yLjEyNC4wMDMtLjU4Ni0uNTg2LS41ODUtMS41MzcuMDAzLTIuMTI1bDIxLjI4My0yMS4yODJjLjU4Ny0uNTg4IDEuNTM5LS41OSAyLjEyNC0uMDA0ek0xMzEgNzEuNzM0YzQuMTQyIDAgNy41IDMuMzY4IDcuNSA3LjUyNCAwIDQuMTU2LTMuMzU4IDcuNTI1LTcuNSA3LjUyNS00LjE0MiAwLTcuNS0zLjM3LTcuNS03LjUyNSAwLTQuMTU2IDMuMzU4LTcuNTI0IDcuNS03LjUyNHptMCAzLjAxYy0yLjQ4NSAwLTQuNSAyLjAyLTQuNSA0LjUxNHMyLjAxNSA0LjUxNSA0LjUgNC41MTUgNC41LTIuMDIxIDQuNS00LjUxNWMwLTIuNDkzLTIuMDE1LTQuNTE1LTQuNS00LjUxNXoiCiAgICAgICAgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTExNiAtNjQpIiAvPgo8L3N2Zz4=" alt="">
                            <h6><strong>Margin Trading</strong></h6>
                            <p>Trade with leverage and low spreads for better returns on successful trades.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OSIgdmlld0JveD0iMCAwIDQ4IDQ5Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIuMzI1JSIgeDI9Ijk5LjY3NSUiIHkxPSIxMDAlIiB5Mj0iMCUiPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkY0NDRGIiAvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRjY0NDQiIC8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJwogICAgICAgIGQ9Ik0xNTggNjQuMjFjMy4zMTQgMCA2IDIuNjk0IDYgNi4wMTl2MzYuMTE3YzAgMy4zMjUtMi42ODYgNi4wMi02IDYuMDJoLTM2Yy0zLjMxNCAwLTYtMi42OTUtNi02LjAyVjcwLjIzYzAtMy4zMjUgMi42ODYtNi4wMiA2LTYuMDJoMzZ6bTAgMy4wMDloLTM2Yy0xLjU4MiAwLTIuODc3IDEuMjI4LTIuOTkyIDIuNzg1bC0uMDA4LjIyNXYzNi4xMTdjMCAxLjU4NyAxLjIyNCAyLjg4NyAyLjc3NiAzLjAwMmwuMjI0LjAwOGgzNmMxLjU4MiAwIDIuODc3LTEuMjI4IDIuOTkyLTIuNzg1bC4wMDgtLjIyNVY3MC4yM2MwLTEuNTg3LTEuMjI0LTIuODg3LTIuNzc2LTMuMDAyTDE1OCA2Ny4yMnptLTI1LjUgMzYuMTE4bC0uMDQ1LS4wMDEtLjA5LS4wMDYuMTM1LjAwN2MtLjA3IDAtLjEzNy0uMDA1LS4yMDQtLjAxNWwtLjA2Ny0uMDFjLS4wNzMtLjAxNC0uMTQ0LS4wMzQtLjIxMy0uMDU4LS4xMzMtLjA0Ny0uMjYxLS4xMTQtLjM4LS4ybC0uMDQyLS4wMzItLjAxMy0uMDEtLjAzMi0uMDI3Yy0uMDMtLjAyNS0uMDU5LS4wNTItLjA4Ny0uMDhsLS4wMjMtLjAyMy02LTYuMjAyYy0uNTg1LS42MDUtLjU4NS0xLjU4NyAwLTIuMTkyLjU0MS0uNTYgMS4zOTItLjYwMiAxLjk4LS4xM2wuMTQyLjEzTDEzMSA5OC4wNDJ2LTEwLjIxYzAtLjg1Ny42NzItMS41NTEgMS41LTEuNTUxLjc3IDAgMS40MDMuNTk5IDEuNDkgMS4zN2wuMDEuMTh2MTAuMjExbDMuNDQtMy41NTRjLjU0LS41NiAxLjM5LS42MDIgMS45OC0uMTNsLjE0LjEzYy41NDEuNTU5LjU4MyAxLjQzOC4xMjUgMi4wNDZsLS4xMjQuMTQ2LTYgNi4yMDJjLS4wMzIuMDMzLS4wNjYuMDY1LS4xLjA5NWwuMS0uMDk1Yy0uMDUuMDUtLjEuMDk3LS4xNTQuMTRsLS4wNTguMDQyLS4wNTMuMDM3LS4wNzIuMDQ0LS4wMzguMDJjLS4wMy4wMTYtLjA2LjAzMS0uMDkxLjA0NWwtLjA0Mi4wMThjLS4wMjcuMDExLS4wNTUuMDIxLS4wODMuMDNsLS4wNDcuMDE2Yy0uMDI5LjAwOS0uMDU4LjAxNy0uMDg4LjAyNGwtLjA0OC4wMWMtLjAzNS4wMDctLjA3MS4wMTMtLjEwNy4wMThsLS4wMjUuMDAyYy0uMDMyLjAwNC0uMDY1LjAwNi0uMDk4LjAwOGgtLjA1N3ptMTUtMzEuMTAybC0uMDQ1LjAwMWMtLjAzIDAtLjA2LjAwMy0uMDkuMDA2bC4xMzUtLjAwN2MtLjA3IDAtLjEzNy4wMDUtLjIwNC4wMTVsLS4wNjcuMDFjLS4wNzMuMDE0LS4xNDQuMDMzLS4yMTMuMDU4LS4xMzMuMDQ3LS4yNjEuMTEzLS4zOC4ybC0uMDQyLjAzMi0uMDEzLjAxLS4wMzIuMDI2Yy0uMDMuMDI2LS4wNTkuMDUyLS4wODcuMDhsLS4wMjMuMDIzLTYgNi4yMDJjLS41ODUuNjA2LS41ODUgMS41ODggMCAyLjE5My41NDEuNTYgMS4zOTIuNjAyIDEuOTguMTNsLjE0Mi0uMTNMMTQ2IDc3LjUzdjEwLjIxYzAgLjg1Ny42NzIgMS41NSAxLjUgMS41NS43NyAwIDEuNDAzLS41OTggMS40OS0xLjM2OWwuMDEtLjE4Vjc3LjUzbDMuNDQgMy41NTRjLjU0LjU2IDEuMzkuNjAyIDEuOTguMTNsLjE0LS4xM2MuNTQxLS41NTkuNTgzLTEuNDM4LjEyNS0yLjA0NmwtLjEyNC0uMTQ3LTYtNi4yMDJjLS4wMzItLjAzMy0uMDY2LS4wNjQtLjEtLjA5NGwuMS4wOTRjLS4wNS0uMDUtLjEtLjA5Ni0uMTU0LS4xMzgtLjAxOS0uMDE1LS4wMzgtLjAzLS4wNTgtLjA0M2wtLjA1My0uMDM3LS4wNzItLjA0NC0uMDM4LS4wMmMtLjAzLS4wMTYtLjA2LS4wMzEtLjA5MS0uMDQ1bC0uMDQyLS4wMThjLS4wMjctLjAxMS0uMDU1LS4wMjItLjA4My0uMDMxbC0uMDQ3LS4wMTVjLS4wMjktLjAwOS0uMDU4LS4wMTctLjA4OC0uMDI0bC0uMDQ4LS4wMWMtLjAzNS0uMDA3LS4wNzEtLjAxMy0uMTA3LS4wMThsLS4wMjUtLjAwMmMtLjAzMi0uMDA0LS4wNjUtLjAwNi0uMDk4LS4wMDhoLS4wNTd6IgogICAgICAgIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMTYgLTY0KSIgLz4KPC9zdmc+" alt="" srcset="">
                            <h6></i><strong>Options</strong></h6>
                            <p>Earn fixed payouts by predicting an asset's price movement within a fixed time.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OCIgdmlld0JveD0iMCAwIDQ4IDQ4Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIwJSIgeDI9IjEwMCUiIHkxPSIxMDAlIiB5Mj0iMCUiPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkY0NDRGIiAvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRjY0NDQiIC8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJwogICAgICAgIGQ9Ik0xNTkgNjRjMy4zMTQgMCA2IDIuNjg2IDYgNnYzNmMwIDMuMzE0LTIuNjg2IDYtNiA2aC0zNmMtMy4zMTQgMC02LTIuNjg2LTYtNlY3MGMwLTMuMzE0IDIuNjg2LTYgNi02aDM2em0wIDNoLTM2Yy0xLjU4MiAwLTIuODc3IDEuMjI0LTIuOTkyIDIuNzc2TDEyMCA3MHYzNmMwIDEuNTgyIDEuMjI0IDIuODc3IDIuNzc2IDIuOTkyTDEyMyAxMDloMzZjMS41ODIgMCAyLjg3Ny0xLjIyNCAyLjk5Mi0yLjc3NkwxNjIgMTA2VjcwYzAtMS41ODItMS4yMjQtMi44NzctMi43NzYtMi45OTJMMTU5IDY3em0tMjkuNjEgOS4zOWMuNTIxLS41MiAxLjM2NS0uNTIgMS44ODYgMEwxNDEgODYuMTE1bDkuNzI0LTkuNzIzYy41Mi0uNTIxIDEuMzY1LS41MjEgMS44ODUgMCAuNDgxLjQ4LjUxOCAxLjIzNi4xMTEgMS43NmwtLjExLjEyNUwxNDIuODg1IDg4bDkuNzIzIDkuNzI0LjExMS4xMjVjLjQwNy41MjQuMzcgMS4yOC0uMTEgMS43Ni0uNTIxLjUyMS0xLjM2NS41MjEtMS44ODYgMEwxNDEgODkuODg2bC05LjcyNCA5LjcyM2MtLjUyLjUyMS0xLjM2NS41MjEtMS44ODUgMC0uNDgxLS40OC0uNTE4LTEuMjM2LS4xMTEtMS43NmwuMTEtLjEyNUwxMzkuMTE1IDg4bC05LjcyMy05LjcyNC0uMTExLS4xMjVjLS40MDctLjUyNC0uMzctMS4yOC4xMS0xLjc2eiIKICAgICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTE3IC02NCkiIC8+Cjwvc3ZnPg==" alt="">
                            <h6><strong>Multipliers</strong></h6>
                            <p>Get the best of both - the upside of margin trading with the simplicity of options.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
    <div class="uk-width-3-5@m">
        <div class="uk-inline uk-dark in-liquid-video uk-margin-small-bottom">
            <img class="uk-border-rounded uk-width-1-1" src="assets/front/img/in-lazy.gif" data-src="assets/front/img/in-liquid-8-image.jpg" alt="sample-images" width="533" height="355" data-uk-img>
            <div class="uk-position-center">
                <a href="#link" data-uk-toggle>
                    <div class="in-play-button"></div>
                    <i class="fas fa-play"></i>
                </a>
            </div>
            <div class="uk-flex-top" data-uk-modal>
                <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-width-expand@m">
        <h3>What you will learn</h3>
        <ul class="uk-list uk-list-bullet in-list-check">
            <li>Introduction to Financial Trading</li>
            <li>Technical Analysis</li>
            <li>Fundamental Analysis</li>
            <li>When to Enter & Exit Trades</li>
            <li>How to Manage Risk</li>
            <li>Trading Psychology</li>
        </ul>
        <a class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top" href="#">Create demo account now<i class="fas fa-angle-right uk-margin-small-left"></i></a>
    </div>
</div> --}}

@endsection

@section('content-markets')

<div class="uk-section in-offset-top-40 in-offset-bottom-20">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(assets/front/img/in-team-background-1.png);" data-uk-parallax="bgy: -100">
                    <div class="uk-card-body">
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-3-4@m uk-text-center">
                                <h2>Markets</h2>
                                {{-- <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p> --}}
                            </div>
                        </div>
                        <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIwJSIgeDI9IjEwMCUiIHkxPSI3MS40NjElIiB5Mj0iMjguNTM5JSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRjQ0NEYiIC8+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI0ZGNjQ0NCIgLz4KICAgICAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPC9kZWZzPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8cGF0aCBkPSJNMCAwSDY0VjY0SDB6IiAvPgogICAgICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJyBmaWxsLXJ1bGU9Im5vbnplcm8iCiAgICAgICAgICAgIGQ9Ik0zNyAxM2MuMzUxIDAgLjY3Ny4xODQuODU3LjQ4Nkw0MyAyMi4wNTZsNS4xNDMtOC41N2MuMTU4LS4yNjQuNDI3LS40MzguNzI3LS40NzdMNDkgMTNoMTBjLjc5MyAwIDEuMjcuODc4Ljg0IDEuNTQzTDQ5LjE4NiAzMS4wMDZsMTEuNjYgMTguNDZjLjM5OS42MzMtLjAxMyAxLjQ0OC0uNzMgMS41MjhMNjAgNTFINTBjLS4zNDIgMC0uNjYtLjE3NS0uODQ0LS40NjNMNDMgNDAuODYybC02LjE1NiA5LjY3NWMtLjE2MS4yNTItLjQyNS40MTgtLjcxNy40NTVMMzYgNTFIMjZjLS43ODggMC0xLjI2Ni0uODY4LS44NDUtMS41MzRsMTEuNjU4LTE4LjQ2LTcuODE0LTEyLjA3NkwyOSAyMmMwIC41NTItLjQ0OCAxLTEgMUgxM3Y2aDExYy41MTMgMCAuOTM2LjM4Ni45OTMuODgzTDI1IDMwdjhjMCAuNTUyLS40NDggMS0xIDFIMTN2MTFjMCAuNTEzLS4zODYuOTM2LS44ODMuOTkzTDEyIDUxSDRjLS41NTIgMC0xLS40NDgtMS0xVjE0YzAtLjU1Mi40NDgtMSAxLTF6bS0xMCAySDV2MzRoNlYzOGMwLS41MTMuMzg2LS45MzYuODgzLS45OTNMMTIgMzdoMTF2LTZIMTJjLS41MTMgMC0uOTM2LS4zODYtLjk5My0uODgzTDExIDMwdi04YzAtLjU1Mi40NDgtMSAxLTFoMTV2LTZ6bTkuNDM0IDBIMjl2LjI1bDkuODQgMTUuMjA3Yy4xNjQuMjU0LjIwMi41NjUuMTEzLjg0NmwtLjA0Ni4xMTgtLjA2Mi4xMTNMMjcuODEzIDQ5aDcuNjM4bDYuNzA1LTEwLjUzN2MuMzctLjU4MSAxLjE5LS42MTUgMS42MTMtLjEwMmwuMDc1LjEwMkw1MC41NDggNDloNy42MzhMNDcuMTU1IDMxLjUzNGMtLjE4NS0uMjkzLS4yMDQtLjY1OC0uMDU3LS45NjVsLjA2Mi0uMTEyTDU3LjE2MSAxNWgtNy41OTZsLTUuNzA4IDkuNTE0Yy0uMzY1LjYxLTEuMjE4LjY0Ni0xLjY0LjEwOGwtLjA3NC0uMTA4TDM2LjQzNCAxNXoiIC8+CiAgICA8L2c+Cjwvc3ZnPg==" alt="image-team" width="300">
                                </div>
                                <div>
                                    {{-- <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Chief Executive Officer</p> --}}
                                    <h4 class="uk-margin-small-top">Forex</h4>
                                    <p>Take part in the world’s largest financial market where more than $5 trillion worth of currencies are bought and sold each day.</p>

                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIwJSIgeDI9IjEwMCUiIHkxPSI4MS4yMyUiIHkyPSIxOC43NyUiPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjRkY0NDRGIiAvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNGRjY0NDQiIC8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZD0iTTAgMEg2NFY2NEgweiIgLz4KICAgICAgICA8cGF0aCBmaWxsPSd1cmwoI3ByZWZpeF9hKScgZmlsbC1ydWxlPSJub256ZXJvIgogICAgICAgICAgICBkPSJNMzIuNSA4YzExLjMzIDAgMjAuODY0IDcuNjkxIDIzLjY2NiAxOC4xMzcgNC4xMi41MDYgNi44MTYgMi4yMSA2LjgzNCA1LjUyMyAwIDQuNDk1LTQuNTkgNi4yNjktMTAuMzc5IDYuMTg5LTUuNDUtLjA2Ny05Ljk0LTEuMjMzLTE4Ljc5NC00LjM0Ni0zLjA2OC0xLjA4LTMuNjQ4LTEuMjgtNC45ODYtMS43MjMtMy44MTQtMS4zMjEtNy43MjItMi4zODMtMTEuNjc4LTMuMTc1LTYuMi0xLjEzOS05LjY0My0xLjA5Ny0xMi4yNDcuOTEtMS4yNzcuOTkxLTEuOTc4IDIuMDU3LTEuOTc4IDMuMTY1IDAgMS4yNjguNjggMi43NDggMS42ODMgMy43ODQgMS4yMDYgMS4xOTQgMi41NzQgMS45ODUgNC4yMjcgMi40NDdDOC4yOTUgMzYuODY4IDggMzQuNzE4IDggMzIuNWMwLS44MTYuMDQtMS42MjMuMTE4LTIuNDE5LjYyNS0uMTI4IDEuMy0uMiAyLjAzNi0uMjIxLS4xMDIuODY2LS4xNTQgMS43NDctLjE1NCAyLjY0IDAgMy4wMDguNTkgNS44NzggMS42NjEgOC41MDFoNS4zNkMxNi4zNiAzOC4zNTMgMTYgMzUuNDkgMTYgMzIuNWMwLS43MDQuMDIyLTEuNC4wNjYtMi4wODkuMzU1LjA2LjcyLjEyNSAxLjA5Ny4xOTRsLjg3OS4xODJjLS4wMjguNTY1LS4wNDIgMS4xMzYtLjA0MiAxLjcxMyAwIDMuMDE5LjM4NyA1Ljg4NiAxLjA4NCA4LjUwMWg0LjQ3M2MtLjM0Mi0yLjUxNi0uNTM3LTUuMjI4LS41NTYtOC4wNTZMMjMgMzIuNWwuMDAzLS41MmMuNjY4LjE4IDEuMzM1LjM3IDEuOTk5LjU2N3YuMzg3Yy4wMTkgMi44NTUuMjMgNS41NzQuNTg0IDguMDY3aDEyLjgyOGMuMTczLTEuMjE4LjMxMS0yLjQ5LjQxLTMuODA0LjY4My4yMiAxLjMzNS40MjQgMS45NjQuNjEzLS4wODkgMS4wOTItLjIwNCAyLjE1OC0uMzQ1IDMuMTloNS40NzNjLjE1Ni0uNTgzLjI5Ni0xLjE4LjQyLTEuNzg3LjY3LjEyOCAxLjMyNS4yMzYgMS45NzMuMzI0LS4xLjQ5NS0uMjEuOTgzLS4zMyAxLjQ2NGg1LjM2Yy4xNTgtLjM4Ny4zMDUtLjc3OS40NDItMS4xNzUuNzU4LS4wNCAxLjQ5LS4xMzIgMi4xODgtLjI3MkM1Mi45MzkgNDkuNjQ3IDQzLjU3OSA1NyAzMi41IDU3bC0uMzU3LS4wMDNjLS4wNDcuMDAyLS4wOTUuMDAzLS4xNDMuMDAzLS4wOTkgMC0uMTk3LS4wMDQtLjI5NC0uMDEzLTEwLjIxNi0uMzI1LTE4Ljg1Mi02LjkwNC0yMi4yMDgtMTYuMDMzLTIuNTA5LS40NzEtNC41NDgtMS41MDYtNi4yOS0zLjIzQzEuODggMzYuMzUgMSAzNC40MzggMSAzMi42OGMwLTEuNzU1IDEuMDA2LTMuMjgzIDIuNjkyLTQuNTkxIDMuMjI1LTIuNDg2IDcuMDc0LTIuNTMzIDEzLjg1NC0xLjI4OCA0LjA2My44MTMgOC4wNiAxLjkgMTEuOTQ1IDMuMjQ2IDEuMzQyLjQ0MyAxLjkyNi42NDYgNS4wMDkgMS43MyA4LjY0OSAzLjA0MSAxMi45OSA0LjE2OSAxOC4xNDggNC4yMzIgNC44MTYuMDY2IDguNDE0LTEuMzI1IDguNDE0LTQuMzQ1LS4wMS0yLjA1OC0xLjQyNy0zLjE0Ni00LjQ0OS0zLjUzLjI1NCAxLjQxNy4zODcgMi44NzYuMzg3IDQuMzY2IDAgLjQ1LS4wMTIuODk5LS4wMzYgMS4zNDQtLjYyLjA3OC0xLjI5NS4xMjUtMi4wMTMuMTUuMDMzLS40OTQuMDQ5LS45OTIuMDQ5LTEuNDk0IDAtMy4zOTUtLjc1Mi02LjYxNC0yLjA5OC05LjVoLTUuMzA5QzQ4LjQ5IDI1LjkyIDQ5IDI5LjEzIDQ5IDMyLjVjMCAuNDI0LS4wMDcuODQ2LS4wMjIgMS4yNjUtLjY1My0uMDgyLTEuMzEzLS4xODQtMS45OTEtLjMwOS4wMDktLjMxNy4wMTMtLjYzNi4wMTMtLjk1NiAwLTMuNDA4LS40OTMtNi42MjMtMS4zNjktOS41aC01LjMzM2MuNDI3IDIuNzYuNjc0IDUuNzc2LjcgOC45NC0uNjQxLS4xOTUtMS4zMS0uNDA2LTIuMDA5LS42MzR2LjAyOWwtLjAwMy0uMTQ3Yy0uMDYtMi45MTYtLjMyLTUuNjgtLjcyNC04LjE4OEgyNS43MzhjLS4xOSAxLjE4LS4zNDkgMi40MTctLjQ3IDMuNy0uNjUtLjE5Mi0xLjMwNS0uMzc1LTEuOTYyLS41NTEuMTA2LTEuMDgxLjI0LTIuMTMzLjM5Ni0zLjE1SDE5LjM3Yy0uMjA0LjY3Mi0uMzg4IDEuMzYxLS41NDkgMi4wNjctLjQyNC0uMDkxLS44NDgtLjE4LTEuMjc0LS4yNjVsLS42MDctLjExYy4xNDEtLjU3My4yOTctMS4xMzcuNDY3LTEuNjkxaC01LjMwOGMtLjE1OC4zMzgtLjMwNy42ODEtLjQ0OSAxLjAyOC0uNzYtLjAzOC0xLjQ3NC0uMDM4LTIuMTQ2LjAwMyAzLjM2LTkuMTIyIDExLjk5My0xNS42OTMgMjIuMjAyLTE2LjAxOC4wOTgtLjAwOS4xOTYtLjAxMy4yOTUtLjAxM2wuMTQ0LjAwM0MzMi4yNjIgOCAzMi4zOCA4IDMyLjUgOHptNS41OTEgMzVsLTEyLjE4Mi4wMDFjMS4yMjggNi43NjkgMy41MTkgMTEuNDczIDUuNzE4IDExLjk1OC4xNzMuMDE2LjM0Ny4wMjguNTIuMDM0IDIuMjY4LS4yIDQuNjc0LTQuOTkyIDUuOTQ0LTExLjk5MnptNy4yMTYgMGgtNS4xNzNjLS44NDUgNC44NC0yLjI1NiA4LjgwOC00IDExLjI2NyAzLjkyMi0xLjYwNiA3LjI2OC01Ljc0IDkuMTczLTExLjI2N3ptLTIxLjQ0IDBoLTQuMTc0YzEuNjU4IDQuODExIDQuNDA4IDguNTY3IDcuNjggMTAuNTE4LTEuNTE3LTIuNDgtMi43NDMtNi4xNDItMy41MDctMTAuNTE4em0tNi4yNzkuMDAxaC00Ljk5M2MyLjQwNCA0LjU0NiA2LjMyIDguMTcgMTEuMDc4IDEwLjIwMS0yLjYyMi0yLjQ3LTQuNzQzLTYuMDA3LTYuMDg1LTEwLjJ6bTM0LjgxNyAwSDQ3LjQxYy0xLjM0IDQuMTkzLTMuNDYxIDcuNzMxLTYuMDgzIDEwLjIwMSA0Ljc1OC0yLjAzMSA4LjY3My01LjY1NSAxMS4wNzctMTAuMjAxek0yNC4zNiAxMS41MTdsLS4yOTQuMTE3Yy00LjU3OCAxLjg1Mi04LjQwOCA1LjE2OC0xMC45MSA5LjM2Nmg0Ljk0YzEuNTA0LTMuOTE0IDMuNzEtNy4xOTYgNi4yNjQtOS40ODN6bTMuMDEyLS4wMzVsLS4yMDMuMTI0Yy0yLjk1MyAxLjg0MS01LjQ2NiA1LjE2LTcuMTEgOS4zOTRoMy45OTJjLjc3LTMuOTM0IDEuOTIyLTcuMjMgMy4zMjEtOS41MTh6bTQuNzc2LTEuNDc1bC0uMTU1LjAwN2MtLjEyMi4wMDctLjI0NC4wMTYtLjM2Ni4wMjgtMi4wOS40Ni00LjI2IDQuNzI5LTUuNTI2IDEwLjk1OGgxMS43OThjLTEuMzEtNi40NTMtMy41OTQtMTAuODAyLTUuNzUxLTEwLjk5M3ptMy45ODYuNzI1bC4wOTcuMTM5QzM3LjgxIDEzLjE2NCAzOS4xMDggMTYuNyAzOS45NDkgMjFoNC45OTJjLTEuOTUtNS4wMjQtNS4xMjUtOC43Ni04LjgwNy0xMC4yNjh6bTQuNTA2Ljc4NmwuMDI2LjAyM2MyLjU0MiAyLjI4NiA0LjczOSA1LjU1OCA2LjIzOCA5LjQ1OWg0Ljk0Yy0yLjU1Ni00LjI4OC02LjQ5Ni03LjY1NS0xMS4yMDQtOS40ODJ6IiAvPgogICAgPC9nPgo8L3N2Zz4=" alt="image-team" width="300">
                                </div>
                                <div>
                                    {{-- <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Executive Assistant</p> --}}
                                    <h4 class="uk-margin-small-top">Stock indices</h4>
                                    <p>Predict broader market trends and diversify your risk with indices that measure the overall performance of a market.</p>

                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIwJSIgeDI9IjEwMCUiIHkxPSI2NS4wMzUlIiB5Mj0iMzQuOTY1JSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRjQ0NEYiIC8+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI0ZGNjQ0NCIgLz4KICAgICAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPC9kZWZzPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8cGF0aCBkPSJNMCAwSDY0VjY0SDB6IiAvPgogICAgICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJyBmaWxsLXJ1bGU9Im5vbnplcm8iCiAgICAgICAgICAgIGQ9Ik00MCAxNWMuMzk3IDAgLjc1Ny4yMzUuOTE2LjZMNDcuNjU0IDMxSDU1Yy4zNTMgMCAuNjc3LjE4Ni44NTYuNDgzbC4wNi4xMTYgNyAxNmMuMjkuNjYtLjE5NSAxLjQwMS0uOTE2IDEuNDAxSDJjLS43MjEgMC0xLjIwNS0uNzQtLjkxNi0xLjRsNy0xNmMuMTYtLjM2NS41MTktLjYuOTE2LS42aDcuMzQ1bDYuNzM5LTE1LjRjLjE0MS0uMzI0LjQ0MS0uNTQ2Ljc4NS0uNTkxTDI0IDE1aDE2ek0yNC4zNDUgMzNIOS42NTRMMy41MjkgNDdIMzAuNDdsLTYuMTI1LTE0em0zMCAwSDM5LjY1NGwtNi4xMjUgMTRINjAuNDdsLTYuMTI1LTE0ek0zNy40NyAzM0gyNi41MjlsNS40NyAxMi41MDRMMzcuNDcgMzN6bTEuODc1LTE2SDI0LjY1NGwtNi4xMjUgMTRINDUuNDdsLTYuMTI1LTE0eiIgLz4KICAgIDwvZz4KPC9zdmc+" alt="image-team" width="300">
                                </div>
                                <div>
                                    {{-- <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Marketing Specialist</p> --}}
                                    <h4 class="uk-margin-small-top">Commodities</h4>
                                    <p>Trade natural resources that are central to the world’s economy and profit from the opportunities created by volatile markets.</p>

                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ncHJlZml4X2EnIHgxPSIwJSIgeDI9IjEwMCUiIHkxPSI4OS4xODMlIiB5Mj0iMTAuODE3JSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRjQ0NEYiIC8+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI0ZGNjQ0NCIgLz4KICAgICAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPC9kZWZzPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8cGF0aCBkPSJNMCAwSDY0VjY0SDB6IiAvPgogICAgICAgIDxwYXRoIGZpbGw9J3VybCgjcHJlZml4X2EpJyBmaWxsLXJ1bGU9Im5vbnplcm8iCiAgICAgICAgICAgIGQ9Ik01MCA1Yy4wNDggMCAuMDg4LjAwMy4xMjcuMDA4bC4wMTQuMDAyYy4wMzQuMDA1LjA3LjAxMS4xMDQuMDJsLjAzOS4wMTFjLjAzLjAwOS4wNTguMDE5LjA4Ny4wM2wuMDE0LjAwNi0uMDE0LS4wMDZjLjAzNS4wMTQuMDcuMDMuMTA0LjA0OWwuMDQzLjAyNS4wNTEuMDMzLjAxNy4wMTEuMDI0LjAxOS0uMDQtLjAzYy4wMzkuMDI3LjA3Ni4wNTcuMTEuMDg5LjAxMi4wMS4wMjMuMDIyLjAzNC4wMzMuMDE4LjAxOC4wMzQuMDM1LjA1LjA1NGwuMDI5LjAzN2MuMDE4LjAyMi4wMzQuMDQ1LjA1LjA3LjAyMy4wMzguMDQ2LjA3OC4wNjUuMTJsLS4wNTMtLjFjLjAxOC4wMy4wMzUuMDYxLjA1LjA5M2wuMDAzLjAwNyAxMS45ODQgMjUuOTY2Yy4wMjIuMDQ0LjA0MS4wOS4wNTcuMTM3bC4wMTUuMDVjLjAwNy4wMjQuMDEzLjA0OC4wMTcuMDczbC4wMDguMDQzYy4wMDQuMDI1LjAwNi4wNS4wMDguMDc3LjAwMi4wMTYuMDAyLjAzMy4wMDMuMDVWMzJsLS4wMDEuMDU0LS4wMDQuMDQ1TDYzIDMyYzAgLjIwNi0uMDYyLjM5Ny0uMTY5LjU1NmwtLjAwOS4wMTMtMTggMjYtLjAyLjAzLS4wNDEuMDUtLjAzOC4wNDItLjAzOC4wMzctLjA0OS4wNDQtLjA0NC4wMzQtLjA0My4wM2MtLjAyMi4wMTQtLjA0NS4wMjgtLjA2OC4wNGwtLjAyOS4wMTYtLjAzMy4wMTYtLjA0Mi4wMTgtLjA0LjAxNi4wODItLjAzNGMtLjA1LjAyMy0uMTAyLjA0Mi0uMTUzLjA1NmwtLjAzOC4wMWMtLjAzLjAwNy0uMDU4LjAxMi0uMDg3LjAxNi0uMDQ2LjAwNy0uMDkzLjAxLS4xNDEuMDFsLjExMi0uMDA2Yy0uMDI5LjAwMy0uMDU3LjAwNS0uMDg2LjAwNkgxNC45ODRjLS4wNzgtLjAwMS0uMTU1LS4wMTEtLjIzMi0uMDNsLS4wMzYtLjAxMWMtLjAyNi0uMDA4LS4wNTMtLjAxNy0uMDc5LS4wMjdsLS4wNDMtLjAxOC0uMDY0LS4wMzEtLjA1LS4wMjgtLjAzNS0uMDIzLS4wMTYtLjAxMS0uMDU1LS4wNC4wNzEuMDUxYy0uMDQxLS4wMjgtLjA4LS4wNTgtLjExNi0uMDlsLS4wNDItLjA0LS4wNDgtLjA1My0uMDMzLS4wNC0uMDQxLS4wNTljLS4wMjctLjA0MS0uMDUyLS4wODUtLjA3My0uMTNsLjA0OC4wOTEtLjA0LS4wNzMtLjAwOC0uMDE5LTEyLTI2LS4wMDgtLjAxOGMtLjAxMi0uMDI3LS4wMjMtLjA1NS0uMDMzLS4wODRsLS4wMTUtLjA1M2MtLjAwNy0uMDIyLS4wMTItLjA0NS0uMDE3LS4wNjhsLS4wMDgtLjA0OS0uMDA0LS4wMy0uMDA0LS4wMzhMMiAzMi4wMTR2LS4wNTVsLjAwNS0uMDZMMiAzMmMwLS4xNjMuMDQtLjMxNy4xMDgtLjQ1My4wMi0uMDQuMDQ0LS4wNzkuMDctLjExNmwtLjA1OC4wOTNjLjAxNC0uMDI2LjAzLS4wNTIuMDQ2LS4wNzdsLjAxMi0uMDE2IDE4LTI2IC4wMy0uMDRjLjAxMS0uMDE3LjAyNC0uMDMyLjAzOC0uMDQ4bC4wNC0uMDQzYy4wMS0uMDEyLjAyMy0uMDIzLjAzNi0uMDM1bC4wNDYtLjA0Yy4wMTUtLjAxMy4wMzItLjAyNi4wNS0uMDM4bC4wMzYtLjAyNS4wNjItLjAzN2MuMDE2LS4wMS4wMzItLjAxNy4wNDctLjAyNWwuMDMtLjAxNC4wMjUtLjAxYy4wMi0uMDA4LjA0LS4wMTYuMDYtLjAyMmwtLjA4NC4wMzJjLjA0NC0uMDIuMDg5LS4wMzYuMTM0LS4wNDhsLjA1OS0uMDE1Yy4wMjEtLjAwNS4wNDMtLjAwOS4wNjQtLjAxMkMyMC45IDUuMDA0IDIwLjk1IDUgMjEgNWwtLjEwNC4wMDVjLjAyOS0uMDAzLjA1OC0uMDA1LjA4Ni0uMDA1SDUwek0zMC4xMyAzM0g0LjU2MWwxMC41OTcgMjIuOTU5IDUuMDEtNy41MTRjLjMwNi0uNDYuOTI3LS41ODMgMS4zODctLjI3Ny40MjYuMjg0LjU2NC44NC4zMzYgMS4yODZsLS4wNTkuMUwxNi44NjggNTdoMjUuNTY5TDMxLjg0IDM0LjA0MmwtNS4wMDggNy41MTNjLS4zMDYuNDYtLjkyNy41ODMtMS4zODcuMjc3LS40MjYtLjI4NC0uNTY0LS44NC0uMzM2LTEuMjg2bC4wNTktLjFMMzAuMTMgMzN6TTQ5LjgyNSA4LjAwOWwtMTUuOTE2IDIyLjk5TDQyIDMxYy41NTIgMCAxIC40NDggMSAxIDAgLjUxMy0uMzg2LjkzNi0uODgzLjk5M0w0MiAzM2gtOC40MzhsMTAuNjExIDIyLjk5TDYwLjA5IDMzSDUxYy0uNTUyIDAtMS0uNDQ4LTEtMSAwLS41MTMuMzg2LS45MzYuODgzLS45OTNMNTEgMzFoOS40MzdMNDkuODI1IDguMDA5em0tMS43MzUtMS4wMUgyMi41MzhsMy4zNzYgNy41OTVjLjIyNC41MDUtLjAwMyAxLjA5Ni0uNTA4IDEuMzItLjQ2OC4yMDgtMS4wMTIuMDI3LTEuMjY2LS40MDRsLS4wNTQtLjEwNC0zLjI3Ny03LjM3NEw0LjkwOCAzMWgyNS41NTNsLTMuMzc1LTcuNTk0Yy0uMjI0LS41MDUuMDAzLTEuMDk2LjUwOC0xLjMyLjQ2OC0uMjA4IDEuMDEyLS4wMjcgMS4yNjYuNDA0bC4wNTQuMTA0IDMuMjc2IDcuMzczTDQ4LjA5IDd6IiAvPgogICAgPC9nPgo8L3N2Zz4=" alt="image-team" width="300">
                                </div>
                                <div>
                                    {{-- <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Human Resources</p> --}}
                                    <h4 class="uk-margin-small-top">Synthetic indices</h4>
                                    <p>Enjoy synthetic markets that emulate the excitement of real-world markets without unpredictable real-world disruptions.</p>

                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png" alt="image-team" width="300">
                                </div>
                                <div>
                                    {{-- <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Human Resources</p> --}}
                                    <h4 class="uk-margin-small-top">Cryptocurrency</h4>
                                    <p>Mine Cryptocurrency and Trade cryptocurrency that are currently leading to the world’s economy and profit from the opportunities created by volatile markets.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content-steps')

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-3-4@m uk-text-center">
                    <h2 class="uk-margin-small-bottom">3 Simple Steps</span></h2>
                </div>
            </div>
            <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        {{-- <i class="fas fa-leaf fa-lg in-icon-wrap circle primary-color"></i> --}}
                        <img style="height: 30px !important;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMCAwaDMydjMySDB6Ii8+PGNpcmNsZSBjeD0iMTQiIGN5PSIxOCIgcj0iMTQiIGZpbGw9IiNGRjQ0NEYiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxjaXJjbGUgY3g9IjE0IiBjeT0iMTgiIHI9IjgiIHN0cm9rZT0iI0ZGRiIgc3Ryb2tlLW9wYWNpdHk9Ii41NiIgc3Ryb2tlLXdpZHRoPSI0Ii8+PHJlY3Qgd2lkdGg9IjIiIGhlaWdodD0iMjIiIHg9IjE5LjEyMSIgeT0iLjg3OSIgZmlsbD0iIzMzMyIgZmlsbC1ydWxlPSJub256ZXJvIiByeD0iMSIgdHJhbnNmb3JtPSJzY2FsZSgtMSAxKSByb3RhdGUoLTQ1IDAgNjAuNDU2KSIvPjxwYXRoIGZpbGw9IiMzMzMiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTI4LjM2My45MjRsLjE2NCAxLjYzYy4wNS40ODUuNDM0Ljg3LjkyLjkxOWwxLjYyOS4xNjRhMS4wMjggMS4wMjggMCAwMS42MjMgMS43NDlsLTMuMzEzIDMuMzEzYTEuMDI4IDEuMDI4IDAgMDEtLjgzLjI5NmwtMy4yOTgtLjMzNGExLjAyOSAxLjAyOSAwIDAxLS45Mi0uOTE5bC0uMzMzLTMuMjk4Yy0uMDMtLjMwNy4wNzgtLjYxMi4yOTYtLjgzTDI2LjYxNC4zMDFhMS4wMjggMS4wMjggMCAwMTEuNzQ5LjYyM3oiLz48L2c+PC9zdmc+" alt="" srcset="">
                    </div>
                    <div>
                        <h3>Deposit</h3>
                        <p>Open a account. Pick a plan and make payments and move unto the next step.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        {{-- <i class="fas fa-hourglass-end fa-lg in-icon-wrap circle primary-color"></i> --}}
                        <img style="height: 30px !important;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIyOCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIC0yKSI+PHBhdGggZD0iTTAgMGgzMnYzMkgweiIvPjxwYXRoIGZpbGw9IiMzMzMiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTE0IDIxaDR2NWg3YTEgMSAwIDAxMSAxdjJhMSAxIDAgMDEtMSAxSDdhMSAxIDAgMDEtMS0xdi0yYTEgMSAwIDAxMS0xaDd2LTV6Ii8+PHJlY3Qgd2lkdGg9IjMyIiBoZWlnaHQ9IjIxIiB5PSIyIiBmaWxsPSIjRkY2NDQ0IiBmaWxsLXJ1bGU9Im5vbnplcm8iIHJ4PSIyIi8+PHBhdGggZmlsbD0iI0ZGRiIgZmlsbC1vcGFjaXR5PSIuNTYiIGZpbGwtcnVsZT0ibm9uemVybyIgZD0iTTI0Ljg1MyA2LjM2MmEyIDIgMCAwMTIuNDI1IDMuMTc3bC0uMTMxLjEtMTAgN2EyIDIgMCAwMS0yLjY0LS4zMDhMMTQuNCAxNi4ybC0xLjk0MS0yLjU4OC01LjQ2NyAzLjEyNGEyIDIgMCAwMS0yLjY0Ni0uNjExbC0uMDgyLS4xMzNhMiAyIDAgMDEuNjExLTIuNjQ2bC4xMzMtLjA4MiA3LTRhMiAyIDAgMDEyLjQ4Ny40MDdsLjEwNS4xMjkgMS44MzggMi40NTEgOC40MTUtNS44OXoiLz48L2c+PC9zdmc+" alt="" srcset="">
                    </div>
                    <div>
                        <h3>Trade</h3>
                        <p>After making deposit, start trading for real. Trade forex, indices, commodities, and more.</p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        {{-- <i class="fas fa-flag fa-lg in-icon-wrap circle primary-color"></i> --}}
                        <img style="height: 30px !important;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMCAwaDMydjMySDB6Ii8+PHJlY3Qgd2lkdGg9IjMyIiBoZWlnaHQ9IjIwIiBmaWxsPSIjODVBQ0IwIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHJ4PSIyIi8+PHJlY3Qgd2lkdGg9IjEwIiBoZWlnaHQ9IjEwIiB4PSIxMSIgeT0iNSIgZmlsbD0iI0ZGRiIgZmlsbC1vcGFjaXR5PSIuNTYiIGZpbGwtcnVsZT0ibm9uemVybyIgcng9IjMiLz48cGF0aCBmaWxsPSIjMzMzIiBmaWxsLXJ1bGU9Im5vbnplcm8iIGQ9Ik0xNiAxNmMxLjA1NCAwIDEuOTE4LjgxNiAxLjk5NSAxLjg1TDE4IDE4djhsLjgtLjZhMiAyIDAgMDEyLjUyNyAzLjA5NmwtLjEyNy4xMDQtNCAzYTIgMiAwIDAxLTIuMjU0LjFsLS4xNDYtLjEtNC0zYTIgMiAwIDAxMi4yNjUtMy4yOTNsLjEzNS4wOTMuOC42di04YTIgMiAwIDAxMi0yeiIvPjwvZz48L3N2Zz4=" alt="" srcset="">
                    </div>
                    <div>
                        <h3>Withdraw</h3>
                        <p>Get your funds quickly and easily. We support a variety of withdrawal options.</p>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-3-4@m uk-text-center">
                    {{-- <h2 class="uk-margin-small-bottom">3 Simple Steps</span></h2> --}}
                <a href="register" style="color: #000" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Create free account</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- @section('content-loan')

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1">
            <div class="steps-cont">
                <ul>
                    <li class="l-con">
                        <div class="cont wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <h2>01. Register On The Platform</h2>

                        </div>
                        <span><i class="fa fa-users"></i></span>
                    </li>
                    <li class="r-con">
                        <div class="cont wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                            <h2>02. Pass The Verification</h2>

                        </div>
                        <span><i class="fa fa-check-square-o"></i></span>
                    </li>
                    <li class="l-con">
                        <div class="cont wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                            <h2>03. View A Trade</h2>

                        </div>
                        <span><i class="fa fa-edit "></i></span>
                        <div class="mid-icons"></div>
                    </li>
                    <li class="r-con">
                        <div class="cont wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                            <h2>04. Finance Your Account</h2>

                        </div>
                        <span><i class="fa fa-university"></i></span>
                    </li>
                    <li class="l-con">
                        <div class="cont wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                            <h2>05. Invest</h2>

                        </div>
                        <span><i class="fa fa-bell"></i></span>
                    </li>
                    <li class="r-con">
                        <div class="cont wow  fadeInUp animated" data-wow-duration="2.4s" style="visibility: visible; animation-duration:2.4s; animation-name: fadeInUp;">
                            <h2>06. Receiving Funds</h2>

                        </div>
                        <span><i class="fa fa-paw"></i></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection --}}

{{-- @section('content-plan')

<div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-heading2">
             <h2>Rounds of Sale of Tokens</h2>
          </div>
       </div>
       <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
          @isset($plans)
          @foreach ($plans as $plan)

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
            <div class="tokens mr-r50">
               <div class="token-name">{{$plan->name}}</div>
               <div class="token-body">
                  <button class="right-btn">Price - {{$plan->price}}</button>
                  <div class="prices text-justify">
                     <h3 class="f-20">Package Features :</h3>
                     <ul>

                         @foreach ($plan->features as $feature)
                            <li class="text-md"><i class="fa fa-check white"></i> {{$feature->value}}</li>
                         @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
          @endforeach
         @endisset
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
             <p class="token-con">Subscribe to a package plan<span> Enjoy The benefits of the plan along with the bonuses.</span> So what are you waiting for? Register Now. </p>
          </div>
       </div>
    </div>
 </div>

@endsection --}}

{{-- @section('content-testimonials')

<section class="blog-area section">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="section-heading2">
                   <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">What Our Clients Say</h2>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="blog-slider">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog wow  fadeInUp animated" data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                        <figure>
                            <video class="owl-video video-js" preload="auto" style="width:100%; height: 370px;" src="/assets/front/images/testimonials/videos/new1.mp4" controls ></video>
                        </figure>
                        <div class="content">
                            <h4><a href="#">Judy Parker </a></h4>
                            <p>I invested with Pipstradeway and i got my profit.</p>
                        </div>
                    </div>
                </div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="blog wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                       <figure><img height="100" src="/assets/front/images/testimonials/person_1.jpg" alt="" /></figure>
                       <div class="content">
                           <h4><a href="#">Austin Cambell</a></h4>
                           <p>Fell in Love with the platform the moment i saw it. It has a simple design, easy to use and understand.</p>
                       </div>
                   </div>
               </div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="blog wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                       <figure><img style="height: 390px" src="/assets/front/images/testimonials/person_2.jpg" alt="" /></figure>
                       <div class="content">
                           <h4><a href="#">James Hullan</a></h4>
                           <p>Pipstradeway has made Forex trading simple and straight foward.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog wow  fadeInUp animated" data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                        <figure>
                            <video class="owl-video video-js" preload="auto" style="width:100%; height: 370px;" src="/assets/front/images/testimonials/videos/new2.mp4" controls ></video>
                        </figure>
                        <div class="content">
                            <h4><a href="#">Rebecca Jenkins</a></h4>
                            <p>I invested with pipstradeway, and i got my profit.</p>
                        </div>
                    </div>
               </div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="blog wow  fadeInUp animated" data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                       <figure><img src="/assets/front/images/testimonials/person_4.jpg" alt="" /></figure>
                       <div class="content">
                           <h4><a href="#">Daniel Matthew</a></h4>
                           <p>Contacting support is very simple, it surprises me how quickly they respond to me.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="blog">
                       <figure><img style="height: 390px" src="/assets/front/images/testimonials/staff-1-new.jpg" alt="" /></figure>
                       <div class="content">
                           <h4><a href="#">Henry Jack</a></h4>
                           <p>I have learned alot about finicial markets while using this platform.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="blog">
                       <figure><img style="height: 390px" src="/assets/front/images/testimonials/person_3.jpg" alt="" /></figure>
                       <div class="content">
                           <h4><a href="#">Mason Liam</a></h4>
                           <p>Love the simple design and user experience. Not to forget their incredible customer support.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="blog">
                       <figure><img style="height: 390px" src="/assets/front/images/testimonials/staff-7-new.jpg" alt="" /></figure>
                       <div class="content">
                           <h4><a href="#">Johnny William</a></h4>
                           <p>You won't regret trading with pipstradeway, trust me you will love it.</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog wow  fadeInUp animated" data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                    <figure>
                        <video class="owl-video video-js" preload="auto" style="width:100%; height: 370px;" src="/assets/front/images/testimonials/videos/3.mp4" controls ></video>
                    </figure>
                    <div class="content">
                        <h4><a href="#">Elizabeth Johnson </a></h4>
                        <p>I invested with pipstradeway and i got my profit.</p>
                    </div>
                </div>
                </div>

           </div>
       </div>
   </div>
</section>

@endsection --}}
