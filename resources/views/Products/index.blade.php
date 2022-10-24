@extends('layouts.app')

@section('content')
<div class="container">
<div class="card my-2">
        <strong class="mx-3 my-1">Top Offers</strong>
        <div class="row justify-content-center">
            @foreach ($discounts as $discount)          
            <div class="col pt-2 mx-2">          
                <a href="/p/{{$discount->id}}">
                    <div class="box">
                        <img src="/storage/{{$discount->image}}" class="card-img-top rounded" style="max-width: 100%;">
                        <div class="text">{{$discount->discount}}%</div>
                    </div>
                </a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$discount->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;">
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
    <div class="card my-2">
        <strong class="mx-3 my-1">Wine</strong>
        <div class="row justify-content-center">
            @foreach ($wines as $wine)          
            <div class="col pt-2 mx-2">          
                <a href="/p/{{$wine->id}}">
                    <div class="box">
                        <img src="/storage/{{$wine->image}}" class="card-img-top rounded" style="max-width: 100%;">
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
                            style="max-width: 40px;">
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
        <strong class="mx-3 my-1">Whisky</strong>
        <div class="row justify-content-center">
            @foreach ($whiskys as $whisky)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$whisky->id}}">
                <div class="box">
                    <img src="/storage/{{$whisky->image}}" class="card-img-top rounded" style="max-width: 100%;">
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
                            style="max-width: 40px;">
                            
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
        <strong class="mx-3 my-1">Gin</strong>
        <div class="row justify-content-center">
            @foreach ($gins as $gin)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$gin->id}}">
                <div class="box">
                    <img src="/storage/{{$gin->image}}" class="card-img-top rounded" style="max-width: 100%;">
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
                            style="max-width: 40px;">
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
        <strong class="mx-3 my-1">Beer</strong>
        <div class="row justify-content-center">
            @foreach ($beers as $beer)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$beer->id}}">
                <div class="box">
                    <img src="/storage/{{$beer->image}}" class="card-img-top rounded" style="max-width: 100%;">
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
                            style="max-width: 40px;">
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
        <strong class="mx-3 my-1">All Products</strong>
        <div class="row justify-content-center">
            @foreach ($marketplaces as $marketplace)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$marketplace->id}}">
                <div class="box">
                    <img src="/storage/{{$marketplace->image}}" class="card-img-top rounded" style="max-width: 100%;">
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
                            style="max-width: 40px;">
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
@endsection