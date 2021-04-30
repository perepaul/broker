@extends('layouts.master')

@section('content-background')

<div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb"></ul>
            </div>
        </div>
    </div>
</div>

@endsection


@section('content')

<div class="uk-section in-offset-top-40 in-offset-bottom-20">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(assets/front/img/in-team-background-1.png);" data-uk-parallax="bgy: -100">
                    <div class="uk-card-body">
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-3-4@m uk-text-center">
                                <h2>Trust the Professionals</h2>
                                <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p>
                            </div>
                        </div>
                        <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="https://smartfxsignals.com/static/2536925b798be0d0ab2813a494db4bb3/955cf/jean-yves.webp" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Founder and Chief Executive Officer</p>
                                    <h4 class="uk-margin-small-top">Jean-Yves Sireau</h4>
                                    <p>Jean-Yves has been an entrepreneur since the age of 20. From 1997 to 1999, he developed the algorithms that would become one of the world’s first trading platforms. He was granted a patent for his binary options trading system in 2007, and granted two more patents in 2011 for systems and methods that enable financial market speculation.</p>
                                    {{-- <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="assets/img/deriv-girl.jpeg" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Trader</p>
                                    <h4 class="uk-margin-small-top">Tehila Raines</h4>
                                    {{-- <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                    <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="assets/img/deriv-trader.jpeg" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Trader</p>
                                    <h4 class="uk-margin-small-top">Aman Nathaniel</h4>
                                    {{-- <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                    <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img class="uk-align-center " src="assets/img/deriv-trader2.jpeg" alt="image-team" width="300">
                                </div>
                                <div>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Mentor</p>
                                    <h4 class="uk-margin-small-top">Sean Lee</h4>
                                    {{-- <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                    <div>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                        <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div> --}}
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
