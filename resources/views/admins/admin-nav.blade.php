<header class="main-header">
  <!-- Logo -->
  <a href="/dashboard" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>M</b>OD</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>PC</b>MOD</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="height: 50px;">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ Storage::url(auth()->user()->avatar) }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ ucfirst(auth()->user()->firstname) . ' ' . ucfirst(auth()->user()->lastname) }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ Storage::url(auth()->user()->avatar) }}" class="img-circle" alt="User Image">

              <p>
                {{ ucfirst(auth()->user()->firstname) . ' ' . ucfirst(auth()->user()->lastname) }}
                <small>Member since {{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              {{-- <div class="pull-left">
                <a href="#" class="btn btn-primary btn-flat">Profile</a>
              </div> --}}
              <div class="pull-right">
                <a  href="{{ route('logout') }}" class="btn btn-danger btn-flat"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </li>
       
      </ul>
    </div>
  </nav>
</header>