@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-2">
        <strong class="mx-1 my-1 center"><h2 class="mx-2">Blog</h2></strong>
        <div class="justify-content-center">
            @foreach ($blogs as $blog)          
            <div class="col pt-2 mx-2">          
                               
                <div class="mb-3">
                    <h1>{{$blog->title}}</h1>
                    <img src="/storage/{{$blog->image}}" class="card-img-top rounded" style="max-width: 50%;">
                    
                </div>
                <div class="col-lg-8 col-md-6 col-sm-10 col-xs-12 blog">{!! $blog->blog !!}</div>
                
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$blog->user->shop->shopImage()}}" 
                            class="rounded-circle w-100" 
                            style="max-width: 40px;">
                        </div>       
                        <div>
                            <div>
                                <strong>
                                    
                                    <span class="text-dark">{{$blog->author}}</span>
                                    
                                </strong>   
                            </div>
                        </div>
                    </div>
                    
                </div> 
            </div>
            @endforeach
        </div>
    </div>    
</div>

@endsection