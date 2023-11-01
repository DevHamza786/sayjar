@extends('home.layouts.app')
@section('content')
    <section class="banner">
        <div class="container">
            <div class="MuiGrid-root MuiGrid-container MuiGrid-item MuiGrid-direction-xs-column MuiGrid-grid-xs-12 css-rjsjy0"
                style="background-size:cover;min-height:257px;border-radius:6px">
                <h1 class="MuiTypography-root MuiTypography-h5 css-1px8evw" data-testid="hero-title">Find Your Perfect Ride
                    With Sayjar</h1>
                <div class="MuiBox-root css-1sido8c">
                    <div class="MuiBox-root css-70qvj9">
                    </div>
                    <form method="Post" action="{{ route('serach') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="MuiGrid-root MuiGrid-container css-kcr3a5">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-10 css-1kijih2">
                                <form>
                                    <div class="MuiAutocomplete-root MuiAutocomplete-hasPopupIcon css-id14lt">
                                        <div class="MuiBox-root css-0">
                                            <div class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-ocy3q4"
                                                data-testid="search-input">
                                                <div style="padding-left:16px;padding-right:16px"
                                                    class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiAutocomplete-inputRoot css-18vx6wv">
                                                    <input aria-invalid="false" autocomplete="off" id=":R9la6n4d6:"
                                                        placeholder="Search for anything" type="text"
                                                        class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiAutocomplete-input MuiAutocomplete-inputFocused css-1bjlmdj"
                                                        aria-autocomplete="list" aria-expanded="false" autocapitalize="none"
                                                        spellcheck="false" role="combobox" value=""
                                                        name="search" required>
                                                    <img class="MuiBox-root css-19rsff" alt="Search"
                                                        src="/home/assets/images/search.svg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-2 MuiGrid-grid-md-2 css-11w2184"><button
                                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-fullWidth css-nzmd8g"
                                    tabindex="0" type="sumbit" data-testid="search-button">Search
                                    <img class="MuiBox-root css-19rsff nones" alt="Search"
                                        src="/home/assets/images/search.svg"></button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if ($users->where('type_id', 1)->count() > 0)
        <section class="carss">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="main-h2">Latest Car Rental's in Oman</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="view">
                            <a href="post/car">View All</a>
                        </div>
                    </div>
                    <p class="para">Choose among cars with in-demand driving features and high mileage, and rent a car at
                        the
                        best price. Exclusive car rental discounts, updated seasonally!</p>
                </div>
                <div class="row">
                    @foreach ($users as $key => $d)
                        @if ($d->type_id == 1)
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
                                                    <s class="d-block cutpr text-dark">AED {{ $d->price_per_week * 4 }}</s>
                                                    <span class="text-orange f-16">AED {{ $d->price_per_month }}</span>
                                                    <span class="currency_style f-13 font-reg m-t-5 text-dark"> / mo.</span>
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
                        @endif
                    @endforeach
                </div>
        </section>
    @endif


    @if ($users->where('type_id', 2)->count() > 0)
        <section class="carss">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="main-h2">Latest Bikes Rental's in Oman</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="view">
                            <a href="post/bike">View All</a>
                        </div>
                    </div>
                </div>
                <p class="para">Choose among Bikes with in-demand driving features and high mileage, and rent a Bikes at
                    the best price. Exclusive Bikes rental discounts, updated seasonally!</p>
                <div class="row">
                    @foreach ($users as $key => $d)
                        @if ($d->type_id == 2)
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
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="carss">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="main-h2">Latest Yacht/Ships Rental's in Oman</h2>
                </div>
                <div class="col-md-6">
                    <div class="view">
                        <a href="#">View All</a>
                    </div>
                </div>
                <p class="para">Choose among Yacht/Ships with in-demand driving features and high mileage, and rent a
                    Yacth/Ships at the best price. Exclusive Yacth/Ships rental discounts, updated seasonally!</p>
            </div>
            <div class="row">
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/y1.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/y2.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/y3.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/y4.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="carss">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="main-h2">Latest Trucks Rental's in Oman</h2>
                </div>
                <div class="col-md-6">
                    <div class="view">
                        <a href="#">View All</a>
                    </div>
                </div>
                <p class="para">Choose among Trucks with in-demand driving features and high mileage, and rent a Trucks
                    at the best price. Exclusive Trucks rental discounts, updated seasonally!</p>
            </div>
            <div class="row">
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/t1.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/t2.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/t3.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-4 col-lg-3 col-md-6 col-12">
                    <div class="border border-secondary h-100 rounded overflow-hidden">
                        <div class="position-relative">
                            <img src="/adpost/images/t4.jpg" class="w-100 border-bottom border-secondary"
                                style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                            <div class="car-time-and-price d-flex"></div>
                        </div>
                        <div class="p-3">
                            <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                <div class="car-shareMark"><button type="button" class="text-light btn btn-link"><i
                                            class="fa-solid fa-share-nodes"></i></button><button type="button"
                                        class="text-light btn btn-link"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                                <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr"></s><span class="text-orange f-16"> AED 170</span><span
                                            class="currency_style f-12 font-reg m-t-5"> / day</span>

                                    </div>
                                    <div class="price_style p-0 m-b-10">
                                        <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                            3000</span><span class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                        <div class="mileage_style f-13"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="car-title-link" href="/car/range-rover-1235">
                                <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">Range
                                    Rover</h5>
                            </a>
                            <p class="text-muted">First Edition P530 | 2022</p>
                            <div class="d-flex align-items-center">
                                <div class="text-muted d-flex align-items-center"><img
                                        src="https://www.oneclickdrive.com/application/views/img/company/luxurysupercar-rental1.png"
                                        alt="" class="me-1l"></div>
                                <div class="text-muted d-flex align-items-center"><img src="https://flagcdn.com/sa.svg"
                                        alt="" class="me-1" style="width: 20px; height: 15px;"><span
                                        class="text-capitalize">saudi arabia</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@section('script')
<script>
    document.getElementById('openShareModal').addEventListener('click', function () {
        alert('dasd');
        document.getElementById('shareModal').style.display = 'block';
    });

    document.getElementById('closeShareModal').addEventListener('click', function () {
        document.getElementById('shareModal').style.display = 'none';
    });
</script>
@endsection
