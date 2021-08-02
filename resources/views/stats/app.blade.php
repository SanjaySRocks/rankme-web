<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Player Ranks - AnonymouS Gaming</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="/stats_assets/css/mdb.min.css" />
  <link rel="stylesheet" href="/stats_assets/css/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

  <link rel="stylesheet" href="/stats_assets/css/style.css"/>
  
</head>

<body>


  <!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">

          <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action py-2 ripple @yield('main')" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
          </a>

          <a href="{{ route('points') }}" class="list-group-item list-group-item-action py-2 ripple @yield('points')">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Points </span>
          </a>

          <a href="{{ route('top-kill') }}" class="list-group-item list-group-item-action py-2 ripple @yield('kill')">
            <i class="fas fa-chart-line fa-fw me-3"></i><span>Top Kill </span>
          </a>

          <a href="{{ route('top-headshot') }}" class="list-group-item list-group-item-action py-2 ripple @yield('headshot')">
            <i class="fas fa-chart-line fa-fw me-3"></i><span>Top Headshot </span>
          </a>

          <a href="{{ route('top-knife') }}" class="list-group-item list-group-item-action py-2 ripple @yield('knife')">
            <i class="fas fa-chart-line fa-fw me-3"></i><span>Top Knife </span>
          </a>

          <a href="{{ route('top-mvp') }}" class="list-group-item list-group-item-action py-2 ripple @yield('mvp')">
            <i class="fas fa-chart-line fa-fw me-3"></i><span>Top MVP </span>
          </a>

          
          <a href="{{ route('servers') }}" class="list-group-item list-group-item-action py-2 ripple @yield('server')">
          <i class="fas fa-server fa-fw me-3"></i><span>Servers</span>
        </a>

          <a href="http://amsgaming.in" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-sign-out-alt fa-fw me-3"></i><span>Website</span>
          </a>

            <a href="http://bans.amsgaming.in" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-user-slash fa-fw me-3"></i><span>Ban List</span>
            </a>


        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand font-mont" href="/">
          <strong>AnonymouS Gaming</strong>
        </a>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->

          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="https://github.com/sanjaysrocks">
              <i class="fab fa-github"></i>
            </a>
          </li>

          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="http://amsgaming.in/facebook">
              <i class="fab fa-facebook"></i>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="http://amsgaming.in/whatsapp">
              <i class="fab fa-whatsapp"></i>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="http://amsgaming.in/discord">
              <i class="fab fa-discord"></i>
            </a>
          </li>

          <!-- Avatar -->
          {{-- @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="{{ Session::get('user')['avatar'] }}" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
          @endif --}}

        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  @yield('content')

    

  <div class="footer">
  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3">
      © 2020 Copyright 
      <a class="text-dark" href="https://github.com/sanjaysrocks" target="blank">AmS Ranking</a>
    </div>
  </footer>
  </div>



  <script type="text/javascript" src="/stats_assets/js/mdb.min.js"></script>
  <script type="text/javascript" src="/stats_assets/js/admin.js"></script>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>


  @yield('script')
</body>



</html>