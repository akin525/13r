@extends('layouts.header')
@section('tittle', 'Home')
@section('content')
    <style>
        .head{
            color: #000000;
            /*margin: 0;*/
            font-family: "Great Vibes", cursive;
            font-size: 50px;
            line-height: .8em;
            /*color: #c19d56;*/
            font-style: normal;
            margin-bottom: 15px;
        }
        .sam{
            font-family: Montserrat, sans-serif;
            font-style: normal;
            font-weight: 600;
            text-transform: uppercase; vertical-align: baseline;  font-size: 30px; line-height: 1.18em;
            letter-spacing: .1em;
        }
        .cormorant-upright-light {
            font-family: "Cormorant Upright", serif;
            font-weight: 300;
            font-style: normal;
        }

        .cormorant-upright-regular {
            font-family: "Cormorant Upright", serif;
            font-weight: 400;
            font-style: normal;
        }

        .cormorant-upright-medium {
            font-family: "Cormorant Upright", serif;
            font-weight: 500;
            font-style: normal;
        }

        .cormorant-upright-semibold {
            font-family: "Cormorant Upright", serif;
            font-weight: 600;
            font-style: normal;
        }

        .merriweather-bold {
            font-family: "Cormorant Upright", serif;
            font-weight: 700;
            font-style: normal;
        }

    </style>





    <!-- Shop Banner Section Start -->
    <div class="shop-banner shop-banner_bg" data-bg-image="{{asset('pp.jpeg')}}">
        <div class="container">
            <div class="row align-items-center">
{{--                <div class="col-lg-4 col-md-6 col-sm-6 col-8 order-lg-1 order-md-2 order-2">--}}
{{--                    <div class="shop-banner_one">--}}
{{--                        <img src="assets/images/banner/home9-banner1.jpg" alt="Banner-Image">--}}
{{--                        <span class="shop-banner_one__border"></span>--}}
{{--                        <ul class="shop-banner_social">--}}
{{--                            <li><a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">Facebook</a></li>--}}
{{--                            <li><a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">Twitter</a></li>--}}
{{--                            <li><a href="https://www.pinterest.com/" target="_blank" rel="noopener noreferrer">Pinterest</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class=" order-lg-2 order-1">
                    <div class="shop-banner_content">
                        <!-- Section Title Strat -->
                        <div class="section-title-09 justify-content-center text-center align-items-center">
                            <h2 class=" text-white"><b>THE BURGUNDY MASTERCLASS</b></h2>
                            <h4 class=" text-white mb-0">A CULINARY EXPERIENCE LIKE NO OTHER</h4>
                            <a href="https://shop.sammighty.com.ng/carts" class="section-title-09__btn justify-content-center text-white">Shop Now</a>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
{{--                <div class="col-lg-4 col-md-6 col-sm-6 col-4 order-lg-3 order-md-3 order-3">--}}
{{--                    <div class="shop-banner_two">--}}
{{--                        <img src="assets/images/banner/home9-banner2.png" alt="Banner-Image">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Shop Banner Section End -->

    <!-- OurMenu Section Start -->
    <div class="menu-banner" data-bg-image="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="menu-banner_image">
                        <a href="#"><img src="{{asset('fd3.jpg')}}" alt="Banner-Image"></a>
                        <a class="banner-add-btn" href="#"><i class="lastudioicon lastudioicon-i-add-2"></i></a>
                        <span class="banner-name-style">1303</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-banner_content">
                        <!-- Section Title Strat -->
                        <div class="section-title-09 justify-content-start text-start align-items-start">
                            <span class="section-title-09__subtitle">Our Menu</span>
                            <h1 class="section-title-09__title ">RESERVATION</h1>
                            <p class="section-title-09__text ">The week gives you a chance to spend one-on-one time
                                with us where we'll come together to cook in our kitchen and
                                immerse ourselves in the rich culture of Nigeria home cooking.  </p>
                            <a href="#" class="section-title-09__btn justify-content-center">Discover Now</a>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Section End -->



    <!-- Gift Banner Section Start -->
    <div class="gift-banner section-padding-03" data-bg-image="assets/images/bg/home-9-bg3.jpg">
        <div class="container h-100">
            <div class="row justify-content-end align-items-center h-100">
                <div class="col-sm-8 col-md-7 col-lg-6">
                    <!-- Section Title Strat -->
                    <div class="section-title-09 justify-content-start text-center align-items-center">
                        <span class="section-title-09__subtitle">1303</span>
                        <h1 class="section-title-09__title text-dark">STAY</h1>
                        <p class="section-title-09__text text-dark">Need somewhere to stay while you’re in Home?
                            Our foot on the ground is a short walk from our workshop. Once the original home of The Cook’s workshop,
                            it is a beautiful, light-filled two bedroom flat decorated in our workshop style.</p>
                        <div class="gift-banner_info">
                            <div class="gift-banner_offer">
                                <div class="gift-banner_offer__thumb mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" viewBox="0 0 50 50">
                                        <path stroke="currentColor" stroke-width="2" d="M16.666 18.333H20h-3.334zM30 31.667h3.333H30zm3.333-15L16.667 33.333l16.666-16.666zM22.67 2.633L18.906 6.39a3.293 3.293 0 0 1-2.326.967h-5.927A3.293 3.293 0 0 0 7.36 10.65v5.927a3.294 3.294 0 0 1-.967 2.326l-3.76 3.77a3.293 3.293 0 0 0 0 4.657L6.4 31.093a3.29 3.29 0 0 1 .963 2.327v5.927a3.292 3.292 0 0 0 3.293 3.293h5.927c.873 0 1.71.347 2.327.967l3.767 3.763a3.294 3.294 0 0 0 4.656 0l3.764-3.767a3.293 3.293 0 0 1 2.326-.963h5.927a3.293 3.293 0 0 0 3.293-3.293V33.42c0-.873.347-1.71.967-2.327l3.763-3.766a3.293 3.293 0 0 0 0-4.657l-3.767-3.763a3.294 3.294 0 0 1-.963-2.327v-5.927A3.293 3.293 0 0 0 39.35 7.36h-5.927a3.293 3.293 0 0 1-2.327-.967l-3.77-3.76a3.293 3.293 0 0 0-4.656 0v0z"></path>
                                    </svg>
                                </div>
                                <span class="gift-banner_offer__text">Discount 50%</span>
                            </div>
                            <div class="gift-banner_custom">
                                <div class="gift-banner_custom__thumb mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" viewBox="0 0 50 50">
                                        <path fill="currentColor" d="M24.99 4.98c-1.924 0-3.197 1.352-3.92 2.567-.734 1.233-1.124 2.676-1.177 3.606-.102 1.85.175 3.47 1.098 4.64.96 1.22 2.4 1.687 4 1.687 1.622 0 3.057-.523 4.012-1.742.923-1.18 1.22-2.788 1.1-4.598-.057-.88-.452-2.315-1.185-3.553-.717-1.212-1.99-2.607-3.925-2.607h-.002zm-2.6 6.31c.026-.507.29-1.56.828-2.465.55-.92 1.163-1.345 1.775-1.345.598 0 1.213.43 1.775 1.377.543.925.813 1.983.843 2.446.097 1.5-.185 2.394-.575 2.894-.358.456-.963.783-2.045.783-1.125 0-1.705-.313-2.035-.735-.375-.475-.655-1.36-.568-2.955h.003zM12.5 20a5 5 0 0 0-5 5v15H6.25a1.25 1.25 0 0 0 0 2.5h37.5a1.25 1.25 0 0 0 0-2.5H42.5V25a5 5 0 0 0-5-5h-25zM40 40H10v-9.705l3.863 3.45a5.002 5.002 0 0 0 7.07-.405l2.2-2.475a2.502 2.502 0 0 1 3.737 0l2.197 2.475a5 5 0 0 0 7.073.407L40 30.296V40zm0-13.06l-5.528 4.942a2.5 2.5 0 0 1-3.535-.202l-2.2-2.475a5 5 0 0 0-7.474 0l-2.2 2.475a2.5 2.5 0 0 1-3.535.203L10 26.94V25a2.5 2.5 0 0 1 2.5-2.5h25A2.5 2.5 0 0 1 40 25v1.94z"></path>
                                    </svg>
                                </div>
                                <span class="gift-banner_custom__text">Custom Food</span>
                            </div>
                        </div>
                        <a href="shop.html" class="section-title-09__btn btn_black justify-content-center">Order Now</a>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Gift Banner Section End -->



    <!-- Portfolio Banner Section Start -->
    <div class="portfolio-banner section-padding-03" data-bg-image="">
        <div class="container">
            <div class="row mb-n60">
                <div class="col-md-5 mb-60">
                    <!-- Section Title Strat -->
                    <div class="section-title-09">
                        <span class="section-title-09__subtitle mb-3">OUR MENU</span>
                        <h1 class="section-title-09__title mb-0">Bring out the best taste</h1>
                        <a href="" class="section-title-09__btn justify-content-center text-black">Check it now</a>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="col-md-7 mb-60 mt-8 mt-md-0">
                    <div class="portfolio-banner_image">
                        <a class="portfolio-banner_image__thumb" href="#"><img src="{{asset('fd4.jpg')}}" alt="Banner-Image"></a>
                        <a class="banner-add-btn" href="#"><i class="lastudioicon lastudioicon-i-add-2"></i></a>
                        <span class="banner-name-style-2">1303</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Banner Section End -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.labtn-icon-quickview').click(function(e){
                e.preventDefault();
                var productId = $(this).data('product-id');
                var modalBody = $('#quickViewModal'+productId).find('.modal-body');

                // Make AJAX request to fetch product details
                $.ajax({
                    url: '/product/' + productId, // Replace this with your API endpoint to fetch product details
                    method: 'GET',
                    success: function(response){
                        // Populate modal with product details
                        modalBody.html(`<div class="row">
                                        <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                                            <div class="product-details-img d-flex overflow-hidden flex-row">
                                                <div class="single-product-vertical-tab swiper-container order-2">

                                                    <div class="swiper-wrapper">
                                                        <a class="swiper-slide h-auto" href="#/">
                                                            <img class="w-100" src=${response.image} alt="Product">
                                                        </a>
                                                    </div>

                                                    <!-- Next Previous Button Start -->
                                                    <div class="swiper-button-vertical-next swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                                                    <div class="swiper-button-vertical-prev swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>

                                                </div>
                                                <div class="product-thumb-vertical overflow-hidden swiper-container order-1">

                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src=${response.image} alt=${response.image}/>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="product-summery position-relative">
                                                <div class="product-head mb-3">
                                                    <span class="product-head-price">₦${response.price}</span>

                                                </div>
                                                <p class="desc-content">${response.description}</p>
                                                <div class="product-color mb-2">
                                                    <label for="colorBy">Color</label>
                                                    <div class="select-wrapper">
                                                        <select name="color" id="colorBy">
                                                            <option value="manual">Choose an option</option>
                                                            <option value="blue">Blue</option>
                                                            <option value="red">Red</option>
                                                            <option value="green">Green</option>
                                                            <option value="black">Black</option>
                                                            <option value="yellow">Yellow</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <ul class="product-cta">
                                                    <li>
                                                        <div class="quantity">
                                                            <div class="cart-plus-minus"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-btn">
                                                            <div class="add-to_cart">
                                                                <a class="btn btn-dark btn-hover-primary" href="/cakedetail/${response.id}" >More Option</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="actions">
                                                            <a href="#" title="Compare" class="action compare"><i class="lastudioicon-heart-2"></i></a>
                                                            <a href="#" title="Wishlist" class="action wishlist"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="product-meta">
                                                    <li class="product-meta-wrapper">
                                                        <span class="product-meta-detail">${response.name}</span>
                                                    </li>
                                                    <li class="product-meta-wrapper">
                                                        <span class="product-meta-name">category:</span>
                                                        <span class="product-meta-detail">
                                            <a href="#">${response.category}, </a>
                                            <a href="#">New</a>
                                        </span>
                                                    </li>
                                                    <li class="product-meta-wrapper">
                                                        <span class="product-meta-name">Tags:</span>
                                                        <span class="product-meta-detail">
                                            <a href="#">Cake 1</a>
                                        </span>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>`
                        );
                        // Call functions to handle dynamic behavior
                        updateFlavourOptions();
                        handleTopperVisibility();
                        handleEkoCakesCard();
                    },
                    error: function(xhr, status, error){
                        console.error(error);
                        modalBody.html('<p>Error loading product details.</p>');
                    }
                });
            });

            // Function to update flavor options based on selected layers
            function updateFlavourOptions() {
                const selectedLayers = parseInt($('#layersBy').val());

                // Disable all options first
                $('#flavourBy option').prop('disabled', true);

                // Enable options based on selected layers
                if (selectedLayers === 1) {
                    $('#flavourBy option[value="vanilla"]').prop('disabled', false);
                    $('#flavourBy option[value="chocolate"]').prop('disabled', false);
                } else if (selectedLayers === 2) {
                    $('#flavourBy option[value="vanilla_chocolate"]').prop('disabled', false);
                    $('#flavourBy option[value="vetuer"]').prop('disabled', false);
                } else if (selectedLayers === 3) {
                    $('#flavourBy option[value="red_vetuer_chocolate"]').prop('disabled', false);
                    $('#flavourBy option[value="vanilla_red_vetuer"]').prop('disabled', false);
                }
            }

            // Function to handle visibility of topper text input based on selected topper option
            function handleTopperVisibility() {
                const selectedTopper = $('#topperBy').val();
                if (selectedTopper === 'select') {
                    $('#topperTextSection').show();
                } else {
                    $('#topperTextSection').hide();
                    $('#topperText').val(''); // Clear the text input when not visible
                }
            }

            // Function to handle visibility of Eko Cakes card message input based on selected option
            function handleEkoCakesCard() {
                const selectedOption = $('#ekoCakesCard').val();
                if (selectedOption === 'yes') {
                    $('#ekoCakesMessageSection').show();
                } else {
                    $('#ekoCakesMessageSection').hide();
                    $('#ekoCakesMessage').val(''); // Clear the text input when not visible
                }
            }

            // Event listeners to call the functions when the user makes selections
            $('#layersBy').on('change', function() {
                updateFlavourOptions();
            });
            $('#topperBy').on('change', function() {
                handleTopperVisibility();
            });
            $('#ekoCakesCard').on('change', function() {
                handleEkoCakesCard();
            });
        });
    </script>
@endsection
