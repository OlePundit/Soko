@extends('layouts.show')

@section('content')
<div class="container">
    <div class = "row">
        <div class="col-6">
            <img itemprop="image" src="/storage/{{$product->image}}" class="w-1000 h-50 rounded" style="max-width:200%;">
        </div>
        <div class="col-4" itemscope itemtype="https://schema.org/Product">
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
                                    <span class="text-dark">{{ $product->user->name}}

                                    </span>
                                </a>
                            </strong>
                        </h2>
                    </div>
                </div>
            </div>

            <hr>

            <p itemprop="name">{{$product->product_name}} <span>{{$product->volume}}</span></p>
            @if($product->offer)
            <span>{{$product->offer}}<strong> Ksh</strong> </span>
            <s><p>{{$product->price}}<span> KSH </span></p></s> 
            @else 
            <p itemprop="price" content="{{$product->price}}"><strong></strong> {{$product->price}}<span itemprop="priceCurrency" content="KSH"> Ksh </span></p> 
            @endif
            <p><link itemprop="availability" href="https://schema.org/InStock" />{{$product->stock}}</p>
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