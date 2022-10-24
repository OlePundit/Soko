@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-3 my-1">Gin</strong>
        <div class="row justify-content-center">
            @foreach ($gins as $gin)          
            <div class="col-2 pt-2 mx-2">          
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
</div>
@endsection