@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-3 my-1">Beer</strong>
        <div class="row justify-content-center">
            @foreach ($beers as $beer)          
            <div class="col-2 pt-2 mx-2">          
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
</div>
@endsection