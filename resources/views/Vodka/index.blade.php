@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-3 my-1">Vodka</strong>
        <div class="row justify-content-center">
            @foreach ($vodkas as $vodka)          
            <div class="col-2 pt-2 mx-2">          
                <a href="/p/{{$vodka->id}}">
                    <div class="box">
                        <img src="/storage/{{$vodka->image}}" class="card-img-top rounded" style="max-width: 100%;">
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
</div>
@endsection