@extends('layouts.app')

@section('content')
<div class="container">
    <diiv class = "row">
        <div class="col-8">
        <img src="/storage/{{$product->image}}" class="w-100">
        </div>
    
    <div class="col-4">
        <div>
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
                        <a href="#" style="padding-left: 20px;">
                            Connect
                        </a>
                    </div>
                </div>
            </div>

            <hr>

            <p>{{$product->product_name}} <span>{{$product->volume}}</span></p>
            <p>{{$product->price}}<span> KSH </span></p>
            <p>{{$product->stock}}</p>
            <p>{{$product->description}}</p>
            
        </div>
    </div>
</div>
@endsection