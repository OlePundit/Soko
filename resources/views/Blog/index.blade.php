@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-1 my-1 offer" style="background-color:#000"><h2 class="mx-2">Blog</h2></strong>
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)          
            <div class="col pt-2 mx-2">          
                               
                    <div class="box">
                        <div class="text">{{$blog->title}}%</div>
                        <img src="/storage/{{$blog->image}}" class="card-img-top rounded" style="max-width: 100%;">
                        
                    </div>
                    <p class="font-weight-bold">{{$blog->blog}} </p>
                
                <div class="card-body">
                    <div class="d-flex mb-1 align-items-center">
                        <div style="padding-right: 20px;">
                            <img src="{{$blog->image}}" 
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