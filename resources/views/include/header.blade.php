<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BD HOME SERVICE</title>

    <!-- styleshetts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/website') }}/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/website') }}/css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/website') }}/css/font-awesome.min.css" media="all" />
    <!--contact page start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/website') }}/css/responsive.css" media="all" />
    <!--contact page end-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/website') }}/style.css" media="all" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/website') }}/images/favicon.png" />

    <!--[if lt ie 9]> <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
</head>
<body>
    <!-- header part start -->
    <header class="">

        <!-- navbar start -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="" style="background:#054676;padding:15px 0;font-size:18px"> <!--id=scrolling-->
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <!--<img style="width:35px;height:32px;position:absolute;top:25%;bottom:7%;padding-bottom:5px" src="{{ asset('/website') }}/images/logo.png" alt="logo">-->
				<span style="color:white">BD HOME SERVICE</span>
              </a>
            </div>
            <div class="collapse navbar-collapse menu" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="{{ url('/') }} ">Home</a></li>
                <li id="lol" ><a href="">SERVICES <span class="caret"></span></a>
                    <ul id="wow">
                        <li><a href="{{ url('/cleaning') }}">Cleaning Service</a></li>
                        <li><a href="{{ url('/babysitting') }}">Baby Sitting  Service</a></li>
                        <li><a href="{{ url('/cooking') }}">Cooking Service</a></li>
                        <li><a href="{{ url('/plumbing') }}">Plumbing Service</a></li>
                        <li><a href="{{ url('/electrician') }}">Electrical Service</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/works') }}">HOW IT WORKS</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/contact') }}">Contact US</a></li>

              </ul>

            </div>
          </div>

</nav>
</header>
