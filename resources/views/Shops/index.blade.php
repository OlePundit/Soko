@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->shop->shopImage()}}" class="rounded-circle w-100">

                
                
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4"> {{ $user->shop_name}} </div>

                   <!-- <connect-button user-id="{{$user->id}}"></connect-button> -->
                </div>

>
                @can ('update', $user->shop)
            
                <a href="/p/create">Add New Product</a>

                @endcan  
            
            </div>
            @can ('update', $user->shop)
            
            <a href="/shop/{{$user->id}}/edit">Edit Shop</a>

            @endcan    
            <div class="d-flex">
                <div style="padding-right: 25px;"><strong>{{$productCount}}</strong> products</div>
                <!--<div style="padding-right: 25px;"><strong>1k</strong> customers</div>-->
        

            </div>
            <div><strong>Juggz</strong></div>
            <div>{{ $user->shop->description}}</div>
            <div><a href="#">{{ $user->shop->url}}</a></div>
        </div>

        <div class="row pt-5">
            @foreach($user->products as $product)
            <div class="col-4 pb-4">
                <a href="/p/{{$product->id}}"><img src="/storage/{{$product->image}}" class="w-100"></a>

            </div>
            
            @endforeach

    </div>
        
</div>
@endsection