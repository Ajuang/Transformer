<!DOCTYPE html>
<html>
<head>
    <title>Transformers Monitoring System</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!--font awesome library -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="/css/lcss/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/lcss/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/css/bootstrap/css/bootstrap-theme.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="/css/lcss/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src='https://api.mapbox.com/mapbox.js/v2.2.3/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v2.2.3/mapbox.css' rel='stylesheet' />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <!-- jQuery -->
    <script src="/css/lcss/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/css/lcss/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/foundation/css/foundation.css" />
    <script src="/css/foundation/js/vendor/modernizr.js"></script>

    <script src="/css/foundation/js/vendor/jquery.js"></script>
    <script src="/css/foundation/js/foundation.min.js"></script>
    <script src="css/transformer.css"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
                <!-- Static navbar -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">TX Power</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/home">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/help">Help</a>
                                <li><a href="/details">Transformer Details</a></li>
                                <li><a href="/users">Manage Users</a></li>
                                <li><a href="/faults">Faults</a></li>
                                <li><a href="/centres">Control Centres</a></li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                @if(Auth::check())
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="/auth/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="/auth/login">Login</a></li>
                                @endif

                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
        @yield('content')
        @yield('footer')
        @yield('map')
    </div>
</body>
</html>