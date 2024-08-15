@extends('layouts.header1')
@section('tittle', 'All-Menu')
@section('content')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--        <script>--}}
{{--            window.onload = function() {--}}
{{--                setTimeout(function() {--}}
{{--                    --}}{{--var username = @json(Auth::user()->username);--}}
{{--                    var message = "Dear Ekosians, please note a minimum of 24 hours is required for all categories except the Ready to Go category. Cakes under the Ready to go Category can be available between 1-6 hours after order is placed";--}}

{{--                    Swal.fire({--}}
{{--                        title: 'Note:',--}}
{{--                        html: message,--}}
{{--                        icon: 'info'--}}
{{--                    });--}}
{{--                }, 1000);--}}
{{--            };--}}
{{--        </script>--}}
    <!-- Breadcrumb Section Start -->

    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(13/assets/img/shape/5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Special Food</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li>Menu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
{{--    <marquee><b>--}}
{{--            Dear Ekosians, please note a minimum of 24 hours is required for all categories except the Ready to Go category. Cakes under the Ready to go Category can be available between 1-6 hours after order is placed--}}
{{--        </b></marquee>--}}
    <!-- Product Section Start -->
    <!-- Start Shop
      ============================================= -->
    <div class="validtheme-shop-area default-padding">
        <div class="container">
            <div class="shop-listing-contentes">

                <div class="row item-flex center">

                    <div class="col-lg-7">
                        <div class="content">
                            <!-- Tab Nav -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="grid-tab-control" data-bs-toggle="tab" data-bs-target="#grid-tab" type="button" role="tab" aria-controls="grid-tab" aria-selected="true">
                                        <i class="fas fa-th-large"></i>
                                    </button>

                                    <button class="nav-link" id="list-tab-control" data-bs-toggle="tab" data-bs-target="#list-tab" type="button" role="tab" aria-controls="list-tab" aria-selected="false">
                                        <i class="fas fa-th-list"></i>
                                    </button>
                                </div>
                            </nav>
                            <!-- End Tab Nav -->
                        </div>
                    </div>

                    <div class="col-lg-5 text-right">


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Tab Content -->
{{--                    <div class="tab-content tab-content-info text-center" id="shop-tabContent">--}}

                        <!-- Strt Product Grid Vies -->
                        <div class="tab-pane fade show active" id="grid-tab" role="tabpanel" aria-labelledby="grid-tab-control">
                            <ul class="vt-products columns-4">
                                @forelse($product as $pro)
                                <!-- Single product -->
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="{{$pro['image']}}" alt="Product">
                                            </a>
{{--                                            <div class="shop-action">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="wishlist">--}}
{{--                                                        <a href="#"><span>Add to wishlist</span></a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="quick-view">--}}
{{--                                                        <a href="#"><span>Quick view</span></a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                @foreach($pro->categories as $category)
                                                    <a href="#"> {{ $category->name }}</a>@if(!$loop->last), @endif
                                                @endforeach
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">{{$pro->name}}</a>
                                            </h4>
                                            <div class="price">
                                                <span>₦{{number_format(intval($pro['price'] *1))}}</span>
                                            </div>
                                            <a href="{{route('fooddetail', $pro['id'])}}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single product -->
                                @empty
                                    <p class="text-center cormorant-upright-bold">No Product Available On Store</p>
                                @endforelse

                            </ul>
                        </div>
                        <!-- End Product Grid Vies -->




{{--                    </div>--}}
                    <!-- End Tab Content -->



                    <!-- Pgination -->
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                           {{$product->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop -->



    <!-- Product Section End -->
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
                                                                <option value="manual">Chose an option</option>
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
                                                            <div class="cart-btn">
                                                                <div class="add-to_cart">
                                                                    <a class="btn btn-dark btn-hover-primary" href="/cakedetail/${response.id}">More Option</a>
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
                    },
                    error: function(xhr, status, error){
                        console.error(error);
                        modalBody.html('<p>Error loading product details.</p>');
                    }
                });
            });
        });
    </script>
@endsection
