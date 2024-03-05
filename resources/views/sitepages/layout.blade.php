<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CHEEERFULHANDS INITIATIVES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL('siteassets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('siteassets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ URL('siteassets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL('siteassets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL('siteassets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL('siteassets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL('siteassets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL('siteassets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL('siteassets/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ URL('siteassets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL('siteassets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL('siteassets/css/style.css') }}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ ('/') }}"><img src="{{ URL('siteassets/images/chilogo.jpg') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ URL('/') }}" class="nav-link" >Home</a></li>
          <li class="nav-item" ><a href="{{ URL('/about') }}" class="nav-link">About</a></li>
          {{-- <li class="nav-item"><a href="{{ URL('/causes') }}" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="{{ URL('/donate') }}" class="nav-link">Donate</a></li> --}}
          <li class="nav-item"><a href="{{ URL('/blog') }}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{ URL('/gallery') }}" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="{{ ('/contact') }}" class="nav-link">Contact</a></li>
         @if (Auth::user())
         <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
  
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="nav-link">Sign out</a>
                
          </form>
        </li>
         @else
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
         @endif
          
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    <div class="row mb-4">
      <br>
    </div>
 @yield('content')

    <footer class="ftco-footer ftco-section img">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>At Cheerfulhandsinitiative, we support women/girl profession and personal development through education and training.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/cheerful_hands"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://web.facebook.com/cheerfulHandsInitiative/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/cheerfulhandsinitiative/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-6">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ URL('/') }}" class="py-2 d-block">Home</a></li>
                <li><a href="{{ URL('/about') }}" class="py-2 d-block">About</a></li>
                <li><a href="{{ URL('/blog') }}" class="py-2 d-block">Blog</a></li> 
                <li><a href="{{ URL('/gallery') }}" class="py-2 d-block">Gallery</a></li>
                <li><a href="{{ URL('/blog/admin') }}" class="py-2 d-block">Staff</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">No. 34 Second Floor JBryan Plaza, Railway bypass, High Level, Makurdi, Benue State, Nigeria.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+234 7019696134</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">cheerfulhandsinitiative@gmail.com</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@cheerfulhandsinitiatives.org</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib and <small>OZATECH Services.</small> </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ URL('siteassets/js/jquery.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/popper.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL('siteassets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/aos.js') }}"></script>
  <script src="{{ URL('siteassets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ URL('siteassets/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ URL('siteassets/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ URL('siteassets/js/google-map.js') }}"></script>
  <script src="{{ URL('siteassets/js/main.js') }}"></script>
    
  </body>
</html>