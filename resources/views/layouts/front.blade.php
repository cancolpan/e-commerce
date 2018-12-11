<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Promotional Signs - New</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- jQuery -->
    <script src="{{asset('frontend/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('frontend/css/bootstrap.css?v=1.0')}}" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="{{asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{asset('frontend/plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('frontend/plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{asset('frontend/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
    <script src="{{asset('frontend/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- custom style -->
    <link href="{{asset('frontend/css/ui.css?v=1.0')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>
<body>
<header class="section-header">
    <nav class="navbar navbar-top navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTop">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <i class="fa fa-phone"></i> Call us: +1 (832) 581-3622 </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li><a href="#" class="nav-link"> My Account </a></li>
                    <li><a href="#" class="nav-link"> Wishlist </a></li>
                    <li><a href="#" class="nav-link"> Checkout </a></li>
                </ul> <!-- list-inline //  -->
            </div> <!-- navbar-collapse .// -->
        </div> <!-- container //  -->
    </nav>
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <a href="{{url('/')}}"><img class="logo" src="{{asset('frontend/images/logo.png')}}"></a>
                    </div> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="{{url('/cart')}}" class="icontext">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-shopping-cart"></i></div>
                                <div class="text-wrap">
                                    
                                    <span>{{ Cart::getTotalQuantity() }} items</span>
                                </div>
                            </a>
                        </div> <!-- widget .// -->
                        <div class="widget-header dropdown">
                            <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i></div>
                                <div class="text-wrap">
                                    <small>Hello.</small>
                                    <span>Login <i class="fa fa-caret-down"></i></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form class="px-4 py-3">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="email@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="#">Have account? Sign up</a>
                                <a class="dropdown-item" href="#">Forgot password?</a>
                            </div> <!--  dropdown-menu .// -->
                        </div> <!-- widget  dropdown.// -->
                    </div>	<!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FLAG BANNERS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="{{url('/category/feather-flag-banners')}}">Feather Flag Banner</a>
                            <a class="dropdown-item" href="#">Teardrop Flag Banner</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CUSTOM PRINTED FLAGS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TABLE COVERS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown08">
                            <a class="dropdown-item" href="#">FITTED ELASTIC TABLE COVERS</a>
                            <a class="dropdown-item" href="#">FITTED TABLE COVER</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PARTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TEMPLATES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>

</header> <!-- section-header.// -->

@yield('content')

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg2">
    <div class="container">
        <section class="footer-bottom row">
            <div class="col-sm-6">
                <p> Made with<br>  by Can Colpan.</p>
            </div>
            <div class="col-sm-6">
                <p class="text-sm-right">
                    Copyright &copy 2018 <br>
                    <a href="#">Promotional Signs LLC.</a>
                </p>
            </div>
        </section> <!-- //footer-top -->
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>