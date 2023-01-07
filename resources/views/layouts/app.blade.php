<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SellorBuyKe | Sell Online in Kenya | Wines & spirits near me</title>

    <meta name="description" content="Sellorbuyke.com is an online site where wines and spirits shops near you can sell online in Kenya for free. Our app helps you to get more sales and customers. 
    If you want to buy alcohol from liquor stores near you then look no further.">
    <meta name="robots" content="index, follow">

    <meta name="twitter:title" content="SellorBuyKe | Sell Online in Kenya | Wines & spirits near me">
    <meta name="twitter:description" content="<p>SellorBuyKe</p>">
    <meta name="twitter:image" content="https://www.sellorbuyke.com/storage/about/twittercard.jpg">
    <meta name="twitter:site" content="sellorbuyke.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@salvacar_ke">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SellorBuyKe | Sell Online in Kenya | Wines & spirits near me"/>
    <meta property="og:description" content="<p>SellorBuyKe</p>" />
    <meta property="og:image" content="https://www.sellorbuyke.com/storage/about/twittercard.jpg" />
    <meta property="og:url" content="https://sellorbuyke.com" />
    <meta property="og:site_name" content="SellorBuyKe" />
            

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
      .offer{
        background-color: #000;
      }
      
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand mt-2" href="/">
                  <img src="/storage/uploads/soko.png" alt="" width="90" height="45" class="d-inline-block align-text-top">
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
                        <a class="nav-link" aria-current="page" href="/shop/{{ Auth::user()->id }}">My Shop</a>
                    </div>

                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="/explore">Explore</a>
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
        <nav class="navbar navbar-expand-lg navbar-light py-0 bg-light">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="padding-left:110px;">
              <li class="nav-item">
                <a class="nav-link" href="/wine">Wine </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/whisky">Whisky</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/gin">Vodka</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/vodka">Gin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/beer">Beer</a>
              </li>
            </ul>
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
            <div class="fs-5">Sellorbuyke.com is an online site where wines and spirits shops near you can sell online in Kenya for free... </div>
            <p><a href="/about" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2 col-md-4 col-xs-4">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="/" class="link"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="/register" class="link"><i class="bi bi-chevron-right"></i> Create Shop</a></li>
              <li><a href="/about" class="link"><i class="bi bi-chevron-right"></i> Blog</a></li>
              <li><a href="contact" class="link"><i class="bi bi-chevron-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 col-md-4 col-xs-4">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="/wine" class="link"><i class="bi bi-chevron-right"></i> Wine</a></li>
              <li><a href="/whisky" class="link"><i class="bi bi-chevron-right"></i> Whisky</a></li>
              <li><a href="/gin" class="link"><i class="bi bi-chevron-right"></i> Gin</a></li>
              <li><a href="/vodka" class="link"><i class="bi bi-chevron-right"></i> Vodka</a></li>
              <li><a href="/beer" class="link"><i class="bi bi-chevron-right"></i> Beer</a></li>
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
              Designed by <a href="https://www.salvacar.co.ke">Salvacar Technologies</a>
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
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "OnlineStore",
      "name": "SellorBuyKe",
      "description": "Sellorbuyke.com is an online site where wines and spirits shops near you can sell online in Kenya for free. Our app helps you to get more sales and customers. 
        If you want to buy alcohol from liquor stores near you then look no further",
      "image": "https://www.sellorbuyke.com/storage/about/twittercard.jpg",
      "logo": "https://www.sellorbuyke.com/storage/uploads/soko.png",
      "parentOrganization": {
        "@type": "OnlineBusiness",
        "name": "Salvacar Technologies",
        "url": "https://salvacar.co.ke/"
      },
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "Kenya",
        "addressLocality": "Nairobi"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingCount": 20,
        "ratingValue": 4.7
      },
      "interactionStatistic": {
        "@type": "InteractionCounter",
        "userInteractionCount": 75,
        "interactionType": "https://schema.org/TradeAction"
      },
      "foundingDate": "2019-10-24"
    }
    </script>
</body>
</html>

