<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Player Ranks - AnonymouS Gaming</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('stats_assets/css/mdb.min.css') }}" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('stats_assets/css/admin.css') }}" />
  <link rel="stylesheet" href="{{ asset('stats_assets/css/style.css') }}"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="{{ route('dashboard') }}" class="@yield('main') list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="{{ route('points') }}" class="@yield('points') list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Points </span>
          </a>
          <a href="{{ route('top-kill') }}" class="@yield('kill') list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-lock fa-fw me-3"></i><span>Kills</span></a>
          <a href="{{ route('top-headshot') }}" class="@yield('headshot') list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-chart-line fa-fw me-3"></i><span>Headshots</span></a>
          <a href="{{ route('top-knife') }}" class="@yield('knife') list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Knifes</span>
          </a>
          <a href="{{ route('top-mvp') }}" class="@yield('mvp') list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-chart-bar fa-fw me-3"></i><span>MVPs</span></a>
          <a href="http://bans.amsgaming.in" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-globe fa-fw me-3"></i><span>Ban List</span></a>
          <a href="http://amsgaming.in" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-building fa-fw me-3"></i><span>Website</span></a>
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
        <a class="navbar-brand" href="#">
          <img src="stats_assets/img/brand.png" height="35" alt="" loading="lazy" />
        </a>

        <!-- <a href="#">Menu</a> -->


        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">

          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="https://github.com/sanjaysrocks">
            <i class="fab fa-github"></i>
            </a>
            </li>
            
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

        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 80px">
    <div class="container pt-4">
      
      <!-- Section: Main chart -->
      @yield('content')
      <!-- Section: Main chart -->
    
    </div>
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="{{ asset('stats_assets/js/mdb.min.js') }}"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

  @yield('script')
</body>

</html>