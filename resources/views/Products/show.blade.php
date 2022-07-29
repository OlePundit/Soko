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
                        <strong>
                            <a href="/shop/{{$product->user_id}}">
                                 <span class="text-dark">{{ $product->user->shop_name}}

                                </span>
                            </a>
                        </strong>
                    </div>
                </div>
            </div>

            <hr>

            <p>{{$product->product_name}} <span>{{$product->volume}}</span></p>
            <p><strong> Ksh </strong> {{$product->price}}<span></span></p>
            <p>{{$product->stock}}</p>
            <p>{{$product->description}}</p>
                
        </div>
    </div>
</div>
@endsection