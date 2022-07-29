<div>
    <div class="row mb-4">
        <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>
        <div class="col-md-6">
            <select name="category" id="category" class="form-select col-md-6" wire:model = "selectedCategory">
                <option value="">Select category</option>
                @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->category}}</option>
                @endforeach
            </select>
        </div>
    </div>   
    @if(!is_null($subcategories))  
    <div class="row mb-4">
        <label for="subcategory" class="col-md-4 col-form-label text-md-end">Subcategory</label>
        <div class="col-md-6">
            <select name="subcategory" id="subcategory" class="form-select col-md-6" wire:model = "selectedSubcategory">
                <option value="">Select subcategory</option>
                @foreach ($subcategories as $item)
                    <option value="{{$item->id}}">{{$item->subcategory}}</option>
                @endforeach
            </select>
        </div>
    </div> 
    @endif  
                
    <div class="row pt-4">
        <button class="btn btn-warning text-white" wire:loading.attr="disable">Add New Product</button>
        <div wire:loading>
            Hold on...
        </div>
    </div>
</div>


