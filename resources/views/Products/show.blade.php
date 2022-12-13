@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row">
        <div class="col-6">
            <img src="/storage/{{$product->image}}" class="w-1000 h-50 rounded" style="max-width:200%;">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div style="padding-right: 20px;">
                     <img src="{{$product->user->shop->shopImage()}}" 
                     class="rounded-circle w-100" 
                     style="max-width: 40px;">
                </div>
                <div>
                    <div>
                        <h2>
                            <strong>
                                <a href="/shop/{{$product->user_id}}">
                                    <span class="text-dark">{{ $product->user->shop_name}}

                                    </span>
                                </a>
                            </strong>
                        </h2>
                    </div>
                </div>
            </div>

            <hr>

            <strong><h1>{{$product->product_name}} <span>{{$product->volume}}</span></h1></strong>
            @if($product->offer)
             {{$product->offer}}<span><strong> Ksh</strong> </span>
            <s><p>{{$product->price}}<span> KSH </span></p></s> 
            @else 
            <p><strong></strong> {{$product->price}}<span> Ksh </span></p> 
            @endif
            <p>{{$product->stock}}</p>
            <p>{{$product->description}}</p>
            <div>
                @can ('update', $product)   
                <a href="/p/{{$product->id}}/edit" class="link mx-1 mt-2">
                <button type="button" class="btn btn-primary">Edit Product</button>
                </a>
                @endcan             
            </div>
                
        </div>
    </div>
</div>
@endsection