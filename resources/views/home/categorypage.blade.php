@extends('home.layouts.app')
@section('content')
    <style>
        /* <!-- //////////// Car Appointment  Start  ////////////////--> */
        .pickup-up-dropdown {
            padding: 20px !important;
            width: 100% !important;
            display: flex !important;
            justify-content: space-between;
            align-items: center;
        }

        .pickup-up-dropdown i {
            color: rgba(128, 128, 128, 0.692);
        }

        .container.car-pick-form.my-5 .col-lg-2 {
            margin-top: 30px;
        }

        .car-pick-form p {
            margin-bottom: .2rem;
            color: #18598c;
            font-weight: 600;
            font-size: 1rem;
        }

        .car-pick-form i {
            padding-right: .3rem;
        }

        .time-date-container {
            display: flex;
            border-radius: 5px;
        }

        .time-date-text {
            /* padding: 0px 10px; */
            display: flex;
            justify-content: space-between;
        }

        .left-input,
        .right-input {
            width: 100%;
        }

        .left-input input,
        .right-input input {
            width: 100%;
            border: none;
            outline: none;
            padding: 20px;
        }

        .left-input {
            position: relative;
        }

        .left-input::after {
            position: absolute;
            content: '';
            right: 0%;
            top: 50%;
            width: .5px;
            height: 70%;
            background-color: #eddedf;
            transform: translate(-50%, -50%);
        }

        .promo-code-input input {
            border: none;
            outline: none;
            padding: 20px;
            width: 100%;
            height: unset;
        }

        .promo-btn {
            /* display: inline-block; */
            background-color: #fcaf17;
            color: #ffffff !important;
            font-weight: 500;
            border: none;
            padding: 18px 50px;
            border-radius: 5px;
            transition: all .2s;
        }

        .dropdown-item {
            color: #000 !important;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background: #fcaf17;
            color: #fff !important;
        }

        .promo-btn:hover {
            background-color: #000;
            color: var(--secondary);
        }

        .flex-end-vert {
            margin-top: 50px;
        }

        .container.car-pick-form.my-5 .col-lg-4 {
            margin-top: 30px;
        }

        .container.car-pick-form.my-5 {
            margin-top: 0px !important;
            margin-bottom: 0 !important;
        }

        /* <!-- //////////// Car Appointment End  ////////////////--> */
    </style>
    <div class="container">
        <div class="row">
            <div class="container car-pick-form my-5">
                <div class="row gy-4 ">

                    <!-- // Pickup location -->
                    <div class="col-lg-4 col-md-6">
                        <p><i class="fa-solid fa-location-dot"></i> City</p>
                        <select class="pickup-up-dropdown border" name="city">
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- // Pickup date and time -->
                    <div class="col-lg-4 col-md-6">
                        <p><i class="fa-solid fa-location-dot"></i> Type</p>
                        <select class="pickup-up-dropdown border" name="type" id="getTypeid">
                            <option value="">Select Type</option>
                            @foreach ($type as $data)
                                <option value="{{ $data->id }}" data-id="{{ $data->id }}">
                                    {{ ucwords($data->name) }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <p><i class="fa-solid fa-location-dot"></i> Category</p>
                        <select class="pickup-up-dropdown border" name="type" id="categorybyType">
                            <option value="">Select Category</option>
                        </select>
                    </div>

                    <!-- // Return Pickup location -->
                    <div class="col-lg-4 col-md-6">
                        <p><i class="fa-solid fa-location-dot"></i>Model</p>
                        <select class="pickup-up-dropdown border" name="type" id="ModelbyType">
                            <option value="">Select Model</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-6" style="margin-top: 30px;">
                        <p>Enter Min Price</p>
                        <div class="promo-code-input">
                            <input type="number" placeholder="Enter Min Price" class="border rounded" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" style="margin-top: 30px;">
                        <p>Enter Max Price</p>
                        <div class="promo-code-input">
                            <input type="number" placeholder="Enter Max Price" class="border rounded" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="flex-end-vert">
                            <a href="car-listing-2.html" class="promo-btn"><i class="fa-solid fa-magnifying-glass"></i>
                                Search</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <section class="carss">
            <div class="roww rivcol">


                @foreach ($post as $key => $d)
                    <div class="g-4 col-lg-3 col-md-6 col-12">
                        <div class="border border-secondary h-100 rounded overflow-hidden">
                            <a href="{{ route('home.showpage', encrypt($d->id)) }}">
                                <div class="position-relative">
                                    <img src="{{ asset('/public/adpost/features/image/' . $d->feature_image) }}"
                                        class="w-100 border-bottom border-secondary"
                                        style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                                    <div class="car-time-and-price d-flex"></div>
                                </div>
                            </a>
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9">
                                        <a href="{{ route('home.showpage', encrypt($d->id)) }}">
                                            <h4 class="text-dark">{{ $d->title }}</h4>
                                        </a>
                                    </div>
                                    <div class="col-3 text-end">
                                        {!! Share::page(route('home.showpage', encrypt($d->id)))->facebook()->twitter()->whatsapp() !!}
                                    </div>
                                </div>
                                <a href="{{ route('home.showpage', encrypt($d->id)) }}">
                                    <div class="row mb-3 mt-2">
                                        <div class="col-sm-6">
                                            <s class="d-block cutpr text-dark">AED {{ $d->price_per_week }}</s>
                                            <span class="text-orange f-16"> AED
                                                {{ $d->price_per_day }}</span><span
                                                class="currency_style f-12 font-reg m-t-5 text-dark"> / day</span>
                                        </div>
                                        <div class="col-sm-6">
                                            <s class="d-block cutpr text-dark">AED
                                                {{ $d->price_per_week * 4 }}</s>
                                            <span class="text-orange f-16">AED {{ $d->price_per_month }}</span>
                                            <span class="currency_style f-13 font-reg m-t-5 text-dark"> /
                                                mo.</span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-xs-12 d-flex">
                                            <p
                                                class="text-muted border border-3 rounded-pill mb-3 border-secondary text-center px-2 mr-2 text-dark">
                                                {{ $d->category->name }}</p>
                                            <p
                                                class="text-muted border border-3 rounded-pill mb-3 border-secondary text-center px-2 text-dark">
                                                {{ $d->models->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="{{ asset('/public/company/logo/' . $d->compnay_logo) }}"
                                                alt="{{ $d->compnay_logo }}"
                                                class="border border-3 border-secondary rounded-1" width="70">
                                        </div>
                                        <div class="col-sm-8">
                                            <h6 class="text-dark">{{ $d->company_name }}</h6>
                                            <img src="/home/assets/images/oman.png" alt="" class="me-1"
                                                style="width: 20px; height: 15px;"><span
                                                class="text-capitalize text-dark">{{ $d->city->name }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row justcent m-0 m-b-10">
                        <div class="col-md-5 p-l-0 p-r-0 enqimgp10">
                            <img loading="lazy" height="181" class="m-auto m-b-0 enqcrimg" id="img4"
                                src="https://www.oneclickdrive.com/uploads/yacht/Diamond-Milano-A62-Yacht_2021_94_94_380046260-1_wp.jpg"
                                alt="yacht image " title="yacht image">
                        </div>
                        <div class="col-md-7 rqedetail m-b-10 p-0">
                            <div class="reqtitle f-16 m-b-10 p-10" id="title_car1">Send inquiry</div>
                            <div class="f-14 font-bold m-b-10 p-l-10 p-r-10" id="title_car">Diamond Milano A62 Yacht
                            </div>
                            <div class="col-xs-6 p-0 m-b-5 m-t-10 d-flex p-l-10 p-r-10">
                                <div class="praiz-cantar m-r-20">
                                    <div>
                                        <span id="f1_price_day" class="text-orange font-bold f-16"> </span>
                                        <span id="f1_duration_day" class="currency_style f-14 font-reg m-t-5"> </span>
                                        <span id="price_day" class="text-orange font-bold f-16">AED 1500</span>
                                        <span id="duration_day" class="currency_style f-14 font-reg m-t-5"> / hour</span>
                                    </div>
                                    <span id="mileage_day" class="mileage_style f-14"></span>
                                </div>
                                <div class="praiz-cantar">
                                    <div><span id="price_month" class="text-orange font-bold f-16"></span>
                                        <span id="duration_month" class="currency_style f-14 font-reg m-t-5"></span>
                                    </div>
                                    <span id="mileage_month" class="mileage_style f-14"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="name" class="form-control" id="inputEmail4" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Phone</label>
                                <input type="phone" class="form-control" id="inputPassword4" placeholder="Phone">
                            </div>

                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Subject"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Whatsapp Enabled
                                </label>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Define the applyFilter function
            function applyFilter() {
                // Get selected filter values using jQuery
                const city = $("#cityFilter").val();
                const make = $("#makeFilter").val();
                const category = $("#categoryFilter").val();
                const minPrice = $("#minPrice").val();
                const maxPrice = $("#maxPrice").val();

                // You can perform filtering logic here based on the selected values
                // For demonstration purposes, let's just log the selected values
                console.log("Selected City:", city);
                console.log("Selected Make:", make);
                console.log("Selected Category:", category);
                console.log("Min Price:", minPrice);
                console.log("Max Price:", maxPrice);
            }

            // Attach a click event handler to the "Apply Filter" button
            $("#applyFilterButton").click(applyFilter);
        });

        $('#getTypeid').on('change', function() {
            var selectedOption = $(this).find(':selected');
            var dataAttrValue = selectedOption.data('id');
            console.log('Data attribute value:', dataAttrValue);
            $.ajax({
                url: '/get-category-type/' + dataAttrValue,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var options = '';
                    $.each(response, function(key, value) {
                        options += '<option value="' + value.id + '">' + value.name +
                            '</option>';
                    });
                    $('#categorybyType').html(options);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });

            $.ajax({
                url: '/get-model-type/' + dataAttrValue,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var options = '';
                    $.each(response, function(key, value) {
                        options += '<option value="' + value.id + '">' + value.name +
                            '</option>';
                    });
                    $('#ModelbyType').html(options);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });

        });
    </script>
@endsection
