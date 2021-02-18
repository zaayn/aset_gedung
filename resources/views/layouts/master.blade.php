<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Muzayyin">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miminium</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/fullcalendar.min.css')}}"/>
	<link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/datatables.bootstrap.min.css')}}"/>
    
    <!-- end: Css -->
    @yield('css')
	<link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">

  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>MIMIN</b>
                </a>
                
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>{{ Auth::user()->name }}</span></li>
                  <li class="dropdown avatar-dropdown" style="padding-right: 30px">
                   <img src="{{asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                      <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                      <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                      </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    
                    <li class="ripple"><a href="{{asset('/home')}}"><span class="fa fa-home"></span>Dashboard</a></li>
                    <li class="ripple"><a href="{{asset('/user')}}"><span class="fa fa-users"></span>User</a></li>
                    <li class="ripple"><a href="{{asset('/kampus')}}"><span class="fa fa-university"></span>Kampus</a></li>
                    <li class="ripple"><a href="{{asset('/gedung')}}"><span class="fa fa-building"></span>Gedung</a></li>
                    <li class="ripple"><a href="{{asset('/ruang')}}"><span class="fa fa-cubes"></span>Ruang</a></li>
                    
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

  		
          <!-- start: content -->
          <div id="content">
            @yield('content_header')
            @yield('content')
        </div>
          <!-- end: content -->
      </div>

    <!-- start: Javascript -->
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
   
    
    <!-- plugins -->
    <script src="{{asset('asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('asset/js/plugins/chart.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('asset/js/plugins/datatables.bootstrap.min.js')}}"></script>

    <!-- custom js-->
    <script src="{{asset('asset/js/main.js')}}"></script>
    @yield('js')
    <!-- end: Javascript -->

    </body>
</html>