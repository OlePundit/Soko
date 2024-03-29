@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-row justify-content-center">
        <div class="col-lg-4 col-md-6 col-xs-6 pt-5">
            <div class="d-flex align-items-center pb-3">
                <strong> {{ $user->shop_name}} </strong>
                <connect-button user-id="{{$user->id}}" connects="{{$connects}}"></connect-button>
            </div>
            <div>{{ $user->shop->description}}</div>
            <div><a href="#">{{ $user->shop->url}}</a></div>
            <div class="d-flex">
                <div style="padding-right: 25px;"><strong>{{$productCount}}</strong> products</div>
                <div class="pr-5"><strong>{{ $connectsCount }}</strong> connects</div>
        

            </div>
            
            <div class="d-flex">
                
                @can ('update', $user->shop)
            
                <a href="/p/create" class="link mt-2"><button type="button" class="btn btn-light">Add product</button></a>

                @endcan  
            
            
                @can ('update', $user->shop)
                
                <a href="/shop/{{$user->id}}/edit" class="link mx-1 mt-2">
                <button type="button" class="btn btn-light">Edit Shop</button>
                </a>
                @endcan  
            </div>

              
        </div>
        <div class="col-lg-3 col-md-4 col-xs-4 p-5">
            <img src="{{$user->shop->shopImage()}}" class="rounded-circle w-100" style="max-width:80%;">    
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->products as $product)
        <div class="col-3 pb-4">
            <a href="/p/{{$product->id}}"><img src="/storage/{{$product->image}}" class="w-100 rounded"></a>

        </div>     
        @endforeach
    </div>
        
</div>
@endsection