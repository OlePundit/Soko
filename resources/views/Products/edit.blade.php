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
                    <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') ?? $product->product_name }}" required autocomplete="product_name" autofocus>

                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-4">
                <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>
                <div class="col-md-6">
                    <select name="category" id="category" class="form-select col-md-6">
                        <option value="{{ old('category') ?? $product->category}}">{{ old('category') ?? $product->category}}</option>
                        <option value="wine">Wine</option>
                        <option value="whisky">Whisky</option>
                        <option value="brandy">Brandy</option>
                        <option value="scotch">Scotch</option>
                        <option value="spirit">Spirit</option>
                        <option value="gin">Gin</option>
                        <option value="vodka">Vodka</option>
                        <option value="beer">Beer</option>
                        <option value="rum">Rum</option>
                        <option value="mixers">Mixers</option>
                        <option value="bourbon">Bourbon</option>
                        <option value="cognac">Cognac</option>
                        <option value="cognac">Cream</option>
                        <option value="cognac">Mixers</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label for="volume" class="col-md-4 col-form-label text-md-end">Volume</label>
                <div class="col-md-6">
                    <select name="volume" id="volume" class="form-select col-md-6">
                        <option value="{{ old('volume') ?? $product->volume}}">{{ old('volume') ?? $product->volume}}</option>
                        <option value="5ltr">5ltr</option>
                        <option value="1ltr">1ltr</option>
                        <option value="750ml">750ml</option>
                        <option value="500ml">500ml</option>
                        <option value="250ml">250ml</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div> 
            <div class="row mb-4">
                <label for="stock" class="col-md-4 col-form-label text-md-end">Stock status</label>
                <div class="col-md-6">
                    <select name="stock" id="stock" class="form-select col-md-6">
                        <option value="{{ old('stock') ?? $product->stock}}">{{ old('stock') ?? $product->stock}}</option>
                        <option value="available">available</option>
                        <option value="unavailable">unavailable</option>
                    </select>
                </div>
            </div>  
            <div class="row mb-4">
                <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>

                <div class="col-md-6">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') ?? $product->price }}" required autocomplete="price" autofocus>

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
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $product->description}}" required autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <label for="offer" class="col-md-4 col-form-label text-md-end">Offer</label>

                <div class="col-md-6">
                <h5>Enter discounted price (optional)</h5>
                    <input id="offer" type="text" class="form-control @error('offer') is-invalid @enderror" name="offer" value="{{ old('offer') ?? $product->offer}}" required autocomplete="offer" autofocus>

                    @error('offer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

                        
            <div class="row pt-4">
                <button class="btn btn-primary text-white">Save Product</button>
            </div>
    

            </div>
        </div>

        </form>
</div>
@endsection