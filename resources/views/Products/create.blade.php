@extends('layouts.app')

@section('content')
<div class="container">
    <form action = "/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row text-center">
                <h2>Create new product</h2>
            </div>
            <div class="row mb-4">
                <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Name</label>

                <div class="col-md-6">
                    <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name" autofocus>

                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <create-product></create-product>    
             


            <div class="row mb-4">
                <label for="ad_status" class="col-md-4 col-form-label text-md-end">Ad Status</label>
                <div class="col-md-6">
                    <select name="ad_status" id="ad_status" class="form-select col-md-6">
                        <option value="null">Ad status</option>
                        <option value="5ltr">available</option>
                        <option value="1ltr">unavailable</option>
                    </select>
                </div>
            </div>    

          

            <div class="row mb-4">
                <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>

                <div class="col-md-6">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-4">
                <label for="description" class="col-md-4 col-form-label text-md-end" >Description</label> 

                <div class="col-md-6">
            
                <input type="text" class="form-control" id="description" name="description">
                <div>Describe your product or service</div>

                </div>
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-end">Product Image</label> 

                <div class="col-md-6">
            
                    <input type="file" class="form-control-file" id="image" name="image">
                    <div>If its a service, then upload an image that best describes the service you are offering</div>
                   
                @error('image')
                
                <strong>{{ $message }}</strong>
                    
                @enderror
                </div>
            </div>

                    
        <div class="row pt-4">
            <button class="btn btn-warning text-white">Add New Post</button>
        </div>


        </div>
    </div>

    </form>
</div>
@endsection