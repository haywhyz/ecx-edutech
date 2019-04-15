<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Add Your favicon here -->
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>{{ ucfirst($type) }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/a_landingpage') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{ asset('public/a_landingpage') }}/css/animate.min.css" rel="stylesheet">

    <link href="{{ asset('public') }}/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('public/a_landingpage') }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="{{ asset('public/a_landingpage') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('public/a_landingpage') }}/css/style1.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="{{ asset('public/a_landingpage') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('public/a_landingpage') }}/css/gr_landing.css" rel="stylesheet">

    <!-- <link href="{{ asset('public') }}/css/app.css" rel="stylesheet"> -->
</head>
<body id="page-top">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">BLANK TEMPLATE</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="{{ url('/') }}">Home</a></li>
                        <li><a class="page-scroll" href="#features">Features</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                        <li><a class="page-scroll" href="#pricing">Pricing</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>




<div class="row wrapper border-bottom white-bg page-heading">
    <div class="container">
            <div class="col-lg-10">
                <h2 style="text-transform: uppercase;">{{ $type }} category</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="active">
                        <strong>Products</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="container">
            
            @for($i =0; $i < 3; $i ++)
            <div class="row">
                @for($j = 0; $j < 4; $j ++)
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    $10
                                </span>
                                <small class="text-muted">Category</small>
                                <a href="#" class="product-name"> Product</a>



                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            @endfor
        </div>
        </div>



@include('layouts.contact')

<script src="{{ asset('public/a_landingpage') }}/js/jquery-2.1.1.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/pace.min.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/classie.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/cbpAnimatedHeader.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/wow.min.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/inspinia.js"></script>


<script src="{{ asset('public/a_landingpage') }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('public/a_landingpage') }}/js/plugins/pace/pace.min.js"></script>
</body>
</html>
