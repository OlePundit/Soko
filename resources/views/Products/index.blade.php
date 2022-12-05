@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-1 my-1 offer" style="background-color:#000"><h2 class="mx-2">Top Offers</h2></strong>
        <div class="row justify-content-center">
            @foreach ($discounts as $discount)          
            <div class="col pt-2 mx-2">          
                <a href="/products/{{$discount->slug}}">
                    <div class="box">
                        <img src="/storage/{{$discount->image}}" class="card-img-top rounded" style="max-width: 100%;" alt="{{$discount->product_name}}">
                        <div class="text">{{$discount->discount}}%</div>
                    </div>
                </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$discount->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;" alt="{{$discount->user->shop_name}}">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$discount->user_id}}" class="link">
                                        <span class="text-dark">{{$discount->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$discount->product_name}} <span>{{$discount->volume}}</span></p>
                    @if ($discount->offer)
                    <strong>{{$discount->offer}}<span> KSH </span></strong> 
                    <s><p>{{$discount->price}}<span> KSH </span></p></s>     
                    @else
                    <strong>{{$discount->price}}<span> KSH </span></strong> 
                    @endif
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
        <div class="mySlides fade box col-lg-12 col-sm-4 col-md-6">
            <div class="numbertext">1 / 3</div>
            <img src="/storage/about/somelier.png" style="width:100%" alt="sell liquor">
            <h2 class="caption">
                <strong>Sell Liquor online for Free</strong>
                <a href="/register">
                    <button class="btn btn-primary text-white">Register</button>
                </a>
            </h2>
        </div>

        <div class="mySlides fade box col-lg-12 col-sm-4 col-md-6">
            <div class="numbertext">2 / 3</div>
            <img src="/storage/about/sellorasset.png" style="width:100%" alt="buy alcohol">
            <h2 class="caption"><strong>Buy alcohol from a liquor store near you</strong></h2>
        </div>

        <!-- Next and previous buttons -->
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>

    <div class="card my-2">
        <strong class="mx-3 my-1"><h2>Wine</h2></strong>
        <div class="row justify-content-center">
            @foreach ($wines as $wine)       
            <div class="col pt-2 mx-2">          
                <a href="/products/{{$wine->slug}}">
                    <div class="box">
                        <img src="/storage/{{$wine->image}}" class="card-img-top rounded" style="max-width: 100%;" alt="{{$wine->product_name}}">
                        @if($wine->discount)
                        <div class="text">{{$wine->discount}}%</div>
                        @endif
                    </div>
                </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$wine->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;" alt="{{$wine->user->shop_name}}">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$wine->user_id}}" class="link">
                                        <span class="text-dark">{{$wine->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$wine->product_name}} <span>{{$wine->volume}}</span></p>
                    @if ($wine->offer)
                    <strong>{{$wine->offer}}<span> KSH </span></strong> 
                    <s><p>{{$wine->price}}<span> KSH </span></p></s>     
                    @else
                    <strong>{{$wine->price}}<span> KSH </span></strong> 
                    @endif
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="card my-2">
        <strong class="mx-3 my-1"><h2>Whisky</h2></strong>
        <div class="row justify-content-center">
            @foreach ($whiskys as $whisky)          
            <div class="col pt-2 mx-2">          
            <a href="/products/{{$whisky->slug}}">
                <div class="box">
                    <img src="/storage/{{$whisky->image}}" class="card-img-top rounded" style="max-width: 100%;" alt="$whisky->product_name">
                    @if($whisky->discount)
                    <div class="text">{{$whisky->discount}}%</div>
                    @endif
                </div>
            </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$whisky->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;" alt="{{$whisky->user->shop_name}}">
                            
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$whisky->user_id}}" class="link">
                                        <span class="text-dark">{{$whisky->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$whisky->product_name}} <span>{{$whisky->volume}}</span></p>
                    @if ($whisky->offer)
                    <strong>{{$whisky->offer}}<span> KSH </span></strong> 
                    <s><p>{{$whisky->price}}<span> KSH </span></p></s> 
                    @else 
                    <strong>{{$whisky->price}}<span> KSH </span></strong> 
                    @endif
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="card my-2">
        <strong class="mx-3 my-1"><h2>Gin</h2></strong>
        <div class="row justify-content-center">
            @foreach ($gins as $gin)          
            <div class="col pt-2 mx-2">          
            <a href="/products/{{$gin->slug}}">
                <div class="box">
                    <img src="/storage/{{$gin->image}}" class="card-img-top rounded" style="max-width: 100%;" alt="{{$gin->product_name}}">
                    @if($gin->discount)
                    <div class="text">{{$gin->discount}}%</div>
                    @endif
                </div>
            </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$gin->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;" alt="{{$gin->user->shop_name}}">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$gin->user_id}}" class="link">
                                        <span class="text-dark">{{$gin->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$gin->product_name}} <span>{{$gin->volume}}</span></p>
                    @if ($gin->offer)
                    <strong>{{$gin->offer}}<span> KSH </span></strong> 
                    <s><p>{{$gin->price}}<span> KSH </span></p></s>  
                    @else
                    <strong>{{$gin->price}}<span> KSH </span></strong> 
                    @endif
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="card my-2">
        <strong class="mx-3 my-1"><h2>Vodka</h2></strong>
        <div class="row justify-content-center">
            @foreach ($vodkas as $vodka)          
            <div class="col pt-2 mx-2">          
            <a href="/products/{{$vodka->slug}}">
                <div class="box">
                    <img src="/storage/{{$vodka->image}}" class="card-img-top rounded" style="max-width: 100%;" alt="{{$vodka->product_name}}">
                    @if($vodka->discount)
                    <div class="text">{{$vodka->discount}}%</div>
                    @endif
                </div>
            </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$vodka->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;" alt="{{$vodka->user->shop_name}}">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$vodka->user_id}}" class="link">
                                        <span class="text-dark">{{$vodka->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$vodka->product_name}} <span>{{$vodka->volume}}</span></p>
                    @if ($vodka->offer)
                    <strong>{{$vodka->offer}}<span> KSH </span></strong> 
                    <s><p>{{$vodka->price}}<span> KSH </span></p></s>  
                    @else
                    <strong>{{$vodka->price}}<span> KSH </span></strong> 
                    @endif
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="card my-2">
        <strong class="mx-3 my-1"><h2>Beer</h2></strong>
        <div class="row justify-content-center">
            @foreach ($beers as $beer)          
            <div class="col pt-2 mx-2">          
            <a href="/products/{{$beer->slug}}">
                <div class="box">
                    <img src="/storage/{{$beer->image}}" class="card-img-top rounded" style="max-width: 100%;" alt="{{$beer->product_name}}">
                    @if($beer->discount)
                    <div class="text">{{$beer->discount}}%</div>
                    @endif
                </div>
            </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$beer->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;" alt="{{$beer->user->shop_name}}">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$beer->user_id}}" class="link">
                                        <span class="text-dark">{{$beer->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$beer->product_name}} <span>{{$beer->volume}}</span></p>
                    @if ($beer->offer)
                    <strong>{{$beer->offer}}<span> KSH </span></strong> 
                    <s><p>{{$beer->price}}<span> KSH </span></p></s>     
                    @else
                    <strong>{{$beer->price}}<span> KSH </span></strong> 
                    @endif
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="card my-2">
        <strong class="mx-3 my-1"><h2>All Products</h2></strong>
        <div class="row justify-content-center">
            @foreach ($marketplaces as $marketplace)          
            <div class="col pt-2 mx-2">          
            <a href="/products/{{$marketplace->slug}}">
                <div class="box">
                    <img src="/storage/{{$marketplace->image}}" class="card-img-top rounded" style="max-width: 100%;" alt="{{$marketplace->product_name}}">
                    @if($marketplace->discount)
                    <div class="text">{{$marketplace->discount}}%</div>
                    @endif
                </div>
            </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$marketplace->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;" alt="{{$marketplace->user->shop_name}}">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$marketplace->user_id}}" class="link">
                                        <span class="text-dark">{{$marketplace->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$marketplace->product_name}} <span>{{$marketplace->volume}}</span></p>
                    @if ($marketplace->offer)
                    <strong>{{$marketplace->offer}}<span> KSH </span></strong> 
                    <s><p>{{$marketplace->price}}<span> KSH </span></p></s>     
                    @else
                    <strong>{{$marketplace->price}}<span> KSH </span></strong> 
                    @endif
                </div> 
            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
@endsection