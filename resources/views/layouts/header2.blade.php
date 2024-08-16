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
{{--<div id="preloader">--}}
{{--    <div id="restan-preloader" class="restan-preloader">--}}
{{--        <div class="animation-preloader">--}}
{{--            <div class="spinner"></div>--}}
{{--        </div>--}}
{{--        <div class="loader">--}}
{{--            <div class="row">--}}
{{--                <div class="col-3 loader-section section-left">--}}
{{--                    <div class="bg"></div>--}}
{{--                </div>--}}
{{--                <div class="col-3 loader-section section-left">--}}
{{--                    <div class="bg"></div>--}}
{{--                </div>--}}
{{--                <div class="col-3 loader-section section-right">--}}
{{--                    <div class="bg"></div>--}}
{{--                </div>--}}
{{--                <div class="col-3 loader-section section-right">--}}
{{--                    <div class="bg"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- Start Header Top
============================================= -->
<div class="top-bar-area top-bar-style-one bg-theme text-light bg-transparent">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-7">
                <ul class="item-flex">
                    <li>
                        <a href="tel:080000000">
                            <img src="13/assets/img/icon/6.png" alt="Icon"> Phone: 080000000
                        </a>
                    </li>
                    <li>
                        <a href="mailto:name@email.com">
                            <img src="13/assets/img/icon/7.png" alt="Icon"> Email: info@1303.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 text-end">
                <p>
                    <i class="fas fa-map-marker-alt"></i> Lagos Nigeria
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
============================================= -->
<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav brand-center-style-two dark-layout brand-center navbar-default validnavs">


        <div class="container">


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('13.jpeg')}}" class="logo logo-display" alt="Logo">
                    <img src="{{asset('13.jpeg')}}" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{asset('13.jpeg')}}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a href="{{url('/')}}" >Home</a>
                    </li>
                    <li>
                        <a href="{{url('shop')}}">Menu</a>
                    </li>
                        <a href="#">Shop</a>
                    </li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->



            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->

        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->



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
                            We are Professional catering company who caters to corporate and private events
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
                                    lagos nigeria
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <a href="tel:2151234567">0800000000</a> <br> <a href="tel:2151234567">08000000</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <a href="mailto:name@email.com">food@1303.com</a>
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
            <img src="13/assets/img/shape/9.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-logo">
                        <img src="{{asset('13.jpeg')}}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <p>
                        © Copyright 2024 1303. All Rights Reserved
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
