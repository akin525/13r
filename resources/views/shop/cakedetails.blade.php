@extends('layouts.header1')
@section('tittle')
    @if($product != null)
    {{$product->name}}
    @endif
@endsection
@section('content')
    <style>
        .size-selector {
            display: flex;
            align-items: center;
        }

        .size-selector label {
            margin-right: 10px;
        }

        .size-options {
            display: flex;
        }

        .size-options input[type="radio"] {
            display: none;
        }

        .size-options label {
            display: block;
            border: 1px solid #ccc;
            padding: 5px 10px;
            margin-right: 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .size-options input[type="radio"]:checked + label {
            background-color: #ccc;
        }


        .flavor-selector {
            display: flex;
            align-items: center;
        }

        .flavor-selector label {
            margin-right: 10px;
        }

        .flavor-options {
            display: flex;
        }

        .flavor-options input[type="radio"] {
            display: none;
        }

        .flavor-options label {
            display: inline-block;
            margin-right: 5px;
            cursor: pointer;
        }

        .flavor-options label img {
            width: 50px; /* Adjust image width as needed */
            height: 50px; /* Adjust image height as needed */
            border-radius: 50%; /* Rounded corners for circular images */
        }

        .flavor-options input[type="radio"]:checked + label {
            border: 2px solid #000; /* Add border when selected */
        }

    </style>
    <div class="loading-overlay" id="loadingSpinner" style="display: none;">
        <div class="loading-spinner"></div>
    </div>
    <!-- Breadcrumb Section Start -->

    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url({{asset('13/assets/img/shape/5.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if($product != null && $product->categories->count() > 0)
                        <li class="cormorant-upright-regular" style="font-family: Holipop, sans-serif; text-transform: uppercase">
                            Categories:
                            @foreach($product->categories as $category)
                                <span>{{ $category->name }}</span>@if(!$loop->last), @endif
                            @endforeach
                        </li>
                    @endif
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li> @if($product != null)
                                {{$product->name}}
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Section End -->

    <div class="validtheme-shop-single-area default-padding">
        <div class="container">
            <div class="product-details">
                <div class="row">
    <!-- Single Product Section Start -->
    @isset($product)
                        <div class="col-lg-6">
                            <div class="product-thumb">
                                <div id="timeline-carousel" class="carousel slide" data-bs-ride="carousel">

                                    <div class="carousel-inner item-box">
                                        <div class="carousel-item active product-item">
                                            <a href="{{url($product->image)}}" class="item popup-gallery">
                                                <img src="{{url($product->image)}}" alt="Thumb">
                                            </a>
                                            <span class="onsale theme">-16%</span>
                                        </div>

                                    </div>

                                    <!-- Carousel Indicators -->
                                    <div class="carousel-indicators">
                                        <div class="product-gallery-carousel swiper">
                                            <!-- Additional required wrapper -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="item active" data-bs-target="#timeline-carousel" data-bs-slide-to="0" aria-current="true">
                                                        <img src="{{url($product->image)}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- End Carousel Content -->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-product-contents">
                                <div class="summary-top-box">
{{--                                    <div class="product-tags">--}}
{{--                                        <a href="#">Cheese</a>--}}
{{--                                        <a href="#">Pizza</a>--}}
{{--                                    </div>--}}
                                    <div class="review-count">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span>(8 Review)</span>
                                    </div>
                                </div>
                                <h2 class="product-title">
                                    {{$product->name}}
                                </h2>
                                <div class="price">
{{--                                    <span><del>$8.00</del></span>--}}
                                    <span>{{$product->price}}</span>
                                </div>
                                <div class="product-stock validthemes-in-stock">
                                    <span>In Stock</span>
                                </div>
                                <p>
                                    {!! $product->description !!}
                                </p>

                                @php
                                    // Initialize arrays to hold attribute values and attributes
                                    $attributeValues = [];
                                    $attributesOnly = [];
                                    $prices = []; // To hold prices for each attribute value

                                    // Check if variations exist and is not null
                                    if ($product->variations) {
                                        if ($product->variations->isNotEmpty()) {
                                            foreach ($product->variations as $variation) {
                                                foreach ($variation->options as $option) {
                                                    $attributeValues[$option->name][] = $option->value;
                                                    $prices[$option->value] = $variation->price; // Set the price for the option
                                                }
                                            }
                                        }
                                    }

                                    // Check if attributes only (without variations) exist and is not null
                                    if ($product->attributes) {
                                        if ($product->attributes->isNotEmpty()) {
                                            foreach ($product->attributes as $attribute) {
                                                $attributesOnly[$attribute->name][] = $attribute->value;
                                            }
                                        }
                                    }
                                @endphp

                                @if(!empty($attributeValues) || !empty($attributesOnly))
                                    @foreach($attributeValues as $attributeName => $values)
                                        @php
                                            $uniqueValues = array_unique($values);
                                        @endphp
                                        <div class="product-attribute mb-5">
                                            <label for="{{ Str::slug($attributeName) }}" class="cormorant-upright-bold">{{ ucfirst($attributeName) }}</label>
                                            <div class="select-wrapper">
                                                <select name="attributes[{{ $attributeName }}]" id="{{ Str::slug($attributeName) }}" class="custom-select cormorant-upright-light" required>
                                                    <option value="" data-price="0">Choose an option</option>
                                                    @foreach ($uniqueValues as $value)
                                                        <option value="{{ $value }}" data-price="{{ $prices[$value] ?? 0 }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($attributesOnly as $attributeName => $values)
                                        @php
                                            $uniqueValues = array_unique($values);
                                        @endphp
                                        <div class="product-attribute mb-5">
                                            <label for="{{ Str::slug($attributeName) }}" class="cormorant-upright-bold">{{ ucfirst($attributeName) }}</label>
                                            <div class="select-wrapper">
                                                <select name="attributes[{{ $attributeName }}]" id="{{ Str::slug($attributeName) }}" class="custom-select cormorant-upright-light" required>
                                                    <option value="" data-price="0">Choose an option</option>
                                                    @foreach ($uniqueValues as $value)
                                                        <option value="{{ $value }}" data-price="{{ $prices[$value] ?? 0 }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                @else

                                @endif
                                <script>
                                    $(document).ready(function() {
                                        // Initialize base price
                                        let basePrice = parseFloat($('#productBasePrice').val()) || 0;

                                        function updateTotalAmount() {
                                            // Start with the base price
                                            let totalAmount = basePrice;
                                            console.log("Base price: " + totalAmount);

                                            // Iterate over each select element to add the price of selected options
                                            $('select').each(function() {
                                                var selectedOption = $(this).find('option:selected');
                                                var price = parseFloat(selectedOption.data('price')) || 0; // Get the price from data attribute
                                                console.log("Selected option: " + selectedOption.text() + " Price: " + price);

                                                // Only add price if it's not the default option
                                                if (selectedOption.val()) {
                                                    totalAmount += price; // Add to the total amount
                                                }
                                            });

                                            $('#totalAmount').val(totalAmount.toFixed(2)); // Update the total amount display
                                            console.log("Total amount: " + totalAmount);
                                        }

                                        // Bind the updateTotalAmount function to the change event of the select elements
                                        $('select').on('change', updateTotalAmount);

                                        // Initial update
                                        updateTotalAmount();
                                    });
                                </script>

                                <div class="product-purchase-list">
                                    <input type="number" id="quantity" step="1" name="quantity" min="0" placeholder="0">
                                    <a href="#" class="btn secondary btn-theme btn-sm animation">
                                        <i class="fas fa-shopping-cart"></i>
                                        Add to cart
                                    </a>
                                    <div class="shop-action">
                                        <ul>
                                            <li class="wishlist">
                                                <a href="#"><span>Add to wishlist</span></a>
                                            </li>
                                            <li class="compare">
                                                <a href="#"><span>Compare</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
{{--                                <div class="product-estimate-delivary">--}}
{{--                                    <i class="fas fa-box-open"></i>--}}
{{--                                    <strong> 2-day Delivery</strong>--}}
{{--                                    <span>Speedy and reliable parcel delivery!</span>--}}
{{--                                </div>--}}
                                <div class="product-meta">
                                <span class="sku">
                                    <strong>SKU:</strong> BE45VGRT
                                </span>
                                    <span class="posted-in">
                                    <strong>Category:</strong>
                                    @foreach($product->categories as $category)
                                    <a href="#">{{ $category->name }}</a> @if(!$loop->last), @endif
                                        @endforeach
                                </span>
                                </div>
                            </div>
                        </div>

    @endisset
    <!-- Single Product Section End -->

                </div>
            </div>

            <!-- Product Bottom Info  -->
            <div class="single-product-bottom-info">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Tab Nav -->
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="description-tab-control" data-bs-toggle="tab" data-bs-target="#description-tab" type="button" role="tab" aria-controls="description-tab" aria-selected="true">
                                Description
                            </button>

                            <button class="nav-link" id="information-tab-control" data-bs-toggle="tab" data-bs-target="#information-tab" type="button" role="tab" aria-controls="information-tab" aria-selected="false">
                                Additional Information
                            </button>

{{--                            <button class="nav-link" id="review-tab-control" data-bs-toggle="tab" data-bs-target="#review-tab" type="button" role="tab" aria-controls="review-tab" aria-selected="false">--}}
{{--                                Review--}}
{{--                            </button>--}}

                        </div>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info" id="myTabContent">

                            <!-- Tab Single -->
                            <div class="tab-pane fade show active" id="description-tab" role="tabpanel" aria-labelledby="description-tab-control">
                                <p>
                                    {!! $product->description !!}
                                </p>

                            </div>
                            <!-- End Single -->

                            <!-- Tab Single -->
                            <div class="tab-pane fade" id="information-tab" role="tabpanel" aria-labelledby="information-tab-control">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Weight</td>
                                            <td>240 Ton</td>
                                        </tr>
                                        <tr>
                                            <td>Dimensions</td>
                                            <td>20 × 30 × 40 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Colors</td>
                                            <td>Black, Blue, Green</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End Tab Single -->

                            <!-- Tab Single -->
                            <div class="tab-pane fade" id="review-tab" role="tabpanel" aria-labelledby="review-tab-control">
                                <h4>1 review for “Fresh Red Seedless”</h4>
                                <div class="review-items">
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="13/assets/img/team/1.jpg" alt="Thumb">
                                        </div>
                                        <div class="info">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <div class="review-date">April 8, 2021</div>
                                            <div class="review-authro"><h5>Aleesha Brown
                                                </h5></div>
                                            <p>
                                                Highly recommended. Will purchase more in future.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="assets/img/team/2.jpg" alt="Thumb">
                                        </div>
                                        <div class="info">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <div class="review-date">April 8, 2021</div>
                                            <div class="review-authro"><h5>Sarah Albert</h5></div>
                                            <p>
                                                Great product quality!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <h4>Add a review</h4>
                                    <div class="rating-select">
                                        <div class="stars">
                                            <span>
                                                <a class="star-1" href="#"><i class="fas fa-star"></i></a>
                                                <a class="star-2" href="#"><i class="fas fa-star"></i></a>
                                                <a class="star-3" href="#"><i class="fas fa-star"></i></a>
                                                <a class="star-4" href="#"><i class="fas fa-star"></i></a>
                                                <a class="star-5" href="#"><i class="fas fa-star"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <form action="#" class="contact-form">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group comments">
                                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                    <span class="alert-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                                    <span class="alert-error"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" name="submit" id="submit">
                                                    Post Review
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Alert Message -->
                                        <div class="col-md-12 alert-notification">
                                            <div id="message" class="alert-msg"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Tab Single -->

                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
            <!-- End Product Bottom Info  -->

            <!-- Related Product  -->
            <div class="related-products carousel-shadow">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Related Products</h3>
                        <div class="vt-products text-center related-product-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @forelse($product1 as $pro)

                                <!-- Single product -->
                                <div class="swiper-slide">
                                    <div class="product">
                                        <div class="product-contents">
                                            <div class="product-image">
                                                <a href="{{route('fooddetail', $pro['id'])}}">
                                                    <img src="{{url($pro['image'])}}" alt="Product">
                                                </a>
{{--                                                <div class="shop-action">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="wishlist">--}}
{{--                                                            <a href="#"><span>Add to wishlist</span></a>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="quick-view">--}}
{{--                                                            <a href="#"><span>Quick view</span></a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="product-caption">

                                                <h4 class="product-title">
                                                    <a href="{{route('fooddetail', $pro['id'])}}">{{$pro['name']}}</a>
                                                </h4>
                                                <div class="price">
                                                    <span>₦{{number_format(intval($pro['price'] *1))}}</span>
                                                </div>
                                                <a href="{{route('fooddetail', $pro['id'])}}" class="cart-btn"><i class="fas fa-shopping-bag"></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @empty
                                    <h2 class="text-center">Product Not found</h2>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Related Product  -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#flavorSelect').change(function() {
                var sizeValue = $('#layersBy1').val(); // Get the selected size value
                var layersValue = $('#layerSelect').val(); // Get the selected layers value
                var flavorValue = $(this).val(); // Get the selected flavor value

                // Show the loading spinner
                // $('#loadingSpinner').show();

                // Send the selected values to the '/getsize' route
                $.ajax({
                    url: '{{ url('getsize') }}',
                    type: 'GET',
                    data: {
                        size: sizeValue,
                        layers: layersValue,
                        flavor: flavorValue
                    },
                    success: function(response) {
                        // $('#loadingSpinner').hide();

                        // Handle the successful response
                        var sizePrice = parseInt(response); // Get the selected layer price
                        // var defaultAmount = parseInt(document.getElementById('defaultAmount').value);
                        var defaultAmount = 0;
                        var totalAmount = defaultAmount + sizePrice; // Calculate the total amount

                        console.log(totalAmount);
                        console.log(defaultAmount);
                        console.log(sizePrice);
                        document.getElementById('totalAmount').value = totalAmount; // Update the total amount display

                    },
                    error: function(xhr) {
                        // Handle any errors
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#layersBy1').change(function() {
                var sizeValue = $(this).val(); // Get the selected size value
                var layersValue = $('#layerSelect').val(); // Get the selected layers value
                var flavorValue = $('#flavorSelect').val(); // Get the selected flavor value

                // Show the loading spinner
                // $('#loadingSpinner').show();

                // Send the selected values to the '/getsize' route
                $.ajax({
                    url: '{{ url('getsize') }}',
                    type: 'GET',
                    data: {
                        size: sizeValue,
                        layers: layersValue,
                        flavor: flavorValue
                    },
                    success: function(response) {
                        // $('#loadingSpinner').hide();

                        // Handle the successful response
                        var sizePrice = parseInt(response); // Get the selected layer price
                        // var defaultAmount = parseInt(document.getElementById('defaultAmount').value);
                        var defaultAmount = 0;
                        var totalAmount = defaultAmount + sizePrice; // Calculate the total amount

                        console.log(totalAmount);
                        console.log(defaultAmount);
                        console.log(sizePrice);
                        document.getElementById('totalAmount').value = totalAmount; // Update the total amount display

                    },
                    error: function(xhr) {
                        // Handle any errors
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#layerSelect').change(function() {
                var sizeValue = $('#layersBy1').val(); // Get the selected size value
                var layersValue = $(this).val(); // Get the selected layers value
                var flavorValue = $('#flavorSelect').val(); // Get the selected flavor value

                // Show the loading spinner
                // $('#loadingSpinner').show();

                // Send the selected values to the '/getsize' route
                $.ajax({
                    url: '{{ url('getsize') }}',
                    type: 'GET',
                    data: {
                        size: sizeValue,
                        layers: layersValue,
                        flavor: flavorValue
                    },
                    success: function(response) {
                        // $('#loadingSpinner').hide();

                        // Handle the successful response
                        var sizePrice = parseInt(response); // Get the selected layer price
                        // var defaultAmount = parseInt(document.getElementById('defaultAmount').value);
                        var defaultAmount = 0;
                        var totalAmount = defaultAmount + sizePrice; // Calculate the total amount

                        console.log(totalAmount);
                        console.log(defaultAmount);
                        console.log(sizePrice);
                        document.getElementById('totalAmount').value = totalAmount; // Update the total amount display

                    },
                    error: function(xhr) {
                        // Handle any errors
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
    <script>
        // topperBy


        document.getElementById('topperBy').addEventListener('change', function() {
            var toppernumber = parseInt(this.value); // Get the selected layer price
            var defaultAmount = parseInt(document.getElementById('totalAmount').value);
            var totalAmount = defaultAmount + toppernumber; // Calculate the total amount

            var previousLayerPrice = parseInt(document.getElementById('tPrice').value); // Get previous layer price
            totalAmount -= previousLayerPrice; // Subtract previous layer price from total amount
            document.getElementById('tPrice').value = toppernumber; // Store current layer price for next calculation


            document.getElementById('totalAmount').value = totalAmount; // Update the total amount display
        });

    </script>
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('#layerSelect').change(function() {--}}
{{--                var selectedValue = $(this).val();--}}
{{--                // Show the loading spinner--}}
{{--                $('#loadingSpinner').show();--}}
{{--                // Send the selected value to the '/getOptions' route--}}
{{--                $.ajax({--}}
{{--                    url: '{{ url('getlayer') }}/' + selectedValue,--}}
{{--                    type: 'GET',--}}
{{--                    success: function(response) {--}}
{{--                        $('#loadingSpinner').hide();--}}

{{--                        // Handle the successful response--}}
{{--                        var layerPrice = parseInt(response); // Get the selected layer price--}}
{{--                        var defaultAmount = parseInt(document.getElementById('totalAmount').value);--}}
{{--                        var totalAmount = defaultAmount + layerPrice; // Calculate the total amount--}}

{{--                        console.log(totalAmount);--}}
{{--                        console.log(defaultAmount);--}}
{{--                        console.log(layerPrice);--}}
{{--                        document.getElementById('totalAmount').value = totalAmount; // Update the total amount display--}}

{{--                    },--}}
{{--                    error: function(xhr) {--}}
{{--                        // Handle any errors--}}
{{--                        console.log(xhr.responseText);--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}



    <script>
            $(document).ready(function() {


                // Send the AJAX request
                $('#postcart').submit(function(e) {
                    e.preventDefault(); // Prevent the form from submitting traditionally

                    // Get the form data
                    var formData = $(this).serialize();

                    $('#loadingSpinner').show();

                            $.ajax({
                                url: "{{ route('addcart1') }}",
                                type: 'POST',
                                data: formData,
                                success: function(response) {
                                    // Handle the success response here
                                    $('#loadingSpinner').hide();

                                    console.log(response);
                                    // Update the page or perform any other actions based on the response

                                    if (response.status == 'success') {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            text: response.message
                                        }).then(() => {
                                            location.reload(); // Reload the page
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Pending',
                                            text: response.message
                                        });
                                        // Handle any other response status
                                    }

                                },
                                error: function(xhr) {
                                    $('#loadingSpinner').hide();
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'fail',
                                        text: xhr.responseText
                                    });
                                    // Handle any errors
                                    console.log(xhr.responseText);

                                }
                            });
                });
            });

        </script>

@endsection
