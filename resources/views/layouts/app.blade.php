<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SellorBuyKe</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <style>
      .navbar{
      height: 90px;
      }
      .link {
          text-decoration:none;
          }
          --------------------------------------------------------------*/
      .footer {
      overflow: hidden;
      background: rgba(var(--color-black-rgb), 0.9);
      font-size: 16px;
      color: rgba(var(--color-white-rgb), 0.7);
      }
      .footer .footer-content {
      padding: 60px 0;
      }
      .footer a.footer-link-more {
      color: rgba(var(--color-white-rgb), 0.7);
      display: inline-block;
      position: relative;
      }
      .footer a.footer-link-more:before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: var(--color-white);
      }
      .footer a.footer-link-more:hover {
      color: rgba(var(--color-white-rgb), 1);
      }
      .footer .footer-heading {
      color: var(--color-white);
      margin-bottom: 20px;
      padding-bottom: 10px;
      font-size: 18px;
      }
      .footer .footer-blog-entry li {
      margin-bottom: 20px;
      display: block;
      }
      .footer .footer-blog-entry li a .post-meta {
      font-size: 10px;
      letter-spacing: 0.07rem;
      text-transform: uppercase;
      font-weight: 400;
      font-family: var(--font-secondary);
      color: rgba(var(--color-white-rgb), 0.4);
      margin-bottom: 0px;
      }
      .footer .footer-blog-entry li a img {
      flex: 0 0 50px;
      width: 50px;
      }
      .footer .footer-links li {
      margin-bottom: 10px;
      }
      .footer .footer-links li a {
      color: rgba(var(--color-white-rgb), 0.7);
      }
      .footer .footer-links li a:hover, .footer .footer-links li a:focus {
      color: rgba(var(--color-white-rgb), 1);
      }
      .footer .footer-legal {
      background: var(--color-black);
      padding: 40px 0;
      }
      .footer .footer-legal .social-links a {
      text-align: center;
      display: inline-block;
      width: 40px;
      height: 40px;
      background-color: rgba(var(--color-white-rgb), 0.09);
      border-radius: 50%;
      color: var(--color-white);
      line-height: 40px;
      }
      .footer .footer-legal .social-links a:hover {
      background-color: rgba(var(--color-white-rgb), 0.2);
      }
      .footer .copyright strong {
      font-weight: 400;
      }
      .footer .credits {
      padding-top: 6px;
      font-size: 13px;
      }
      .footer .credits a {
      color: var(--color-white);
      }

      .box{
          position: relative;
          display: inline-block; /* Make the width of box same as image */
      }

      .box .text{
          position: absolute;
          z-index: 999;
          margin: 0;
          left: 12px;
          right: 0;
          top: 2%; /* Adjust this value to move the positioned div up and down */
          text-align: start;
          width: 4%; /* Set the width of the positioned div */
          background-color:white;
      }
      .explainer{
          font-size:20px;
      }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand mt-2" href="/">
                  <img src="/storage/uploads/soko.png" alt="" width="100" height="72" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    

                    <form class="d-flex -5" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light text-white" type="submit">Search</button>
                    </form>

                    <!-- Right Side Of Navbar -->
                
                  @if (Auth::user())
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/shop/{{ Auth::user()->id }}">My Shop</a>
                    </div>

                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/explore">Explore</a>
                    </div>
                  @endif  

                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->shop_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="footer" class="footer bg-dark text-white">

    <div class="footer-content">
      <div class="container">

        <div class="row justify-content-center g-5">
          <div class="col-lg-4 col-md-4 col-xs-4">
            <h3 class="footer-heading">About SellorBuyKe<h3>
            <div class="fs-5">SellorBuyKe is an online market where buyers and sellers... </div>
            <p><a href="about" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2 col-md-4 col-xs-4">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="/" class="link"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="/register" class="link"><i class="bi bi-chevron-right"></i> Create Shop</a></li>
              <li><a href="about" class="link"><i class="bi bi-chevron-right"></i> Blog</a></li>
              <li><a href="contact" class="link"><i class="bi bi-chevron-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 col-md-4 col-xs-4">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="tech" class="link"><i class="bi bi-chevron-right"></i> Wine</a></li>
              <li><a href="bizconomics" class="link"><i class="bi bi-chevron-right"></i> Whisky</a></li>
              <li><a href="political" class="link"><i class="bi bi-chevron-right"></i> Gin</a></li>
              <li><a href="religion" class="link"><i class="bi bi-chevron-right"></i> Vodka</a></li>
              <li><a href="sports" class="link"><i class="bi bi-chevron-right"></i> Beer</a></li>


            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Soko version 1.0</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="">Salvacar Technologies</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="https://www.facebook.com/Explanetory/?" class="mx-2"><span class="bi-facebook"></span></a>
              <a href="https://twitter.com/X_planetory" class="mx-2"><span class="bi-twitter"></span></a>

            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>
</body>
</html>
