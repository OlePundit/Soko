@extends('layouts.app')

@section('content')
<div class="container">
    <form action = "/shop/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Shop</h1>
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
            

            <div class="row mb-4">
                <label for="url" class="col-md-4 col-form-label text-md-end">Website (optional)</label>

                <div class="col-md-6">
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->shop->url }}" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <label for="location" class="col-md-4 col-form-label text-md-end">Location</label>

                <div class="col-md-6">
                    <mapbox-address-autofill access-token="pk.eyJ1IjoiZ2xlbm5vIiwiYSI6ImNsYm13ZmwwZzBsa3IzcG1zN2RycmZrMGIifQ.gtbCTCp8pdKshVzvvNUR6Q">
                        <input type="text" class="form-control " name="location" autocomplete="street-address">
                    </mapbox-address-autofill>

                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            


            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-end">Shop Image</label> 

                <div class="col-md-6">
            
                <input type="file" class="form-control-file" id="image" name="image">
                
            @error('image')
            
            <strong>{{ $message }}</strong>
                
            @enderror
            </div>

                        
            <div class="row pt-4">
                <button class="btn btn-primary text-white">Save Shop</button>
            </div>
    

            </div>
        </div>

        </form>
</div>
<script>
mapboxsearch.autofill({
accessToken: 'pk.eyJ1IjoiZ2xlbm5vIiwiYSI6ImNsYm13ZmwwZzBsa3IzcG1zN2RycmZrMGIifQ.gtbCTCp8pdKshVzvvNUR6Q'
})
</script>

@endsection