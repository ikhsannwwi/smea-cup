<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title') &mdash; Smea Cup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('soccer-master/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('soccer-master/css/bootstrap/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('soccer-master/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('soccer-master/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('soccer-master/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('soccer-master/css/')}}owl.theme.default.min.css">

  <link rel="stylesheet" href="{{asset('soccer-master/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('soccer-master/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('soccer-master/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('soccer-master/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('soccer-master/css/style.css')}}">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="{{asset('soccer-master/images/logo.png')}}" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/" class="nav-link">Home</a></li>
                <li class="{{request()->is('pertandingan') ? 'active' : ''}}"><a href="/pertandingan" class="nav-link">Pertandingan</a></li>
                <li class="{{request()->is('support') ? 'active' : ''}}"><a href="/support" class="nav-link">Support</a></li>
                <li class="{{request()->is('blog') ? 'active' : ''}}"><a href="/blog" class="nav-link">Blog</a></li>
                <li class="{{request()->is('tentang-kami') ? 'active' : ''}}"><a href="/tentang-kami" class="nav-link">Tentang Kami</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    @yield('content')



    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="{{asset('soccer-master/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery-ui.js')}}"></script>
  <script src="{{asset('soccer-master/js/popper.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('soccer-master/js/aos.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('soccer-master/js/jquery.mb.YTPlayer.min.js')}}"></script>


  <script src="{{asset('soccer-master/js/main.js')}}"></script>

</body>

</html>