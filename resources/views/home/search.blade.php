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

    <section class="carss">
        <div class="container">
            @if ($posts->count() > 0)
            <div class="row">
                <div class="col-md-12">
                    <h2 class="main-h2">Best Cars We Found</h2>
                </div>
                <p class="para">Choose among cars with in-demand driving features and high mileage, and rent a car at the
                    best price. Exclusive car rental discounts, updated seasonally!</p>
            </div>
            <div class="row">
                @foreach ($posts as $key => $d)
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
                @endforeach
            </div>
            @else
            <div class="row pt-4 pb-4 h-50">
                <div class="col-12">
                    <h2 class="main-h2 text-center">No Data Found</h2>
                </div>
            </div>
            @endif
    </section>
@endsection
@section('script')
@endsection
