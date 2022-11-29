<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Wisata Jati Walondo | Wono Kitiran Blitar</title>
    
    <!-- Styles -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext') }}" rel="stylesheet">
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ url('css/swiper.css') }}" rel="stylesheet">
	<link href="{{ url('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ url('css/styles.css') }}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ url('images/favicon.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    <!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <a class="navbar-brand logo-text page-scroll" href="{{ url('/') }}">The Wono Kitiran</a>

    <!-- Image Logo -->
    {{-- <a class="navbar-brand logo-image" href="{{ url('index.html') }}"><img src="{{ url('images/logo.svg') }}" alt="alternative"></a> --}}
    
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/#header') }}">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/#intro') }}">INTRO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/#services') }}">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/#contact') }}">CONTACT</a>
            </li>

            <!-- Dropdown Menu -->          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('terms-conditions') }}"><span class="item-text">TERMS CONDITIONS</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{ url('privacy-policy') }}"><span class="item-text">PRIVACY POLICY</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{ url('entertain') }}"><span class="item-text">ENTERTAINMENT</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="{{ url('food') }}"><span class="item-text">FOOD</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->
            
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/admin/login') }}">ADMIN LOGIN</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->
    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-container about">
                        <h4>Wisata Jati Walondo</h4>
                        <p class="white">Kami menyediakan tempat healing yang wajib dikunjungi</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-6s">
                    <div class="text-container">
                        <h4>Maps</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15801.621911492744!2d112.3579687!3d-8.0600569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94fce6a7e0e47095!2sWisata%20Jati%20Walondo!5e0!3m2!1sen!2sid!4v1669420634450!5m2!1sen!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="{{ url('terms-conditions') }}">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="{{ url('privacy-policy') }}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="{{ url('https://inovatik.com') }}">Template by Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="{{ url('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ url('js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ url('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{ url('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ url('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ url('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ url('js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{ url('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{ url('js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ url('js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>

</html>