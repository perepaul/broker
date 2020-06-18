<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

@include('layouts.global_components.front.front_head')

<body id="top">
    @include('layouts.global_components.front.front_head_scripts')
    <div id="preloader">
        <div class="preloader__wrap"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 75 75" xml:space="preserve" width="75px"
                height="75px">
                <path class="iq-logo-svg__circle"
                    d="M 36.6 37.9 m -28.8,0 a 28.8,28.8 0 1,0 57.6,0 a 28.8,28.8 0 1,0 -57.6,0" fill="#f70" />
                <path class="iq-logo-svg__line iq-logo-svg__line_1"
                    d="M27.3,50.1c0,2.1-1.7,3.8-3.8,3.8l0,0c-2.1,0-3.8-1.7-3.8-3.8V36.2c0-2.1,1.7-3.8,3.8-3.8l0,0c2.1,0,3.8,1.7,3.8,3.8V50.1z"
                    fill="#fff" />
                <path class="iq-logo-svg__line iq-logo-svg__line_2"
                    d="M39.7,50.7c0,2-1.6,3.6-3.6,3.6l0,0c-2,0-3.6-1.6-3.6-3.6V30.3c0-2,1.6-3.6,3.6-3.6l0,0c2,0,3.6,1.6,3.6,3.6V50.7z"
                    fill="#fff" />
                <path class="iq-logo-svg__line iq-logo-svg__line_3"
                    d="M53,50.1c0,2.3-1.9,4.2-4.2,4.2l0,0c-2.3,0-4.2-1.9-4.2-4.2V23.2c0-2.3,1.9-4.2,4.2-4.2l0,0c2.3,0,4.2,1.9,4.2,4.2V50.1z"
                    fill="#fff" /></svg></div>
    </div>
    <div class="cookies-position" id="cookies">
        <div class="cookies-wrapper">
            <div class="cookies-block">
                <div class="cookies-text"><span class="show-for-reg">We use cookies to understand how you use our site
                        and to improve your experience. By clicking “Got it” or by continuing to use our website you
                        agree to their use. <a href="https://iq-options.com/lp/regulation/privacy-reg/"
                            target="_blank">More Info</a></span><span class="hide-for-reg">We use cookies to understand
                        how you use our site and to improve your experience. By clicking “Got it” or by continuing to
                        use our website you agree to their use. <a
                            href="https://iq-options.com/lp/regulation/privacy-nonreg/" target="_blank">More
                            Info</a></span></div><button id="cookies-accept-btn">Got it</button>
            </div>
        </div>
    </div>
    {{-- <svg width="0" height="0" style="display:block">
        <lineargradient x1="0%" y1="0%" x2="0%" y2="100%" id="positive-gradient">
            <stop offset="0%" stop-color="#35a947" />
            <stop offset="100%" stop-color="#fff" />
        </lineargradient>
    </svg>
    <svg width="0" height="0" style="display:block">
        <lineargradient x1="0%" y1="0%" x2="0%" y2="100%" id="negative-gradient">
            <stop offset="0%" stop-color="#e34828" />
            <stop offset="100%" stop-color="#fff" />
        </lineargradient>
    </svg> --}}
    <div class="btn-sticky__wrap">
        @include('layouts.global_components.front.front_nav')

        @include('layouts.global_components.front.front_wallpaper')

        @yield('content-why-invest')

        <div class="get-started">
            <div class="wrap">

                @yield('content')

            </div>
        </div>

        @yield('content-client')

    </div>

    @include('layouts.global_components.front.front_numbers')

    @include('layouts.global_components.front.front_footer')

    @include('layouts.global_components.front.front_scripts')
</body>

</html>
