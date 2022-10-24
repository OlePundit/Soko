@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-3 my-1">whisky</strong>
        <div class="row justify-content-center">
            @foreach ($whiskys as $whisky)          
            <div class="col-2 pt-2 mx-2">          
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
</div>
@endsection