@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row">
        <div class="col-6">
            <img src="/storage/{{$slug->image}}" class="w-1000 h-50 rounded" style="max-width:200%;">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div style="padding-right: 20px;">
                     <img src="{{$slug->user->shop->shopImage()}}" 
                     class="rounded-circle w-100" 
                     style="max-width: 40px;">
                </div>
                <div>
                    <div>
                        <h2>
                            <strong>
                                <a href="/shop/{{$slug->user_id}}">
                                    <span class="text-dark">{{ $slug->user->shop_name}}

                                    </span>
                                </a>
                            </strong>
                        </h2>
                    </div>
                </div>
            </div>

            <hr>

            <strong><h1>{{$slug->product_name}} <span>{{$slug->volume}}</span></h1></strong>
            @if($slug->offer)
             {{$slug->offer}}<span><strong> Ksh</strong> </span>
            <s><p>{{$slug->price}}<span> KSH </span></p></s> 
            @else 
            <p><strong></strong> {{$slug->price}}<span> Ksh </span></p> 
            @endif
            <p>{{$slug->stock}}</p>
            <p>{{$slug->description}}</p>
            <div>
                @can ('update', $slug)   
                <a href="/products/{{$slug->slug}}/edit" class="link mx-1 mt-2">
                <button type="button" class="btn btn-primary">Edit Product</button>
                </a>
                @endcan             
            </div>
                
        </div>
    </div>
</div>
@endsection