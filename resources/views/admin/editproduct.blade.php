@extends('admin.layouts.sidebar')
@section('tittle', 'Edit-Product')
@section('content')
    <div class="row mb-9 align-items-center">
        <div class="col-xxl-9">
            <div class="row">
                <div class="col-sm-6 mb-8 mb-sm-0">
                    <h2 class="fs-4 mb-0">{{$product->name}}</h2>
                </div>
                <div class="col-md-6 d-flex flex-wrap justify-content-md-end">
                    <a href="{{route('admin/allproduct')}}" class="btn btn-outline-primary btn-hover-bg-primary me-4">
                        Products
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        @if (session('errors'))
            <div class="alert alert-danger">
                {{ session('errors') }}
            </div>
        @endif
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-xxl-9">
            <form class="form-border-1" id="update">
                @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-8 rounded-4">
                        <div class="card-header p-7 bg-transparent">
                            <h4 class="fs-18 mb-0 font-weight-500">Basic</h4>
                        </div>
                        <div class="card-body p-7">
                                <div class="mb-8">
                                    <label for="product_title" class="mb-4 fs-13px ls-1 fw-bold text-uppercase">Product title</label>
                                    <input type="text" value="{{$product->name}}" name="name" placeholder="Type here" class="form-control" id="product_title">
                                </div>
                                <div class="mb-8">
                                    <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase">Full description</label>
                                    <textarea class="form-control" id="editor"  name="description" rows="4">{{$product->description}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-8">
                                            <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase" for="regular-price">Regular price</label>
                                            <input placeholder="NGN" name="price" value="{{$product->price}}" type="number" class="form-control" id="regular-price">
                                            <input  name="id" value="{{$product->id}}" type="hidden" class="form-control" id="regular-price">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-8">
                                            <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase" for="promotional-price">Promotional price</label>
                                            <input placeholder="NGN" type="number" value="{{$product->cprice}}" name="cprice" class="form-control" id="promotional-price">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase" for="currency">Currency</label>
                                        <select class="form-select" id="currency">
                                            <option>NGN</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-8">
                                        <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase" for="regular-price">price Range from</label>
                                        <input placeholder="NGN" name="ramount" type="number" value="{{$product->ramount}}" class="form-control" id="regular-price">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-8">
                                        <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase" for="promotional-price">price Range to</label>
                                        <input placeholder="NGN" type="number" name="tamount" value="{{$product->tamount}}" class="form-control" id="promotional-price">
                                    </div>
                                </div>
                            </div>

                            @foreach($attribute as $sizes)
                                <div class="card mb-8 rounded-4" id="layers">
                                    <div class="card-header p-7 bg-transparent">
                                        <h4 class="fs-18px mb-0 font-weight-500">Add Attribute</h4>
                                    </div>
                                    <div class="card-body p-7 layer">
                                        <div class="form-border-1">
                                            <div class="mb-8">
                                                <label for="shipping-fee" class="mb-4 fs-13px ls-1 fw-bold text-uppercase">Name</label>
                                                {{--                                            <input type="text" name="attribute[][name]" id="attributeName" class="form-control" placeholder="Name" required>--}}
                                                <select name="attribute[][name]" id="attributeName" class="form-control">
                                                    <option value="{{$sizes['name']}}">{{$sizes['name']}}</option>
                                                    @foreach($attributes as $act)
                                                        <option value="{{$act['name']}}">{{$act['name']}}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="attribute[][id]" value="{{$sizes['id']}}">
                                                <br>
                                                {{--                                            <label>--}}
                                                <textarea name="attribute[][value]" class="form-control" id="attributeValues" placeholder="Enter options for customer to choose from f.e, Blue, or Large , Use | to separate different options.">{{$sizes['value']}}</textarea>
                                                {{--                                            </label>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="card mb-8 rounded-4" id="variations">
                                <div class="card-header p-7 bg-transparent">
                                    <h4 class="fs-18px mb-0 font-weight-500">Variations</h4>
                                </div>

                                @foreach($variation as $va)
                                <div class="card-body p-7 layer" id="variationContainer">
                                    <!-- Variations will be displayed here -->

                                    <div class="mb-8">
                                    <strong>Sizes: {{$va['attribute_size']}} |</strong>
                                    <strong>Layer: {{$va['attribute_layer']}} |</strong>
                                    <strong>Flavor: {{$va['attribute_flavor']}} |</strong>
                                    <input type="hidden" name="variation[][id]" value="{{$va['id']}}"/>
                                    <input type="number" name="variation[][price]" value="{{$va['price']}}"/>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                                <div class="mb-8">
                                    <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase">Addition Information</label>
                                    <textarea   class="form-control" name="addition" rows="4">{{$product->addition}}</textarea>
                                </div>
{{--                                <label class="form-check mb-5" for="make-template">--}}
{{--                                    <input class="form-check-input" type="checkbox" value id="make-template">--}}
{{--                                    <span class="form-check-label"> Make a template </span>--}}
{{--                                </label>--}}
                        </div>
                    </div>
                    <div class="card mb-8 rounded-4">
                        <div class="card-header p-7 bg-transparent">
                            <h4 class="fs-18px mb-0 font-weight-500">Shipping</h4>
                        </div>
                        <div class="card-body p-7">
                            <form class="form-border-1">
                                <div class="mb-8">
                                    <label for="shipping-fee" class="mb-4 fs-13px ls-1 fw-bold text-uppercase">Shipping fees</label>
                                    <input type="number" placeholder="NGN" value="{{$product->fee}}" name="fee" class="form-control" id="shipping-fee">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-8 rounded-4">
                        <div class="card-header p-7 bg-transparent">
                            <h4 class="fs-18px mb-0 font-weight-500">Media</h4>
                        </div>
                        <div class="card-body p-7">
                            <div class="input-upload">
                                <div class="mb-7">
                                    <img src="https://templates.g5plus.net/glowing-bootstrap-5/assets/images/dashboard/upload.svg" width="102" class="d-block mx-auto" alt>
                                </div>
                                <input name="image" value="{{$product->image}}" class="form-control" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-8 rounded-4">
                        <div class="card-header p-7 bg-transparent">
                            <h4 class="fs-18px mb-0 font-weight-500">Organization</h4>
                        </div>
                        <div class="card-body p-7">
                            <div class="row mx-n3">
                                <div class="">
                                    <label class="mb-4 fs-13px ls-1 fw-bold text-uppercase " for="category">Category</label>
                                    @foreach ($category as $cat)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $cat->name }}" id="category{{ $cat->id }}">
                                            <label class="form-check-label" for="category{{ $cat->id }}">
                                                {{ $cat->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mb-5 col-12 px-3">
                                    <label for="tag" class="mb-4 fs-13px ls-1 fw-bold text-uppercase">Tags</label>
                                    <input type="text" class="form-control" id="tag">
                                </div>
                                <div class="mb-5 col-12 px-3">
                                <button type="submit" class="btn btn-primary">
                                        Update
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {


            // Send the AJAX request
            $('#update').submit(function(e) {
                e.preventDefault(); // Prevent the form from submitting traditionally

                // Get the form data
                var formData = $(this).serialize();
                        // The user clicked "Yes", proceed with the action
                        // Add your jQuery code here
                        // For example, perform an AJAX request or update the page content
                        Swal.fire({
                            title: 'Processing',
                            text: 'Please wait...',
                            icon: 'info',
                            allowOutsideClick: false,
                            showConfirmButton: false
                        });

                        $.ajax({
                            url: "{{ route('admin/updateproduct') }}",
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
