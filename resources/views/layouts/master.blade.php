<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('layouts.global_components.front.front_head')

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
@include('layouts.global_components.front.front_nav')
    <main>
        <!-- slideshow content begin -->
       @yield('content-background')
        <!-- slideshow content end -->
        <!-- section content begin -->

        @yield('content')

        <!-- section content end -->
        <!-- section content begin -->
        {{-- <div class="uk-section in-liquid-7 in-offset-top-10">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-background-contain uk-background-center-center" style="background-image: url(img/in-liquid-7-bg.png);" data-uk-img>
                        @yield('content-platform')
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- section content end -->
        <!-- section content begin -->

        @yield('content-trading')
        <!-- section content end -->
        <!-- section content begin -->

        @yield('content-markets')

        @yield('content-steps')

        {{-- <div class="uk-section in-liquid-9">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-text-center">
                        <h2 class="uk-margin-remove">Choose the best account type for you.</h2>
                        <div class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-5@m uk-margin-medium-top in-offset-bottom-20" data-uk-grid>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-liquid-icon-11.svg" alt="sample-icon" width="82" height="82" data-uk-img>
                                <p>Individual accounts</p>
                            </div>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-liquid-icon-12.svg" alt="sample-icon" width="82" height="82" data-uk-img>
                                <p>Join accounts</p>
                            </div>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-liquid-icon-13.svg" alt="sample-icon" width="82" height="82" data-uk-img>
                                <p>Trust accounts</p>
                            </div>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-liquid-icon-14.svg" alt="sample-icon" width="82" height="82" data-uk-img>
                                <p>Family account</p>
                            </div>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-liquid-icon-15.svg" alt="sample-icon" width="82" height="82" data-uk-img>
                                <p>Institutional</p>
                            </div>
                        </div>
                        <p class="uk-text-small uk-margin-medium-top in-text-devices"><span>Trade anywhere, anytime using our various platforms.</span></p>
                        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small">
                            <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid>
                                <div>
                                    <i class="fab fa-apple"></i>
                                    <p class="uk-text-small">MacOS/iPhone</p>
                                </div>
                                <div>
                                    <i class="fab fa-android"></i>
                                    <p class="uk-text-small">Android app</p>
                                </div>
                                <div>
                                    <i class="fab fa-windows"></i>
                                    <p class="uk-text-small">Windows 10</p>
                                </div>
                                <div>
                                    <i class="fab fa-chrome"></i>
                                    <p class="uk-text-small">WebTrader</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- section content end -->
    </main>
    @include('layouts.global_components.front.front_footer')
    <!-- Javascript -->
@include('layouts.global_components.front.front_scripts')
</body>


</html>

