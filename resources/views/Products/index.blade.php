<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong>Soko</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    

                    <form class="d-flex -5" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-warning text-white" type="submit">Search</button>
                    </form>

                    <!-- Right Side Of Navbar -->
                

                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/shop/{{$user->id}}">My Shop</a>
                    </div>

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

@section('content')
<div class="container">
    <div class="row">
@foreach ($products as $product)
    
                   
            <div class="col pt-4 card mx-2 my-2 " style="width: 15rem;">
                
            <a href="/p/{{$product->id}}"><img src="/storage/{{$product->image}}" class="card-img-top rounded"></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center card-title">
                            <div style="padding-right: 20px;">
                                <img src="{{$product->user->shop->shopImage()}}" 
                                class="rounded-circle w-100" 
                                style="max-width: 40px;">
                            </div>
                            
                            <div>
                                <div>
                                    <strong>
                                        <a href="/shop/{{$product->user_id}}">
                                            <span class="text-dark">{{ $product->user->shop_name}}

                                            </span>
                                        </a>
                                    </strong>
                                    
                                </div>
                            </div>
                        </div>

                        <p class="card-text">{{$product->product_name}} <span>{{$product->volume}}</span></p>
                        <p>{{$product->price}}<span> KSH </span></p>
                        
                        
                    </div>
                
            </div>
        @endforeach
    
    </div>
</div>


@endsection