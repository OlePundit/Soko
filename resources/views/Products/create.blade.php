@extends('layouts.app')

@section('content')   
    <div>
    <create-product></create-product> 
    <div class="containter">
        <form action = "/p" enctype="multipart/form-data" method="post">
            @csrf
        <div class="row">
            <div class = "col-8 offset-2">
                <div class="row mb-4">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Product Image</label> 

                    <div class="col-md-6">

                        <input type="file" class="form-control-file" id="image" name="image" value="image">
                        
                    </div>
                </div> 
                <div class="row pt-4">
                    <button class="btn btn-warning text-white">Add Product Image</button>
                </div> 
            </div>
            
        </div>
        </form>
    </div>
    </div>
@endsection