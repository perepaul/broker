<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('admin')}}"><i class="la la-home"></i><span class="menu-title"
                        data-i18n="nav.dash.main">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('deposits')}}"><i class="la la-money"></i><span class="menu-title"
                        data-i18n="nav.templates.main">Deposit</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('withdrawals')}}"><i class="la la-briefcase"></i><span
                        class="menu-title" data-i18n="nav.page_layouts.main">withdrawal</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('trades')}}"><i class="ft-bar-chart"></i><span class="menu-title"
                        data-i18n="nav.navbars.main">Trade</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('tickets')}}"><i class="la la-book"></i><span class="menu-title"
                        data-i18n="nav.vertical_nav.main">Tickets</span></a>
            </li>

            {{-- For Admin --}}
            <li class=" nav-item"><a href="{{route('users')}}"><i class="la la-user"></i><span class="menu-title"
                        data-i18n="nav.users.main">Profile</span></a>
            </li>
        </ul>

    </div>
</div>
