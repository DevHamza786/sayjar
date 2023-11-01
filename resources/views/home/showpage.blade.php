@extends('home.layouts.app')
@section('content')

<style>
#showimages figure {
    margin-bottom: 6px;
    /* position: relative; */
    height: 450px;
    width: 100%;
    position: relative;
}
div#showimages img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    height: 100%;
    width: 100%;
    position: absolute;
    background-position: center center;
}
</style>

<link href="{{ asset('home/assets/css/showpage.css') }}" rel="stylesheet">
<link href="{{ asset('home/assets/css/owl-carosel.css') }}" rel="stylesheet">

    <!-- MAIN START -->
    <main class="wo-main overflow-hidden">
        <!-- Vehicle Single START -->
        <section class="wo-main-section">
            <div class="container">
                <div class="row">
                    <div id="wo-twocolumns" class="wo-twocolumns">
                        <div class="col-lg-8">
                            <div class="wo-vsinglehead">
                                <div class="wo-tags">

                                    <a href="javascript:void(0);" class="wo-tag-rent">Rent</a>
                                </div>
                                <div class="wo-vsinglehead__title">
                                    <!--<address><i class="fa fa-location"></i> Department 98, 44-46 Morningside Road, EH10 4BF </address>-->
                                    <h2>{{ $post->title }} || {{ ($post->model) }}</h2>
                                </div>
                                
                            </div>
                             <div id="showimages" class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="item">
                                <figure><img src="{{ asset('/public/adpost/features/image/' . $post->feature_image) }}" alt="img description"></figure>
                                </div>
                                <div class="item">
                                <figure><img src="{{ asset('/public/adpost/features/image/' . $post->feature_image) }}" alt="img description"></figure>
                                </div>
                                <div class="item">
                                <figure><img src="{{ asset('/public/adpost/features/image/' . $post->feature_image) }}" alt="img description"></figure>
                                </div>
                              
                            </div>
                            <ul class="wo-vslider-features">
                                <li>
                                    <img src="/public/home/assets/images/img-01.png" alt="img description">
                                    <h4>2019</h4>
                                    <span>Model Year</span>
                                </li>
                                <li>
                                    <img src="/public/home/assets/images/img-02.png" alt="img description">
                                    <h4>1,73,272 km</h4>
                                    <span>Total Drived</span>
                                </li>
                                <li>
                                    <img src="/public/home/assets/images/img-03.png" alt="img description">
                                    <h4>Petrol</h4>
                                    <span>Fuel Type</span>
                                </li>
                                <li>
                                    <img src="/public/home/assets/images/img-04.png" alt="img description">
                                    <h4>Automatic</h4>
                                    <span>Transmission</span>
                                </li>
                                <li>
                                    <img src="/public/home/assets/images/img-05.png" alt="img description">
                                    <h4>2500 CC</h4>
                                    <span>Engine Capacity</span>
                                </li>
                            </ul>
                            <div class="wo-vsingledetails">
                                <div class="wo-vsingledetails__title">
                                    <h3>Vehicle Description</h3>
                                </div>
                                <div class="wo-vsingledetails__content">
                                    <div class="wo-description">
                                        <p>Consectetur adipisicing elit sedaten do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonat proident, sunt
                                            in culpa qui officia deserunt mollit anim perspiciatis unde.</p>
                                        <p>Domnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                            quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quistan miki ratione voluptatem sequi nesciunt. Neque porro quisquam estiam.</p>
                                    </div>
                                </div>
                            </div>
                      
                           
                           
                            <div class="wo-sinstruction">
                                <figure class="wo-sinstruction__img">
                                    <img src="/public/home/assets/images/img-01 (1).jpg" alt="image">
                                </figure>
                                <div class="wo-sinstruction__content">
                                    <h4>Safty Instruction:</h4>
                               
                                    <ul>
                                        <li><span>Seatbelt use is essential for all occupants.</span></li>
                                        <li><span>Follow local traffic laws and speed limits.</span></li>
                                        <li><span>Avoid using mobile devices while driving.</span></li>
                                        <li><span>Secure personal belongings in the vehicle.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside id="wo-sidebar" class="wo-sidebar">
                                <div class="wo-sidebarprice">
                                    <div class="wo-sidebarprice__title">
                                        <h3>Vehicle Asking Price</h3>
                                    </div>
                                    <div class="wo-sidebarprice__content">
                                        <div class="wo-priceinfo">
                                            <div class="wo-priceinfo__final">
                                                <ul class="pricing">
                                                    <li>OMR<strong>{{ $post->price_per_day }}</strong>/day</li>
                                                    <li>OMR<strong>{{ $post->price_per_week }}</strong>/week</li>
                                                    <li>OMR<strong>{{ $post->price_per_month }}</strong>/month</li>
                                                </ul>
                                            </div>
                                            <div class="wo-priceinfo__contact">
                                                <a href="javascript:void(0);" class="wo-contectnum"><i class="fa fa-phone"></i><span>Call Now</span></a>
                                                <a href="javascript:void(0);" class="wo-contectnum wo-contectmsg"><i class="fab fa-whatsapp"></i><span>Whatsapp Now</span></a>
                                                <a href="javascript:void(0);" class="wo-contectnum wo-contectmsg"><i class="fa fa-share"></i><span>Share Now</span></a>
                                            </div>

                                        </div>
                                        <div class="wo-dealerinfo">
                                            <ul>
                                                <li class="wo-dealerprofile">
                                                    <figure>
                                                        <img src="/public/home/assets/images/user-img.jpg" alt="img description">
                                                    </figure>
                                                    <div class="wo-dealerprofile__title">
                                                        <h4>Mike Antoniyan</h4>
                                                     
                                                    </div>
                                                </li>
                                                <li>
                                                    <strong>Type :</strong>
                                                    <a href="javascript:void(0);">Dealer</a>
                                                </li>
                                                <li>
                                                    <strong>Address :</strong>
                                                    <address>Studio 103, Business Centre, 61 Wellfield, CF24 3D</address>
                                                </li>
                                                <li>
                                                    <strong>Availability :</strong>
                                                    <span>10:00 - 17:00 ( Mon - Fri )</span>
                                                </li>
                                                <li>
                                                    <strong>Total Posts :</strong>
                                                    <span>120</span>
                                                </li>
                                             
                                            </ul>
                                        </div>
                                        <div class="wo-socialcontact">
                                            <ul>
                                                <li>
                                                    <img src="/public/home/assets/images/img-01.jpg" alt="img description">
                                                    <h4>Phone No.</h4>
                                                    <span>verified</span>
                                                </li>
                                                <li>
                                                    <img src="/public/home/assets/images/img-02.jpg" alt="img description">
                                                    <h4>Email ID</h4>
                                                    <span>verified</span>
                                                </li>
                                               
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    @if ($relatedAds->count() > 0)
                    <div class="col-12">
                        <div class="wo-singlelikepost">
                            <div class="wo-singlelikepost__title">
                                <h3>You May Also Like</h3>
                            </div>
                      
                        </div>
                          <div class="row">
                @foreach ($relatedAds as $key => $d)
            
                        <div class="g-4 col-lg-3 col-md-6 col-12">
                            <div class="border border-secondary h-100 rounded overflow-hidden">
                                <div class="position-relative">
                                    <img src="{{ asset('/public/adpost/features/image/' . $d->feature_image) }}"
                                        class="w-100 border-bottom border-secondary"
                                        style="aspect-ratio: 1.5 / 1; cursor: pointer; object-fit: cover; object-position: center center;">
                                    <div class="car-time-and-price d-flex"></div>
                                </div>
                                <div class="p-3">
                                    <div class="car-bid-shareMark d-flex align-items-center justify-content-between">
                                        <div class="car-shareMark"><button type="button" class="text-light btn btn-link"
                                                id="copyLink" data-id="{{ $d->id }}"
                                                data-url="{{ route('home.showpage', $d->id) }}"><i
                                                    class="fa-solid fa-share-nodes"></i></button><button type="button"
                                                class="text-light btn btn-link"><i
                                                    class="fa-regular fa-bookmark"></i></button>
                                        </div>
                                        <div class="m-0 p-0 priz-mn sldpric roww justbet text-black">
                                            <div class="price_style p-0 m-b-10">
                                                <s class="d-block cutpr"></s><span class="text-orange f-16"> AED
                                                    {{ $d->price_per_day }}</span><span
                                                    class="currency_style f-12 font-reg m-t-5"> / day</span>

                                            </div>
                                            <div class="price_style p-0 m-b-10">
                                                <s class="d-block cutpr">AED 3300</s><span class="text-orange f-16">AED
                                                    {{ $d->price_per_month }}</span><span
                                                    class="currency_style f-13 font-reg m-t-5"> / mo.</span>
                                                <div class="mileage_style f-13"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="car-title-link" href="{{ route('home.showpage', $d->id) }}">
                                        <h5 class="auction-card-title fw-bold text-uppercase pt-3" style="color: white;">
                                            {{ $d->title }}</h5>
                                    </a>
                                    <p class="text-muted">{{ $d->model }}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="{{ asset('/public/adpost/features/image/' . $d->feature_image) }}"
                                                alt="" class="me-1l"></div>
                                        <div class="text-muted d-flex align-items-center"><img
                                                src="/home/assets/images/oman.png" alt="" class="me-1"
                                                style="width: 20px; height: 15px;"><span
                                                class="text-capitalize">{{ $d->city->name }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                @endforeach
            </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- Vehicle Single END -->
        <!-- Purchasing Safety START -->
        <section class="wo-main-section pt-0">
            <div class="wo-purchasing-saftey">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="wo-safetyrole">
                                <div class="wo-safetyrole__title">
                                    <h2>Renting Vehicles Safety</h2>
                                </div>
                                <div class="wo-safetyrole__content">
                                    <p>Renting vehicles safely involves choosing reputable rental companies, inspecting the vehicle for damage, and adhering to local traffic laws. Always wear seatbelts and avoid distracted or impaired driving. Plan routes in advance, stay informed about local conditions, and have an emergency kit on hand. Personal safety is also essential, particularly in unfamiliar areas; exercise caution and avoid poorly lit or remote locations, especially at night.</p>
                                </div>
                            </div>
                        
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Purchasing Safety End -->
    </main>
    <!-- MAIN END -->
    
    <script>
      $(document).ready(function () {
 $('#showimages').owlCarousel({
    loop:true,
    margin:0,
    items:3,
    nav:false,
    dots:true,
    autoplay:true,
    navText : ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],


    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
});
</script>
   
@endsection
