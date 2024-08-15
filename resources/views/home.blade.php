@extends('layouts.header1')
@section('tittle', 'Home')
@section('content')
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area banner-style-five text-center zoom-effect text-light">
        <div class="banner-style-five-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="info">
                            <div class="text-end">
                                <h1>13_03</h1>
                                <h3>gourmet</h3>
                            </div>
                            <div class="bottom">
                                <p>
                                    live <strong>@lagos</strong>
                                </p>
                                <span class="marker"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide">
                    <div class="banner-thumb bg-cover" style="background: url(13/assets/img/banner/19.jpg);"></div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide">
                    <div class="banner-thumb bg-cover" style="background: url(13/assets/img/banner/18.jpg);"></div>
                </div>
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-nav-left">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-five-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="thumb-style-two">
                        <img src="bbn.png" alt="Image Not Found">
                        <img class="animate" data-animate="zoomIn" src="13/assets/img/illustration/10.png" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-lg-6 pl-50 pl-md-15 pl-xs-15">
                    <h2 class="title">Reserve your favorite  <br> private table</h2>
                    <div class="item-grid-two-colum mt-40">
                        <div class="item">
                            <p>
                                Are you a visitor in Lagos? Our foods are the best meals you can have
                            </p>
                            <a class="btn btn-theme btn-md animation" href="#">Explore menu</a>
                        </div>
                        <div class="item">
                            <div class="quote">
                                <ul class="card-info bg-dark text-light">
                                    <li>
                                        <h5>Lunch</h5>
                                        <p>
                                            Saturday and Sunday <br>
                                            Reservations from 12pm to 1.30pm
                                        </p>
                                    </li>
                                    <li>
                                        <h5>Dinner</h5>
                                        <p>
                                            Thursday to Sunday <br>
                                            Reservations from 6pm to 8.45pm
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Food Services
    ============================================= -->
    <div class="services-style-one-area default-padding bg-gray" style="background-image: url(13/assets/img/shape/22.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="site-heading">
                        <h4 class="sub-heading">Our Services</h4>
                        <h2 class="title">Types of our Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-style-one-items">
            <div class="container">
                <div class="relative">
                    <!-- Navigation -->
                    <div class="services-swiper-nav">
                        <div class="services-cat-prev"></div>
                        <div class="services-cat-next"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="services-style-one-carousel swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <div class="services-style-one">
                                            <div class="thumb">
                                                <img src="13/assets/img/services/1.jpg" alt="Image Not Found">
                                                <h4><a href="#">Find Dining</a></h4>
                                            </div>
                                            <div class="info">
                                                <ul>
                                                    <li><span>Opening Time</span> <strong>06 PM - 09 PM</strong></li>
                                                    <li><span>90+ Items</span> <strong>₦40,000</strong></li>
                                                </ul>
                                                <p>
                                                    Resolve parties but why she shewing. Zealously necessary breakfast. Surrounded sir motionless she end literature.
                                                </p>
                                                <a class="btn btn-light circle btn-md animation" href="#">Reserve a seat</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <div class="services-style-one">
                                            <div class="thumb">
                                                <img src="13/assets/img/services/2.jpg" alt="Image Not Found">
                                                <h4><a href="#">Party And Event</a></h4>
                                            </div>
                                            <div class="info">
                                                <ul>
                                                    <li><span>Opening Time</span> <strong>06 PM - 09 PM</strong></li>
                                                    <li><span>140+ Items</span> <strong>₦80,000</strong></li>
                                                </ul>
                                                <p>
                                                    Resolve parties but why she shewing. Zealously necessary breakfast. Surrounded sir motionless she end literature.
                                                </p>
                                                <a class="btn btn-light circle btn-md animation" href="#">Reserve a seat</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <div class="services-style-one">
                                            <div class="thumb">
                                                <img src="13/assets/img/services/3.jpg" alt="Image Not Found">
                                                <h4><a href="#">Buffet</a></h4>
                                            </div>
                                            <div class="info">
                                                <ul>
                                                    <li><span>Opening Time</span> <strong>06 PM - 09 PM</strong></li>
                                                    <li><span>110+ Items</span> <strong>₦60,000</strong></li>
                                                </ul>
                                                <p>
                                                    Resolve parties but why she shewing. Zealously necessary breakfast. Surrounded sir motionless she end literature.
                                                </p>
                                                <a class="btn btn-light circle btn-md animation" href="#">Reserve a seat</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <div class="services-style-one">
                                            <div class="thumb">
                                                <img src="13/assets/img/services/4.jpg" alt="Image Not Found">
                                                <h4><a href="#">Burger Day</a></h4>
                                            </div>
                                            <div class="info">
                                                <ul>
                                                    <li><span>Opening Time</span> <strong>06 PM - 09 PM</strong></li>
                                                    <li><span>120+ Items</span> <strong>₦70,000</strong></li>
                                                </ul>
                                                <p>
                                                    Resolve parties but why she shewing. Zealously necessary breakfast. Surrounded sir motionless she end literature.
                                                </p>
                                                <a class="btn btn-light circle btn-md animation" href="#">Reserve a seat</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Food Services -->



    <!-- Start Offer Product
   ============================================= -->
    <div class="offer-product-area default-padding" style="background-image: url(13/assets/img/shape/16.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="offer-product-thumb">
                        <img src="13/assets/img/illustration/1.png" alt="Image not found">
                        <div class="food-quick-info animate" data-animate="fadeInLeft">
                            <h4><a href="#">Grilled Steak Platter</a></h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <ul>
                                <li>Steak</li>
                                <li>Baguette</li>
                                <li>Spanish Onion</li>
                                <li>Salt & Pepper</li>
                            </ul>
                            <div class="price">
{{--                                <span><del>$14.00</del> $12.00</span>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="offer-product-info">
                        <h4 class="sub-heading">Daily Offer</h4>
                        <h2 class="title">Grab This Deal <br> Before It Finished</h2>
                        <p>
                            The week gives you a chance to spend one-on-one time with us where we'll come together to cook in our kitchen and immerse ourselves in the rich culture of Nigeria home cooking.
                        </p>
                        <a class="btn circle btn-theme btn-md animation" href="#"><i class="fas fa-shopping-cart"></i> Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Offer Product -->

    <!-- Start Choose Us
   ============================================= -->
    <div class="choose-us-style-one-area shadow dark default-padding text-light bg-fixed" style="background-image: url(13/assets/img/banner/15.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 pr-60 pr-md-15 pr-xs-15">
                    <div class="choose-us-style-two-info">
                        <h2 class="title">Best food ideas in the whole world</h2>
                        <div class="fun-fact-list">
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="65" data-speed="3000">65</div>
                                    <div class="operator">K</div>
                                </div>
                                <span class="medium">Clients Every Day</span>
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="26" data-speed="3000">26</div>
                                </div>
                                <span class="medium">Hygiene certificate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feature-style-two-items">
                        <div class="feature-style-two">
                            <img src="13/assets/img/icon/16.png" alt="Image Not Found">
                            <h4>Quality Food</h4>
                            <p>
                                Seeing rather is settle genius excuse over to comparison new.
                            </p>
                        </div>
                        <div class="feature-style-two">
                            <img src="13/assets/img/icon/15.png" alt="Image Not Found">
                            <h4>Perfect Test</h4>
                            <p>
                                Timing rather is settle genius excuse over to comparison new.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chose Us -->


    <!-- Start Foot Menu
   ============================================= -->
    <div class="food-menu-style-four-area overflow-hidden default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Food Menu</h4>
                        <h2 class="title">Our Specials Menu</h2>
                    </div>
                </div>
            </div>
            <div class="food-menu-style-four-items">
                <div class="upDownScrol animate-up-down"><img src="13/assets/img/illustration/18.png" alt="Image Not Found"></div>
                <div class="row">
                    <div class="col-lg-12 text-center">

                        <div class="nav nav-tabs food-menu-nav style-three four" id="nav-tab" role="tablist">
                            @foreach($category as $cat)
                            <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                <img src="{{url($cat['image'])}}" alt="Image Not Found">
                                {{ $cat->name }}
                            </button>
                            @endforeach
                            </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content food-style-four-content" id="nav-tabContent">

                            <!-- Tab Single Item -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="food-menus-item">
                                            <ul class="meal-items">
                                                @foreach($product as $pro)
                                                <li>
                                                    <div class="thumbnail">
                                                        <img src="{{url($pro['image'])}}" alt="Image Not Found">
                                                    </div>
                                                    <div class="content">
                                                        <div class="top">
                                                            <div class="title">
                                                                <h4><a href="{{route('fooddetail', $pro['id'])}}">{{$pro['name']}}</a></h4>
                                                            </div>
                                                            <div class="price">
                                                                <span>₦{{number_format(intval($pro['price'] *1))}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="left">
                                                                <p>
                                                                    @foreach($pro->categories as $category)
                                                                        <span>{{ $category->name }}</span>@if(!$loop->last), @endif
                                                                    @endforeach
                                                                </p>
                                                            </div>
{{--                                                            <div class="right">--}}
{{--                                                                <p>--}}
{{--                                                                    Free Drinks--}}
{{--                                                                </p>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="food-menus-item">
                                            <ul class="meal-items">
                                                @foreach($product as $pro)
                                                    <li>
                                                        <div class="thumbnail">
                                                            <img src="{{url($pro['image'])}}" alt="Image Not Found">
                                                        </div>
                                                        <div class="content">
                                                            <div class="top">
                                                                <div class="title">
                                                                    <h4><a href="{{route('fooddetail', $pro['id'])}}">{{$pro['name']}}</a></h4>
                                                                </div>
                                                                <div class="price">
                                                                    <span>₦{{number_format(intval($pro['price'] *1))}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="bottom">
                                                                <div class="left">
                                                                    <p>
                                                                        @foreach($pro->categories as $category)
                                                                            <span>{{ $category->name }}</span>@if(!$loop->last), @endif
                                                                        @endforeach
                                                                    </p>
                                                                </div>
                                                                {{--                                                            <div class="right">--}}
                                                                {{--                                                                <p>--}}
                                                                {{--                                                                    Free Drinks--}}
                                                                {{--                                                                </p>--}}
                                                                {{--                                                            </div>--}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Single Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Food Menu -->

    <!-- Start Reservation Area
  ============================================= -->
    <div class="reservation-area default-padding-top bg-cover shadow dark" style="background-image: url(13/assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="reservation-info text-light">
                        <h4 class="sub-heading">Reservation</h4>
                        <h2 class="title">Reservation Your Favorite Private Table</h2>
                        <p>
                            A relaxing and pleasant atmosphere, good jazz, dinner, and cocktails. The Patio Time Bar opens in the center of Florence. The only bar inspired by the 1960s, it will give you a experience that you’ll have a hard time forgetting.
                        </p>
                        <div class="reservation-time">
                            <ul>
                                <li>
                                    <h4>Launch Menu</h4>
                                    <p>
                                        30+ items
                                    </p>
                                </li>
                                <li>
                                    <h4>Dinner Menu</h4>
                                    <p>
                                        50+ items
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="reservation-form animate" data-animate="fadeInUp">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" name="phone" placeholder="0806644687" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Person</label>
                                        <select id="subject">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="4">3 Person</option>
                                            <option value="5">4 Person</option>
                                            <option value="6">5 Person</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group date date-picker-one">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" placeholder="Date">
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="time">Time</label>
                                        <select id="time">
                                            <option value="1">10:00 AM</option>
                                            <option value="1">11:00 AM</option>
                                            <option value="1">12:00 AM</option>
                                            <option value="1">1:00 AM</option>
                                            <option value="1">2:00 AM</option>
                                            <option value="1">3:00 AM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Book A Table
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reservation Area -->
<br/>
<br/>
@endsection
