<!-- main header -->
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>
    
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-danger navbar-badge">1</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i>1 new messages
          <span class="float-right text-muted text-sm">
            0 mins
          </span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    
    <!-- admin logout block -->
    <li class="dropdown user user-menu mt-2">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        @if(Auth::user()->image == null)
          <img src="{{ asset('uploads/Admin') . '/' . 'noimage.jpg' }}" class="user-image" alt="User">
        @else
          <img src="{{asset('uploads/Admin/'. Auth::user()->image)}}" class="user-image" alt="User">
        @endif
        <span class="hidden-xs">{{Auth::user()->name}}</span>
      </a>
      <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
          @if(Auth::user()->image == null)
            <img src="{{ asset('uploads/Admin') . '/' . 'noimage.jpg' }}" class="img-circle" alt="User Image">
          @else
            <img src="{{asset('uploads/Admin/'. Auth::user()->image)}}" class="img-circle" alt="User Image">
          @endif
          <p>
            {{Auth::user()->name}} - Administrator
            <small>Feel Free to Manage...</small>
          </p>
        </li>

        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="float-left">
            <a href="#" class="btn btn-default bg-info">Profile</a>
          </div>
          <div class="float-right">
            <a href="{{route('logout')}}" class="btn btn-default  bg-info">Sign out</a>
          </div>
        </li>
      </ul>
    </li>
    <!-- end --> 
  </ul>
</nav>
<!-- /.navbar -->