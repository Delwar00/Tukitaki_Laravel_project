<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lumino - Dashboard</title>
    <link href="{{ asset('/admin') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/admin') }}/css/datepicker3.css" rel="stylesheet">
    <link href="{{ asset('/website') }}/css/datatable.min.css" rel="stylesheet">
    <!--<link href="{{ asset('/admin') }}/css/select2.min.css" rel="stylesheet">-->
    <link href="{{ asset('/admin') }}/css/styles.css" rel="stylesheet">
    <!--<link href="{{ asset('/admin') }}/css/data-table.min.css" rel="stylesheet">-->

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@auth
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                    </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">3 mins ago</small>
                                        <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">1 hour ago</small>
                                        <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">{{ Auth::User()->name }}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li class="activ"><a href="{{ url('/home')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="{{ url('/front/service/view') }}"><em class="fa fa-calendar">&nbsp;</em>All Client Request</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Add Home Info<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a href="{{ url('/service') }}"><em class="fa fa-calendar">&nbsp;</em> Add Services</a></li>
                    <li><a href="{{ url('/whyBdHomeadd') }}"><em class="fa fa-calendar">&nbsp;</em> Why Home Service</a></li>
                    <li><a href="{{ url('/whyBgHome') }}"><em class="fa fa-calendar">&nbsp;</em> Why Bg Add</a></li>
                      <li><a href="{{ url('/callbook') }}"><em class="fa fa-calendar">&nbsp;</em> Add Call Book </a></li>
                    <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                    </a></li>
                </ul>
            </li>
        <li class="parent ">
          <a data-toggle="collapse" href="#sub-item-2">
            <em class="fa fa-navicon">&nbsp;</em>Reserved
            <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
              <em class="fa fa-plus"></em>
            </span>
          </a>
          <ul class="children collapse" id="sub-item-2">
              <li><a href=""><em class="fa fa-calendar">&nbsp;</em>All</a></li>
          </ul>
        </li>
        <li class="parent ">
          <a data-toggle="collapse" href="#sub-item-3">
            <em class="fa fa-navicon">&nbsp;</em> Home Contact Info
             <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right">
               <em class="fa fa-plus"></em>
             </span>
          </a>
          <ul class="children collapse" id="sub-item-3">
              <li><a href=""><em class="fa fa-calendar">&nbsp;</em> Add Services</a></li>
          </ul>
        </li>

                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          <em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
        </ul>
    </div><!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div><!--/.row-->
@endauth
        <div class="panel">


        @yield('content')

        </div>
        @auth
    </div>  <!--/.main-->
    @endauth


    <script src="{{ asset('/admin') }}/js/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('/admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('/admin') }}/js/chart.min.js"></script>
    <script src="{{ asset('/admin') }}/js/chart-data.js"></script>
    <script src="{{ asset('/admin') }}/js/easypiechart.js"></script>
    <script src="{{ asset('/admin') }}/js/easypiechart-data.js"></script>
    <script src="{{ asset('/admin') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('/website') }}/js/datatable.min.js"></script>
    <script src="{{ asset('/admin') }}/js/custom.js"></script>
    <script>
        window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
        responsive: true,
        scaleLineColor: "rgba(0,0,0,.2)",
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleFontColor: "#c5c7cc"
        });
        };
    </script>
    @yield('footer_scripts')
</body>
</html>
