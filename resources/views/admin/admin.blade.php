<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('public/a_backend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('public/a_backend') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('public/a_backend') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('public/a_backend') }}/css/gr_backend.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('public') }}/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ $name }}</strong>
                             </span> <span class="text-muted text-xs block">Admin</span> </span> </a>
                        </div>
                        <div class="logo-element">
                            GR
                        </div>
                    </li>
                    <li class="active"><a href="{{ route('home') }}"><span class="nav-label">Admin Profile</span></a></li>
                    <li><a href="#"><span class="nav-label">Link A</span></a></li>
                    <li><a href="#"><span class="nav-label">Link B</span></a></li>
                    <li><a href="#"><span class="nav-label">Link C</span></a></li>
                    <li><a href="#"><span class="nav-label">Link D</span></a></li>
                    <li><a href="{{ route('admin.logout') }}"><span class="nav-label">Logout</span></a></li>
                    
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="{{ route('admin.logout') }}">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile</h2> 
                    
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">Home</a>
                        </li>
                        <li class="active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert" style="margin-top: 5px;">
                    {{ session('status') }}
                </div>
            @endif
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <h1 style="text-align: center;"><b>Admin Dashboard Content Here</b></h1>
                </div>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="{{ asset('public/a_backend') }}/js/jquery-3.1.1.min.js"></script>
        <script src="{{ asset('public/a_backend') }}/js/bootstrap.js"></script>
        <script src="{{ asset('public/a_backend') }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="{{ asset('public/a_backend') }}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- Custom and plugin javascript -->
        <script src="{{ asset('public/a_backend') }}/js/inspinia.js"></script>
        <script src="{{ asset('public/a_backend') }}/js/plugins/pace/pace.min.js"></script>
        <!-- Sparkline -->
        <script src="{{ asset('public/a_backend') }}/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script>
        $(document).ready(function() {


            $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 48], {
                type: 'line',
                width: '100%',
                height: '50',
                lineColor: '#1ab394',
                fillColor: "transparent"
            });


        });
        </script>
</body>

</html>