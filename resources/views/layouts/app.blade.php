<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Scripts -->
    <link rel="icon" type="image/png" sizes="16x16" href="images2/favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->
    <link href="css2/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="css2/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css2/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css2/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css2/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css2/helper.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


</head>
<body class="fix-sidebar fix-header">
      <!-- Main wrapper  -->
    <div id="main-wrapper">
      <div class="header">
                  <nav class="navbar top-navbar navbar-expand-md navbar-light">
                      <!-- Logo -->
                      <div class="navbar-header">
                          <a class="navbar-brand" href="{{ url('/home') }}">
                          </a>
                          <!-- Logo icon -->
                                <b><img src="images2/logo.png" alt="homepage" class="dark-logo logo-position" /></b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                            </a>
                        </div>
                        <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->

                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images2/users/5.jpg" alt="user" class="profile-pic" />{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}><i class="fa fa-power-off"></i> Logout</a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      </div>
        <!-- End header header -->

        @include ('layouts.left-sidebar')

        <!-- Page wrapper  -->
        <div class="page-wrapper">



        <main class="py-4">
            @yield('content')
        </main>

        <!-- footer -->
          <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
          <!-- End footer -->

        @include ('layouts.scripts')


    </div>
</body>
</html>
