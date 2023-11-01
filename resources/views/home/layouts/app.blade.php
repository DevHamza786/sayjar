<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('panel/assets/images/side-logo.png') }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description"
        content="Exotic and Unique Cars Boutique Based in Riyadh, UAE. Established in 2014 as a One-stop Shop for Car Collecting Enthusiasts">
    <link rel="apple-touch-icon" href="/logo192.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{--
      <link rel="manifest" href="/manifest.json">
      --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Add this to your HTML layout file -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>



    <title>Seven Car Lounge</title>


    <link href="{{ asset('home/assets/css/main.css?ver=1') }}" rel="stylesheet">
    <link href="{{ asset('home/assets/css/cat.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('home/assets/css/all.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ '/home/assets/js/owl-carosel.js' }}"></script>
    <style>
        .social-btn-sp #social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        .social-btn-sp #social-links ul li {
            display: inline-block;
        }
        .social-btn-sp #social-links ul li a {
            padding: 15px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
        }
        table #social-links{
            display: inline-table;
        }
        table #social-links ul li{
            display: inline;
        }
        table #social-links ul li a{
            padding: 5px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 15px;
            background: #e3e3ea;
        }
    </style>

</head>

<body>

    <div id="root">
        <div class="bg-black">
            <div class="header_bg">
                <div>

                    <div class="Nav_row row">
                        <div class="col-md-6">
                            <div class="logo_search">
                                <div class="logo"><a href="/"><img class="img-fluid"
                                            src="{{ asset('home/assets/images/logo.png') }}" alt="Site Logo"></a></div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="menu_right">
                                <a href="#"><button class="f-m fw-bolder text-dark"
                                        style="background: #fcaf17;">Rent with us</button></a>
                                @if (!auth()->check())
                                    <a href="{{ route('login') }}"><button class="f-m fw-bolder">Login</button></a>
                                @endif
                                @if (auth()->check())
                                    <p>Welcome, {{ auth()->user()->name }}</p>
                                @endif



                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="cities">
                                   <a href="#">

                                    <div class="gtranslate_wrapper"></div>
                                    <script>
                                        window.gtranslateSettings = {
                                            "default_language": "en",
                                            "languages": ["en", "ar"],
                                            "wrapper_selector": ".gtranslate_wrapper"
                                        }
                                    </script>
                                    <script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>
                                </a>
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        Countries<img src="/home/assets/images/arrow-down-sign-to-navigate.png">
                                    </button>

                                    <div class="dropdown-content">
                                        <a href="#"><img src="/home/assets/images/oman.png"width="20"
                                                height="15"> Oman</a>
                                        <a href="javascript:;" class="vb"><img
                                                src="/home/assets/images/united-arab-emirates.png"width="20"
                                                height="15"> Uae (Comming soon)</a>
                                        <a href="javascript:;" class="vb"><img
                                                src="/home/assets/images/qatar.png"width="20" height="15"> Qatar
                                            (Comming soon)</a>
                                        <a href="javascript:;" class="vb"><img
                                                src="/home/assets/images/saudi-arabia.png"width="20" height="15">
                                            Saudia (Comming soon)</a>
                                        <a href="javascript:;" class="vb"><img
                                                src="/home/assets/images/bahrain.png"width="20" height="15"> Bahrain
                                            (Comming soon)</a>
                                        <a href="javascript:;" class="vb"><img
                                                src="/home/assets/images/kuwait.png"width="20" height="15"> Kuwait
                                            (Comming soon)</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
            <div class="nvbar nvbar-expand-lg nvbar-light bg-light nvbar-light nvbar-box-shadow" id="nvbar">
                <ul id="mnu-primary-mnu" class="nvbar-nav ml-auto flex-wrap">
                    <li class="dropdwn nav-item">
                        <a href="{{ route('home.categorypage','car') }}" class="dropdwn-toggle nav-link first-link " data-toggle="dropdwn"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="/home/assets/images/car (1).png">
                            Cars
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/adpost/images/c7.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">

                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('car') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#" class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdwn nav-item">
                        <a href="{{ route('home.categorypage','bike') }}" class="dropdwn-toggle nav-link first-link " data-toggle="dropdwn"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="/home/assets/images/bycicle.png">
                            Bikes
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/adpost/images/b1.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">

                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('bike') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#" class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdwn nav-item">
                        <a href="{{ route('home.categorypage','motorboats') }}" class="dropdwn-toggle nav-link first-link " data-toggle="dropdwn"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="/home/assets/images/speedboat.png">
                            Motorboats
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/adpost/images/y1.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">

                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('motorboats') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#" class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdwn nav-item">
                        <a href="{{ route('home.categorypage','heavyvihcles') }}" class="dropdwn-toggle nav-link first-link " data-toggle="dropdwn"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="/home/assets/images/dumper-truck.png">
                            Heavy Vehicles
                        </a>
                        <ul class="dropdwn-mnu dropdwn-mega p-0 mt-0 mt-md-20">
                            <li>
                                <div class="flex-column flex-lg-row flex-nowrap roww m-0">
                                    <div
                                        class="p-0 rounded-left dropdwn-column dropdwn-column-img bg-secondary d-none d-lg-block">
                                        <img loading="lazy" alt="OCD menu"
                                            title="UAE's no. 1 car rental &amp; leasing marketplace"
                                            src="/adpost/images/t4.jpg"
                                            class="img-fluid rounded-left attachment-large size-large mnu-img-lft">
                                        <aside class="desktop-app">
                                            <!-- new changes start -->
                                            <span class="f-20 font-bold text-center downloadapptext">
                                                <span class="text-black">Rent Heavyvihcles near you</span> <br> <span
                                                    class=" d-block">the easy way!</span> <a
                                                    href="https://www.oneclickdrive.com/car-rental-app"
                                                    class="d-block f-14 gtdocd">Get the OneClickDrive App</a>
                                            </span>
                                            <!-- new changes end -->
                                        </aside>
                                    </div>
                                    <div class="dropdwn-column">
                                        <nav>
                                            <ul class="listinlin">
                                                @foreach (menuType('heavyvihcles') as $submenu)
                                                    <li class="mnu-item-16210">
                                                        <a href="#" class="dropdwn-item">
                                                            {{ $submenu->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                @yield('content')
            </div>
        </div>
    </div>
    <div class="footer_bg border-top border-secondary">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-5">
                    <div class="footer_text">
                        <div class="footer_logo"><img class="img-fluid"
                                src="{{ asset('home/assets/images/logo.png ') }}" alt=""></div>
                        <p class="text-center f-s"><a class="email_info text-white" href="#">info@abc.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer_text">
                        <div class="footer_heading">
                            <h2 class="f-m">About</h2>
                        </div>
                        <div class="footer_menu f-s">
                            <li><a class="text-white" href="/about-us">About Us</a></li>
                            <li><a class="text-white" href="/renting-guide">Renting Guide</a></li>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_text">
                        <div class="footer_heading">
                            <h2 class="f-m">company</h2>
                        </div>
                        <div class="footer_menu f-s">
                            <li><a class="text-white" href="/privacy-policy">Privacy and Policy</a></li>
                            <li><a class="text-white" href="/terms-conditions">Terms and Conditions</a></li>
                            <li><a class="text-white" href="/contact-us">Contact Us</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="f-s col-md-6">
                        <p>all rights reserved, 2021</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social_icon"><a target="_blank" href="#"><i
                                    class="fa-brands text-white fa-facebook-f"></i></a><a target="_blank"
                                href="#"><i class="fa-brands text-white fa-twitter"></i></a><a target="_blank"
                                href="#"><i class="fa-brands text-white fa-instagram"></i></a><a
                                target="_blank" href="#"><i
                                    class="fa-brands text-white fa-linkedin-in"></i></a><a target="_blank"
                                href="#"><i class="fa-brands text-white fa-youtube"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container me modall animate">
            <!-- upper button section to select
               the login or signup form -->
            <div class="sliders"></div>
            <div class="btn">
                <button class="close">&times;</button>
                <button class="login">Login</button>
                <button class="signup">Signup</button>
            </div>
            <!-- Form section that contains the
               login and the signup form -->
            <div class="form-section">
                <!-- login form -->
                <div class="login-box">
                    <input type="email" class="email ele" placeholder="youremail@email.com">
                    <input type="password" class="password ele" placeholder="password">
                    <button class="clkbtn">Login</button>
                </div>
                <!-- signup form -->
                <div class="signup-box">
                    <input type="text" class="name ele" placeholder="Enter your name">
                    <input type="email" class="email ele" placeholder="youremail@email.com">
                    <input type="password" class="password ele" placeholder="password">
                    <input type="password" class="password ele" placeholder="Confirm password">
                    <button class="clkbtn">Signup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="Toastify"></div>
    </div>
    </div>
    @yield('script')
</body>
</html>
