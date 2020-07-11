<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('admin.index')}}"><i class="la la-home"></i><span class="menu-title"
                        data-i18n="nav.dash.main">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.deposits')}}"><i class="la la-money"></i><span
                        class="menu-title" data-i18n="nav.templates.main">Deposits</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.withdrawals')}}"><i class="la la-briefcase"></i><span
                        class="menu-title" data-i18n="nav.page_layouts.main">withdrawals</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.trades')}}"><i class="la la-line-chart"></i><span
                        class="menu-title" data-i18n="nav.navbars.main">Trades</span></a>
            </li>
            {{-- <li class=" nav-item"><a href="{{route('admin.tickets')}}"><i class="la la-book"></i><span
                        class="menu-title" data-i18n="nav.vertical_nav.main">Tickets</span></a>
            </li> --}}
            <li class=" nav-item"><a href="{{route('admin.users')}}"><i class="la la-users"></i><span class="menu-title"
                        data-i18n="nav.users.main">Users</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.settings.index')}}"><i class="la la-cog"></i><span
                        class="menu-title" data-i18n="nav.users.main">Settings</span></a>
            </li>
        </ul>

    </div>
</div>
