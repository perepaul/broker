<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <!-- logo begin -->
                        <a class="uk-logo" href="/">
                            <img src="assets/img/logo.png" data-src="assets/img/logo.png" alt="logo" width="160" height="34" data-uk-img>
                        </a>
                        <!-- logo end -->
                        <!-- navigation begin -->
                        <ul class="uk-navbar-nav uk-visible@m">
                            {{-- <li><a href="index-2.html">Trade<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">DTrader</a></li>
                                        <li><a href="#">DBot</a></li>
                                        <li><a href="#">DMT5</a></li>
                                        <li><a href="#">SmartTrader</a></li>
                                    </ul>
                                </div>
                            </li> --}}
                            <li><a href="#">Trade<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="#">DTrader<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                <li><a href="#">DBot</a></li>
                                                <li><a href="#">DMT5</a></li>
                                                <li><a href="#">Smart Trader</a></li>
                                                {{-- <li><a href="3">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li> --}}
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="#">Margin Trading</a></li>
                                                <li><a href="#">Options</a></li>
                                                <li><a href="#">Multipliers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Market<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">Forex</a></li>
                                        <li><a href="#">Synthetic Indicies</a></li>
                                        <li><a href="#">Stock Indicies</a></li>
                                        <li><a href="#">Commodities </a></li>
                                    </ul>
                                </div>
                            </li>

                            <li><a href="#">About us<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">Our Story</a></li>
                                        <li><a href="our-leadership">Our leadership</a></li>
                                        <li><a href="regulatory-information">Regulatory Information</a></li>
                                        <li><a href="terms-and-condition">terms and condition</a></li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li><a href="education.html">Education</a></li> --}}
                            <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="#">Documentation<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Customers</a></li>
                                                <li><a href="#">Roadmap</a></li>
                                                <li><a href="#">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a class="uk-disabled" href="#">Adipiscing elit sed do eiusmod incididunt ut labore dolore magna lorem ipsum sit dolor amet consectetur</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- navigation end -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="login" class="uk-button uk-button-primary uk-border-rounded">Log In</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- header content end -->
</header>

{{-- <header class="gc_main_menu_wrapper pt-0">
    <div class="text-center text-sm"><a href="tel:{{config('constants.phone_number')}}" class="text-white"><i class="fa fa-phone"></i> {{config('constants.phone_number')}}</a></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
                <div class="logo-area">
                <a href="/"><img src="{{config('constants.logo_white')}}" alt="logo" style="max-width: 150px" /></a>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-6">
                <div class="menu-area  hidden-xs">
                    <nav class="wd_single_index_menu btc_main_menu">
                        <ul>
                            <li><a href="0">Home</a></li>
                            <li><a href="1">About</a></li>
                            <li><a href="2">Features</a></li>
                            <li><a href="3">Benefit</a></li>
                            <li><a href="4">Steps</a></li>
                            <li><a href="6">Plan</a></li>
                            <li><a href="7">Testimonials</a></li>
                        </ul>
                    </nav>
                    <div class="login-btn">
                        <a href="login" class="btn1"><i class="fa fa-user"></i><span>Login</span></a>
                    </div>
                </div>

                <div class="rp_mobail_menu_main_wrapper visible-xs">
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                    <g>
                                        <g>
                                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#fff" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#fff" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#fff" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#fff" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#fff" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar">
                        <h1><a href="#">Pipstradeway</a></h1>
                        <div id="toggle_close">&times;</div>
                        <div id='cssmenu' class="wd_single_index_menu">
                            <ul>
                                <li><a href="0">Home</a></li>
                                <li><a href="1">About</a></li>
                                <li><a href="2">Features</a></li>
                                <li><a href="3">Benefits</a></li>
                                <li><a href="4">Steps</a></li>
                                <li><a href="6">Plans</a></li>
                                <li><a href="7">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}
