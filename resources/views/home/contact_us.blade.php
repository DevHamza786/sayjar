@extends('home.layouts.app')
@section('content')
<style>
    .main-contact-us {
	padding: 70px 0;
	position: relative;
	background-color: #f7f7f7;
}
.main-contact-us:before {
	position: absolute;
	content: "";
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	background-image: url(/images/capabilities-bg-before.png);
	background-repeat: no-repeat;
	background-size: 100%;
	width: 100%;
	height: 619px;
	margin: auto
}
.contact {
	position: relative
}
.contact:before {
	position: absolute;
	content: "";
	right: 0;
	top: -35%;
	background-image: url(/images/about-logo-icon.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	width: 518px;
	height: 475px;
	animation-name: spin;
	animation-duration: 50s;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
	display: none;
}
.contact .contact-form-wrapper {
	background: #fff;
	padding: 33px 30px 24px;
	position: relative;
	margin: 32px 0 20px
}
.contact .contact-form-wrapper:before {
	position: absolute;
	content: "";
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #fff;
	-webkit-box-shadow: 2px 2px 10px rgba(0, 0, 0, .1);
	box-shadow: 2px 2px 10px rgba(0, 0, 0, .1);
	z-index: -1
}
.contact .contact-form-wrapper .form-group label {
	font-size: 16px;
	line-height: 26px;
	font-weight: 600;
	margin-bottom: 5px;
	color: #012a5e
}
.contact .contact-form-wrapper .form-group .form-control {
	margin-bottom: 10px;
	height: 41px
}
.contact .contact-form-wrapper .form-group textarea.form-control {
	height: 120px
}
.contact .contact-form-wrapper .form-group .base-btn1 i {
	margin-left: 7px
}
.contact .address-area {
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-ms-flex-item-align: center;
	-ms-grid-row-align: center;
	align-self: center;
	border-radius: 3px;
	padding: 22px 30px 25px;
	-webkit-box-shadow: 2px 2px 10px rgba(0, 0, 0, .1);
	box-shadow: 2px 2px 10px rgba(0, 0, 0, .1);
	/* background-image: url(/images/back.jpg); */
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 98% 50%;
	background: #fcaf17;
}
.contact .address-area .title {
	font-size: 24px;
	font-weight: 600;
	line-height: 34px;
	color: #fff;
	margin-bottom: 23px;
	padding-bottom: 12px;
	position: relative;
	display: inline-block
}
.contact .address-area .title:after {
	position: absolute;
	content: "";
	bottom: 0;
	left: 0;
	width: 50%;
	height: 2px;
	background: #fff
}
.contact .address-area .address-list {
	padding: 22px 0 0;
	list-style: none
}
.contact .address-area .address-list li {
	margin-bottom: 25px
}
.contact .address-area .address-list li:last-child {
	margin-bottom: 0
}
.contact .address-area .address-list li p {
	color: #fff!important;
	padding-left: 30px;
	position: relative;
	font-size: 15px;
	font-weight: 600;
}
.contact .address-area .address-list li p i {
	position: absolute;
	left: 0;
	top: 5px
}

.section-heading-center h4 {
    padding: 0 62px;
    display: inline-block;
}
.sec-heading-left h4, .section-heading-center h4, .testimonial-left h4 {
    font-size: 18px;
    font-weight: 600;
    color: #4d4d4d;
    position: relative;
    padding-left: 71px;
}
.sec-heading-left h4:before, .section-heading-center h4:after, .section-heading-center h4:before, .testimonial-left h4:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    bottom: 0;
    width: 53px;
    height: 1px;
    background-color: #f38e1d;
    margin: auto;
}
.section-heading-center h4:after {
    right: 0!important;
    margin: auto;
    left: auto;
}
.sec-heading-left h3, .section-heading-center h3 {
    line-height: 35px;
	font-size: 37px;
	font-weight: 600 !important;

}
.btn.btn-vulture {
    font-size: 16px;
    font-weight: 600;
    color: #ffffff;
    padding: 17px 38px;
    line-height: 14px!important;
    border-radius: 30px;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    -ms-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    border: 2px solid transparent;
    box-shadow: none;
    background-color: #f38e1d;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

ul#mnu-primary-mnu {
    margin-bottom: 0;
}

.address-area a {
    font-weight: 600 !important;
}
p.paras {
    max-width: 80%;
    margin: 0 auto !important;
    font-size: 18px;
    margin: 14px 0px;
    margin-top: 10px !important;
}

@media only screen and (max-width:991px){
.col-12.col-sm-12.col-md-12.col-lg-4.order-1.order-sm-1.order-md-1.order-lg-2.d-flex {
    display: block !important;
    margin-top: 40px;
}
}

</style>
	<section class="main-contact-us">
  		<div class="container">
  			<div class="section-heading-center text-center">
		        <h4>Contact Us</h4>
		        <p class="paras">If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us through the contact information provided on our platform.</p>
		    </div>
  		</div>
  	<div class="contact" id="contact">
         <div class="container">
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-8 order-2 order-sm-2 order-md-2 order-lg-1">
                  <div class="contact-form-wrapper">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif 
                 <form method="POST" action="/save_contact">
                         @csrf
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="name">Name :</label>
                                 <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="email">Email :</label>
                                 <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="subjict">Subject :</label>
                                 <input type="text"name="subject" class="form-control" id="subject" placeholder="Write Your Subject" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="phone">Phone :</label>
                                 <input type="text" name="phone_no" class="form-control"  id="phone" placeholder="Enter Your Phone No" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group button-area">
                                 <label for="message">Message :</label>
                                 <textarea id="message" name="message" class="form-control textarea" placeholder="Write Your Message" required></textarea>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group button-area">
                                 <button type="submit" id='inquiry_form_btn' class="btn btn-vulture text-uppercase">Send <i class="fas fa-paper-plane"></i></button>
                              </div>
                              
                               <input type="hidden" name="source" value="contact" />


                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-4 order-1 order-sm-1 order-md-1 order-lg-2 d-flex">
                  <div class="address-area">
                     <h4 class="title">
                        Contact Information
                     </h4>
                     <ul class="address-list">
                        <li>
                           <p><i class="fas fa-map-marker-alt"></i>Oman</p>
                        </li>
                        
                        <li>
                           <p><i class="far fa-envelope"></i> <a href=mailto:info@sayjar.com"" class="__cf_email__">info@sayjar.com</a></p>
                        </li>
                        <li>
                           <p><i class="fas fa-globe-americas"></i> www.sayjar.com/</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
     </div>
      </section>
@endsection