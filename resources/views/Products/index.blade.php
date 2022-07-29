@extends('layouts.app')

@section('content')
<div class="container">
<div class="card my-2">
        <strong class="mx-3 my-1">Wine</strong>
        <div class="row justify-content-center">
            @foreach ($wines as $wine)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$wine->id}}"><img src="/storage/{{$wine->image}}" class="card-img-top rounded" style="max-width: 100%;"></a>
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
                    <strong>{{$wine->price}}<span> KSH </span></strong> 
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="card my-2">
        <strong class="mx-3 my-1">Vodka</strong>
        <div class="row justify-content-center">
            @foreach ($vodkas as $vodka)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$vodka->id}}"><img src="/storage/{{$vodka->image}}" class="card-img-top rounded" style="max-width: 100%;"></a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$vodka->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;">
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
                    <strong>{{$vodka->price}}<span> KSH </span></strong> 
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
            <a href="/p/{{$whisky->id}}"><img src="/storage/{{$whisky->image}}" class="card-img-top rounded" style="max-width: 100%;"></a>
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
                    <strong>{{$whisky->price}}<span> KSH </span></strong> 
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    <div class="card my-2">
        <strong class="mx-3 my-1">All Products</strong>
        <div class="row justify-content-center">
            @foreach ($gins as $gin)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$gin->id}}"><img src="/storage/{{$gin->image}}" class="card-img-top rounded" style="max-width: 100%;"></a>
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
                    <strong>{{$gin->price}}<span> KSH </span></strong> 
                </div> 
            </div>
            @endforeach
        </div>
    </div>

    <div class="card my-2">
        <strong class="mx-3 my-1">Mixers</strong>
        <div class="row justify-content-center">
            @foreach ($mixers as $mixer)          
            <div class="col pt-2 mx-2">          
            <a href="/p/{{$mixer->id}}"><img src="/storage/{{$mixer->image}}" class="card-img-top rounded" style="max-width: 100%;"></a>
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$mixer->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    <a href="/shop/{{$mixer->user_id}}" class="link">
                                        <span class="text-dark">{{$mixer->user->shop_name}}</span>
                                    </a>
                                </strong>   
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-bold">{{$mixer->product_name}} <span>{{$mixer->volume}}</span></p>
                    <strong>{{$mixer->price}}<span> KSH </span></strong> 
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
            <a href="/p/{{$beer->id}}"><img src="/storage/{{$beer->image}}" class="card-img-top rounded" style="max-width: 100%;"></a>
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
                    <strong>{{$beer->price}}<span> KSH </span></strong> 
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
            <a href="/p/{{$marketplace->id}}"><img src="/storage/{{$marketplace->image}}" class="card-img-top rounded" style="max-width: 100%;"></a>
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
                    <strong>{{$marketplace->price}}<span> KSH </strong></p> 
                </div> 
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection