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
    <nav class="navbar mobile-sidenav nav-top-margin navbar-sticky navbar-default validnavs navbar-fixed white no-background nav-border">


        <div class="container d-flex justify-content-between align-items-center">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index-2.html">
                    <img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                    <img src="assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="assets/img/logo.png" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="col-menu-wrap">
                                    <div class="col-item">
                                        <div class="menu-thumb">
                                            <img src="assets/img/demo/home-1.jpg" alt="Image Not Found">
                                            <div class="overlay">
                                                <a href="index-2.html">Light Version</a>
                                                <a href="index-dark.html">Dark Version</a>
                                            </div>
                                        </div>
                                        <h6 class="title"><a href="index-2.html">Home One</a></h6>
                                    </div>
                                    <div class="col-item">
                                        <div class="menu-thumb">
                                            <img src="assets/img/demo/home-2.jpg" alt="Image Not Found">
                                            <div class="overlay">
                                                <a href="index-3.html">Light Version</a>
                                                <a href="index-2-dark.html">Dark Version</a>
                                            </div>
                                        </div>
                                        <h6 class="title"><a href="index-3.html">Home Two</a></h6>
                                    </div>
                                    <div class="col-item">
                                        <div class="menu-thumb">
                                            <img src="assets/img/demo/home-3.jpg" alt="Image Not Found">
                                            <div class="overlay">
                                                <a href="index-4.html">Light Version</a>
                                                <a href="index-3-dark.html">Dark Version</a>
                                            </div>
                                        </div>
                                        <h6 class="title"><a href="index-4.html">Home Three</a></h6>
                                    </div>
                                    <div class="col-item">
                                        <div class="menu-thumb">
                                            <img src="assets/img/demo/home-4.jpg" alt="Image Not Found">
                                            <div class="overlay">
                                                <a href="index-5.html">Light Version</a>
                                                <a href="index-4-dark.html">Dark Version</a>
                                            </div>
                                        </div>
                                        <h6 class="title"><a href="index-5.html">Home Four</a></h6>
                                    </div>
                                    <div class="col-item">
                                        <div class="menu-thumb">
                                            <img src="assets/img/demo/home-5.jpg" alt="Image Not Found">
                                            <div class="overlay">
                                                <a href="index-6.html">Light Version</a>
                                                <a href="index-5-dark.html">Dark Version</a>
                                            </div>
                                        </div>
                                        <h6 class="title"><a href="index-6.html">Home Five</a></h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Our Chef</a>
                                <ul class="dropdown-menu">
                                    <li><a href="chef.html">Chef Style One</a></li>
                                    <li><a href="chef-details.html">Chef Details</a></li>
                                </ul>
                            </li>
                            <li><a href="reservation.html">Reservation</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="404.html">Error Page</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dark Version</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us-dark.html">About Us</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Our Chef</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="chef-dark.html">Chef Style One</a></li>
                                            <li><a href="chef-details-dark.html">Chef Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="reservation-dark.html">Reservation</a></li>
                                    <li><a href="contact-dark.html">Contact Us</a></li>
                                    <li><a href="404-dark.html">Error Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Menu</a>
                        <ul class="dropdown-menu">
                            <li><a href="food-menu.html">Menu Style One</a></li>
                            <li><a href="food-menu-2.html">Menu Style Two</a></li>
                            <li><a href="food-menu-3.html">Menu Style Three</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dark Version</a>
                                <ul class="dropdown-menu">
                                    <li><a href="food-menu-dark.html">Menu Style One</a></li>
                                    <li><a href="food-menu-2-dark.html">Menu Style Two</a></li>
                                    <li><a href="food-menu-3-dark.html">Menu Style Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                            <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                            <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dark Version</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-standard-dark.html">Blog Standard</a></li>
                                    <li><a href="blog-with-sidebar-dark.html">Blog With Sidebar</a></li>
                                    <li><a href="blog-2-colum-dark.html">Blog Grid Two Colum</a></li>
                                    <li><a href="blog-3-colum-dark.html">Blog Grid Three Colum</a></li>
                                    <li><a href="blog-single-dark.html">Blog Single</a></li>
                                    <li><a href="blog-single-with-sidebar-dark.html">Blog Single With Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="shop-single-thumb-only.html">Shop Single Two</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dark Version</a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-dark.html">Shop</a></li>
                                    <li><a href="shop-single-dark.html">Shop Single</a></li>
                                    <li><a href="shop-single-thumb-only-dark.html">Shop Single Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="contact.html">Reservation</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>

            <!-- Main Nav -->
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
