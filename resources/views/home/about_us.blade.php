@extends('home.layouts.app')
@section('content')
<Style>
    h2.about-title.mb-5.text-white.f-m {
    color: #000 !important;
}

h3.fs-5.fw-bolder.mb-3.text-light {
    color: #000 !important;
}

.text-white {
    color: #000 !important;
}

.align-items-center {
    justify-content: unset;
}
.contact-social.about-social.pt-5 i {
    margin-top: 10px;
}
</Style>
<div class="aboutus-cont-sec py-5">
   <div class="container">
      <h2 class="about-title mb-5 text-white f-m">About us</h2>
      <div class="row">
         <div class="mb-4 col-md-6 col-xs-12">
            <div class="about-left">
               <h3 class="fs-5 fw-bolder mb-3 text-light">What is Syjar?</h3>
               <p class="text-white lead me-md-4">
                   Welcome to Sayjar, your premier destination for all your rental needs. Whether you're looking for a car, motorbike, or even a motorboat/yacht, Sayjar is here to simplify the rental process and connect you with trusted service providers. Our platform is designed to provide you with an exceptional rental experience, offering convenience, reliability, and a wide selection of vehicles to choose from. 
               
               </p>
               <div class="about-info-boxes mt-5">
                  <div class="about-info-boxe d-flex align-items-center">
                     <div class="about-info-icon"><i class="fa-solid fa-phone"></i></div>
                     <div class="about-info-text"><span>+123-3456-765</span></div>
                  </div>
                  <div class="about-info-boxe d-flex align-items-center">
                     <div class="about-info-icon"><i class="fa-solid fa-envelope"></i></div>
                     <div class="about-info-text"><span>admin@sayjar.com</span></div>
                  </div>
                  <div class="about-info-boxe d-flex align-items-center">
                     <div class="about-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                     <div class="about-info-text"><span>xyz</span></div>
                  </div>
               </div>
               <div class="contact-social about-social pt-5"><a target="_blank" href="#">
                   <i class="fa-brands text-white fa-facebook-f"></i>
                   </a><a target="_blank" href="https://twitter.com/sevencarlounge?lang=ar">
                       <i class="fa-brands text-white fa-twitter"></i></a><a target="_blank" href="#">
                           <i class="fa-brands text-white fa-instagram"></i></a><a target="_blank" href="#">
                               <i class="fa-brands text-white fa-linkedin-in"></i></a><a target="_blank" href="#">
                                   <i class="fa-brands text-white fa-youtube"></i></a></div>
            </div>
         </div>
         <div class="col-md-6 col-xs-12" style="background-color: rgb(197, 197, 197); background-image: url(/home/assets/images/abcar.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover; border-radius: 20px;"></div>
      </div>
   </div>
</div>
@endsection