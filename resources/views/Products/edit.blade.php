@extends('layouts.app')

@section('content')
<div class="container">
    <form action = "/p/{{$product->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Product</h1>
            </div>
            <div class="row mb-4">
                <label for="product_name" class="col-md-4 col-form-label text-md-end">Product name</label>

                <div class="col-md-6">
                    <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') ?? $user->shop->product_name }}" required autocomplete="product_name" autofocus>

                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
             <div class="row mb-4">
                <label for="category" class="col-md-4 col-form-label text-md-end">category</label>

                <div class="col-md-6">
                    <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') ?? $user->shop->category}}" required autocomplete="category" autofocus>

                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-4">
                <label for="volume" class="col-md-4 col-form-label text-md-end">volume</label>

                <div class="col-md-6">
                    <input id="volume" type="text" class="form-control @error('volume') is-invalid @enderror" name="volume" value="{{ old('volume') ?? $user->shop->volume}}" required autocomplete="volume" autofocus>

                    @error('volume')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-4">
                <label for="stock" class="col-md-4 col-form-label text-md-end">stock</label>

                <div class="col-md-6">
                    <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') ?? $user->shop->stock}}" required autocomplete="stock" autofocus>

                    @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                <div class="col-md-6">
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->shop->description}}" required autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-end">Product Image</label> 

                <div class="col-md-6">
            
                <input type="file" class="form-control-file" id="image" name="image">
                            
            @error('image')
            
             <strong>{{ $message }}</strong>
                
             @enderror
            </div>

                        
            <div class="row pt-4">
                <button class="btn btn-warning text-white">Save Product</button>
            </div>
    

            </div>
        </div>

        </form>
</div>
@endsection