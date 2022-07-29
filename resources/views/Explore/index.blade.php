@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)          
        <div class="col-lg-2 col-md-3 col-xs-4 pt-4 card mx-2 my-2 ">
            
        <a href="/p/{{$product->id}}"><img src="/storage/{{$product->image}}" class="card-img-top rounded"></a>
                <div class="card-body">
                    <div class="d-flex align-items-center card-title">
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

                    <p class="card-text">{{$product->product_name}} <span>{{$product->volume}}</span></p>
                    <p>{{$product->price}}<span> KSH </span></p>
                    
                    
                </div>
            
        </div>
        @endforeach
    
    </div>
</div>


@endsection