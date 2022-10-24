@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-3 my-1">Wine</strong>
        <div class="row justify-content-center">
            @foreach ($wines as $wine)          
            <div class="col-2 pt-2 mx-2">          
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
</div>
@endsection