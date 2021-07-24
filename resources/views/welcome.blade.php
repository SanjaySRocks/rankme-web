<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>AmS Stats</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

  <link rel="stylesheet" href="/stats_assets/css/mdb.min.css" />

  <link rel="stylesheet" href="/stats_assets/css/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

  
</head>

<body>


<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <strong>AmS Stats</strong>
        </a>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->

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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="https://amsgaming.in">
              Main Website
            </a>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
  <!--Main Navigation-->

<br><br><br>

<div class="container pt-5">
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
          {{-- <h5 class="card-title">Login to view your stats </h5> --}}
          <p class="card-text">
            <a href="{{ route('auth.steam') }}"> <img src="https://community.akamai.steamstatic.com/public/images/signinthroughsteam/sits_01.png"> </a>
          </p>
        </div>
      </div>
</div>
  


  <script type="text/javascript" src="/stats_assets/js/mdb.min.js"></script>
  <script type="text/javascript" src="/stats_assets/js/admin.js"></script>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>


  @yield('script')
</body>



</html>