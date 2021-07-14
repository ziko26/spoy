<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('user.dashboard')}}">
                        <h3 class="brand-text">{{ Auth::user()->fullName }}</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                 
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar">
                  <i class="ficon ft-user"></i></span>
                        </a>
                       
                        <div class="dropdown-menu dropdown-menu-right">
                            @if(isset(Auth::user()->brand->id))
                            <a class="dropdown-item" target="_blank" href="{{route('front.brand',  Auth::user()->brand->slug)}}">
                            <img width='30' height='30'  src="{{asset('public/images/user/brand/'.Auth::user()->brand->image)}}">
                             {{Auth::user()->brand->name}}
                            </a>
                            <div class="dropdown-divider"></div>
                            @endif
                            <a class="dropdown-item" href="{{route('user.information.edit', Auth::user()->id)}}"><i
                                    class="ft-edit"></i>Edit Information </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('user.password.edit', Auth::user()->id)}}"><i
                                    class="ft-lock"></i>Change Passwore </a>
                            <div class="dropdown-divider"></div>           
                            <a class="dropdown-item" href="{{route('user.logout')}}">
                                        <i class="ft-power"></i> Log Out</a>


                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>