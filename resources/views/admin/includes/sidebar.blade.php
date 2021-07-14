<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="{{route('admin.dashboard')}}" data-toggle="dropdown"><i class="ft-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="ft-users"></i><span>Users</span></a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#" data-toggle="dropdown"><i class="ft-user-plus"></i>Add User</a>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item" href="#" data-toggle="dropdown"><i class="ft-user-plus"></i>Add User</a>
            </li>
          </ul>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="{{route('admin.dashboard')}}" data-toggle="dropdown"><i class="ft-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="{{route('admin.dashboard')}}" data-toggle="dropdown"><i class="ft-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-map-pin"></i><span>Cities</span></a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{route('admin.cities')}}">All Cities</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('admin.cities.create')}}">Add City</a>
            </li>
          </ul>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-box"></i><span>Categoires</span></a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{route('admin.categories')}}">All Categories</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('admin.categories.create')}}">Add Category</a>
            </li>
          </ul>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="{{route('admin.dashboard')}}" data-toggle="dropdown"><i class="ft-home"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-folder-open"></i><span>General</span></a>
          <ul class="dropdown-menu">
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-paint-brush"></i>Color Palette</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>