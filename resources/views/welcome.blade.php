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

    <title>Multi-User</title>

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
                    <a class="navbar-brand" href="{{ url('/') }}">Blank Template</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="{{ url('/') }}">Home</a></li>
                        <li><a class="page-scroll" href="#features">Features</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                        <li><a class="page-scroll" href="#pricing">Pricing</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        @if (Route::has('login'))
                                @auth
                                    <li><a class="page-scroll" href="{{ url('/') }}/home">{{ $name }}</a></li>
                                    <!-- <a href="{{ url('/home') }}">Home</a> -->
                                @else
                                    <li><a class="page-scroll" href="{{ route('login') }}">Login</a></li>
                                    <!-- <a href="{{ route('login') }}">Login</a> -->
                                @endauth
                        @endif
                        
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Lorem<br/>
                        Ipsum<br/>
                       </h1>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">BUY NOW</a>
                        <a class="caption-link" href="#" role="button">RS 300</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="{{ asset('public') }}/img/laptop.png" alt="laptop"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>Lorem Ipsum</h1>
                    <p>Dolor sit amet.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section class="features free">
    <<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>OUR FREE PRODUCTS</h1>
                <p>Have a look at our various free products.</p>
            </div>
        </div>

    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            @for( $i=0; $i < 4; $i++)
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
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
<center><a class="btn btn-primary" href="{{ route('game.category', 'free') }}">View More</a></center>
</div>
</section>
<section class="features premium">
    <<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>OUR PREMIUM PRODUCTS</h1>
                <p>Have a look at our various premium products.</p>
            </div>
        </div>

    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

            @for( $i=0; $i < 4; $i++)
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
                
                

<center><a class="btn btn-primary" href="{{ route('game.category', 'premium') }}">View More</a></center>
</div>
</section>

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
