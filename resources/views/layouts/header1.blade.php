<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Restan - Food & Restaurant HTML Template ">

    <!-- ========== Page Title ========== -->
    <title>@yield('tittle') </title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('13.jpeg')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('13/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/font-awesome.min.cs')}}s" rel="stylesheet">
    <link href="{{asset('13/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/flaticon-set.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/validnavs.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/unit-test.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/shop.css')}}" rel="stylesheet">
    <link href="{{asset('13/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('13/style.css')}}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
@yield('style')
</head>
<body>

<!-- Start Preloader
============================================= -->
<div id="preloader">
    <div id="restan-preloader" class="restan-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav navbar-box navbar-default validnavs">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container-xl">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->


        <div class="container nav-box d-flex justify-content-between align-items-center">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('13.jpeg')}}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{asset('13.jpeg')}}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li >
                        <a href="#" >Home</a>
                    </li>
                    <li >
                        <a href="{{url('shop')}}" >Shop</a>

                    </li>
                    <li>
                        <a href="#" >Contact-Us</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav attr-box">
                    <ul>
                        <li class="search"><a href="#"><i class="far fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fas fa-times"></i></a>
                <div class="widget">
                    <div class="logo">
                        <img src="{{asset('13.jpeg')}}" alt="Logo">
                    </div>
                    <p>
                        Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                    </p>
                </div>
                <div class="widget address">
                    <div>
                        <ul>
                            <li>
                                <div class="content">
                                    <p>Address</p>
                                    <strong>Lagos Nigeria</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Email</p>
                                    <strong>info@1303.com</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Contact</p>
                                    <strong>+44-20-7328-4499</strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget newsletter">
                    <h4 class="title">Get Subscribed!</h4>
                    <form action="#">
                        <div class="input-group stylish-input-group">
                            <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                            <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </span>
                        </div>
                    </form>
                </div>
                <div class="widget social">
                    <ul class="link">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>

            </div>
            <!-- End Side Menu -->

        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->

    </nav>
    <!-- End Navigation -->
</header>


@yield('content')

<footer>
    <div class="container">
        <div class="footer-style-one bg-dark text-light">

            <div class="row">
                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 footer-item mt-50">
                    <div class="f-item about">

                        <h4 class="widget-title">About Us</h4>
                        <p>
                            Continued at zealously necessary is Surrounded sir motionless she end literature. Gay direction neglected.
                        </p>

                        <ul class="footer-social">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- End Singel Item -->

                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 mt-50 footer-item pl-50 pl-md-15 pl-xs-15">
                    <div class="f-item link">
                        <h4 class="widget-title">Explore</h4>
                        <ul>
                            <li>
                                <a href="about-us.html">Compnay Profile</a>
                            </li>
                            <li>
                                <a href="about-us.html">About</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Help Center</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Career</a>
                            </li>
                            <li>
                                <a href="about-us.html">Features</a>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Singel Item -->

                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 footer-item  mt-50">
                    <div class="f-item contact">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    175 10h Street, Office 375 Berlin, De 21562
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <a href="tel:2151234567">+123 34598768</a> <br> <a href="tel:2151234567">+554 34598734</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <a href="mailto:name@email.com">food@restan.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Singel Item -->

                <!-- Singel Item -->
                <div class="col-lg-3 col-md-6 footer-item mt-50">
                    <h4 class="widget-title">Newsletter</h4>
                    <p>
                        Join our subscribers list to get the latest news and special offers.
                    </p>
                    <div class="f-item newsletter">
                        <form action="#">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                    <fieldset>
                        <input type="checkbox" id="privacy" name="privacy">
                        <label for="privacy">I agree to the Privacy Policy</label>
                    </fieldset>
                </div>
                <!-- End Singel Item -->


            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom text-light">
        <div class="footer-bottom-shape">
            <img src="assets/img/shape/9.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-logo">
                        <img src="assets/img/logo-light.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <p>
                        © Copyright 2024 Restan. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
<script src="{{asset('13/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('13/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('13/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('13/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('13/assets/js/progress-bar.min.js')}}"></script>
<script src="{{asset('13/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('13/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('13/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('13/assets/js/count-to.js')}}"></script>
<script src="{{asset('13/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('13/assets/js/jquery.scrolla.min.js')}}"></script>
<script src="{{asset('13/assets/js/YTPlayer.min.js')}}"></script>
<script src="{{asset('13/assets/js/validnavs.js')}}"></script>
<script src="{{asset('13/assets/js/gsap.js')}}"></script>
<script src="{{asset('13/assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('13/assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('13/assets/js/main.js')}}"></script>

</body>
