@extends('layouts.header2')
@section('tittle', 'Home')
@section('content')
    <!-- Start Banner Area
    ============================================= -->
    <div class="banner-style-four-area text-light text-center bg-cover" style="background-image: url(13/assets/img/banner/14.jpg);">
        <div class="banner-style-four-content shadow dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Best Restaurant</h2>
                        <div class="curve-text">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                <text><textPath href="#textPath">13_03 - gourmet</textPath></text>
                            </svg>
                            <a href="https://www.youtube.com/watch?v=-4ahrKWt05I" class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Top Feature
 ============================================= -->
    <div class="feature-style-three-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-80 pr-md-15 pr-xs-15">
                    <div class="reservation-form light">
                        <i class="fas fa-utensils"></i>
                        <h3>Book a table</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
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
                                        <input type="text" class="form-control" id="date" placeholder="Date">
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
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
                <div class="col-lg-7">
                    <div class="relative default-padding-top">
                        <!-- Navigation -->
                        <div class="food-swiper-nav">
                            <div class="food-cat-prev"></div>
                            <div class="food-cat-next"></div>
                        </div>

                        <div class="food-cat-items">
                            <h2 class="flex-title mb-35"><img src="13/assets/img/shape/fire.png" alt="Image Not Found"> Our Popular category</h2>
                            <div class="food-cat-carousel swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    @foreach($category as $cat)
                                        <!-- Single Item -->
                                        <div class="swiper-slide">
                                            <a href="{{url('category', $cat['id'])}}">
                                                <img src="{{url($cat['image'])}}" alt="Image Not Found">
                                                <div class="overlay">
                                                    <span>Main Dishes</span>
                                                    <h5>{{ $cat->name }}</h5>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- End Single Item -->
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Feature -->


    <!-- Start Foot Menu
 ============================================= -->
    <div class="food-menu-style-three-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Food Menu</h4>
                        <h2 class="title">Our Specials Menu</h2>
                    </div>
                </div>
            </div>
            <div class="food-menu-three-two-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content food-style-two-content" id="nav-tabContent">

                            <!-- Tab Single Item -->
{{--                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">--}}
                                <div class="row">
                                    @forelse($product as $pro)

                                    <!-- Single Item -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                                        <div class="food-menu-style-three">
                                            <div class="thumb">
                                                <img src={{url($pro['image'])}}" alt="Image Not Found">
                                                <div class="d-flex">
                                                    <div class="food-review">
                                                        <i class="fas fa-star"></i>
{{--                                                        <span>4.9(5.7K)</span>--}}
                                                    </div>
                                                    <div class="price">
                                                        <span> ₦{{number_format(intval($pro['price'] *1))}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4><a href="{{route('fooddetail', $pro['id'])}}">{{$pro['name']}}</a></h4>
                                                <ul>
                                                    <li>4 chicken legs</li>
                                                    <li>Chili sauce</li>
                                                    <li>Soft Drinks</li>
                                                </ul>
                                                <a href="{{route('fooddetail', $pro['id'])}}">{{$pro['name']}}" class="cart-btn-border"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    @empty
                                        <p class="text-center" style="font: 24px cormorant, serif">No Product Available On Store</p>
                                    @endforelse
                                </div>
{{--                            </div>--}}
                            <!-- End Tab Single Item -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Food Menu -->


    <!-- Start Why Choose us
   ============================================= -->
    <div class="choose-us-style-one-one-area default-padding">
        <div class="container">
            <div class="choose-us-style-one-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 choose-us-style-one">
                        <div class="item animate" data-animate="fadeInUp">
                            <img src="13/assets/img/icon/13.png" alt="Icon">
                            <h4>Quality Foods</h4>
                            <p>
                                we are dedicated to delivering an exceptional dining experience through our commitment to sourcing and preparing the finest ingredients. Our philosophy is simple: quality over quantity
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 choose-us-style-one">
                        <div class="item animate" data-animate="fadeInUp" data-delay="200ms">
                            <img src="13/assets/img/icon/14.png" alt="Icon">
                            <h4>Fast Delivery</h4>
                            <p>
                                At 1303, we understand that great food should be enjoyed wherever you are, and that's why we offer Fast Delivery services. Whether you're craving a quick lunch at the office or a cozy dinner at home, our Fast Delivery ensures that your favorite dishes arrive hot and fresh, right at your doorstep.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 choose-us-style-one">
                        <div class="item animate" data-animate="fadeInUp" data-delay="400ms">
                            <img src="13/assets/img/icon/15.png" alt="Icon">
                            <h4>Delicious Recipes</h4>
                            <p>
                                At 1303, every dish is crafted with passion and precision, showcasing our collection of Delicious Recipes. Our chefs blend traditional flavors with modern techniques to create meals that are not only satisfying but also unforgettable
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->

    <!-- Start Opening Hours
   ============================================= -->
    <div class="opening-hours-area default-padding overflow-hidden">
        <div class="container">
            <div class="opening-hour-items">
                <h2 class="text-fixed">13_03</h2>
                <div class="shape">
                    <img src="13/assets/img/shape/4.png" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="opening-hours-thumb video-bg-live">
                            <img src="13/assets/img/banner/7.jpg" alt="Image Not Found">
                            <div class="player" data-property="{videoURL:'0Fs-4GiNxQ8',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:654, opacity:1, quality:'default'}"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="opening-hours-info animate" data-animate="fadeInLeft">
                            <h3>Opening Hours</h3>
                            <p>
                               Check out our daily operation time
                            </p>
                            <ul class="opening-hours-table">
                                <li>
                                    <h6>Sunday to Tuesday:</h6> <span>10:00 - 09:00</span>
                                </li>
                                <li>
                                    <h6>Wednesday to Thursday:</h6> <span>11:30 - 10:30</span>
                                </li>
                                <li>
                                    <h6>Friday & Saturday:</h6> <span>10:30  - 12:00</span>
                                </li>
                            </ul>
                            <div class="call-to-action">
                                <div class="icon">
                                    <img src="13/assets/img/icon/6.png" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <p>Call Anytime</p>
                                    <h4><a href="#">0800000000</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Opening Hours -->

    <!-- Start Chef Area
    ============================================= -->
    <div class="chef-area default-padding bg-gray text-center">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">MASTER CHEFS</h4>
                        <h2 class="title">Meet Our Special Chefs</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse($chef as $chefs)
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6">
                    <div class="chef-style-one">
                        <div class="chef-thumb">
                            <img src="{{url($chefs['image'])}}" alt="Image Not Found">
                            <div class="info">
                                <h4><a href="#">{{$chefs['name']}}</a></h4>
                                <span>{{$chefs['position']}}</span>
                            </div>
{{--                            <ul class="social">--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fab fa-facebook-f"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fab fa-youtube"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                @empty
                    <p class="text-center" style="font: 24px cormorant, serif">No Chef Available </p>
                @endforelse

            </div>
        </div>
    </div>
    <!-- End Chef Area -->

    <br/>
<br/>
@endsection
