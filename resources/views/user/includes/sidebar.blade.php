<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item {{  Request::routeIs('user.dashboard') ? 'active' : '' }}"><a href="{{route('user.dashboard')}}"><i class="ft-home"></i><span
                class="menu-title" data-i18n="nav.add_on_drag_drop.main">Dashboard </span></a>
            </li>

            <li class="nav-item "><a href=""><i class="ft-box"></i>
                <span class="menu-title" data-i18n="nav.dash.main">Orders</span>
                <span class="badge badge badge-danger  badge-pill float-right mr-2">{{Auth::user()->orders()->count()}}</span>
            </a>
                <ul class="menu-content">
                    <li class="{{  Request::routeIs('user.orders') ? 'active' : '' }}"><a class="menu-item" href="{{route('user.orders')}}"
                                          data-i18n="nav.dash.ecommerce">All Orders</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="ft-tag"></i>
                <span class="menu-title" data-i18n="nav.dash.main">Items</span>
            </a>
                <ul class="menu-content">
                    <li class="{{  Request::routeIs('user.items') ? 'active' : '' }}"><a class="menu-item" href="{{route('user.items')}}"
                                          data-i18n="nav.dash.ecommerce">All items</a>
                    </li>
                    <li class="{{  Request::routeIs('user.items.create') ? 'active' : '' }}"><a class="menu-item" href="{{route('user.items.create')}}" data-i18n="nav.dash.crypto">New Item</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
            @if(isset(Auth::user()->brand->id))
            <a href="{{route('user.brands.edit', Auth::user()->brand->id)}}">
            @else
            <a href="{{route('user.brand.setup')}}">
            @endif    

                <i class="ft-shopping-cart"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Your Brand</span>
                </a>
            </li>

            <li class="disabled nav-item">
                <a><i class="ft-bar-chart-2"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Insights</span>
                    <span class="badge badge-primary  badge-pill float-right">Comming Soon</span>
                </a>
            </li>

            <li class=" nav-item"><a href="#"><i class="ft-life-buoy"></i><span
                class="menu-title" data-i18n="nav.support_raise_support.main">Support</span></a>
            </li>
        </ul>
    </div>
</div>