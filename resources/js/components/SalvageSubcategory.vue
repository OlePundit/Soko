<template>
<div>
    <div class="row mb-4">
        <label for="type" class="col-md-4 col-form-label text-md-end">Type</label>
        <div class="col-md-6">
            <select name="type" id="type" class="form-select col-md-6">
                <option value="motorcycle">Motorcycle</option>
                <option value="motorcycle">Lorry</option>
                <option value="pickup">Pickup</option>
                <option value="tractor">Tractor</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>    
    <div class="row mb-4">
        <label for="brand" class="col-md-4 col-form-label text-md-end">Brand</label>
        <div class="col-md-6">
            <select name="brand" id="brand" class="form-select col-md-6">
                <option value="toyota">Toyota</option>
                <option value="subaru">Subaru</option>
                <option value="mazda">Mazda</option>
                <option value="mercedes">Mercedes</option>
                <option value="bmw">BMW</option>
                <option value="audi">Audi</option>
                <option value="lexus">Lexus</option>
                <option value="volvo">Volvo</option>
                <option value="honda">Honda</option>
                <option value="isuzu">Isuzu</option>
                <option value="mitsubishi">Mitsubishi</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="mahindra">Mahindra</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>
    <div class="row mb-4">
        <label for="transmission" class="col-md-4 col-form-label text-md-end">Transmission</label>
        <div class="col-md-6">
            <select name="transmission" id="transmission" class="form-select col-md-6">
                <option value="null">Transmission</option>
                <option value="automatic">Automatic</option>
                <option value="manual">Manual</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>  
    <div class="row mb-4">
        <label for="consumption" class="col-md-4 col-form-label text-md-end">Consumption (cc)</label>
        <div class="col-md-6">
            <select name="consumption" id="consumption" class="form-select col-md-6">
                <option value="macos">Less than a 1000</option>
                <option value="1000_1500">1000 - 1500</option>
                <option value="1500_2000">1500 - 2000</option>
                <option value="2000_3000">2000 - 3000</option>
                <option value="3000+">3000+</option>
            </select>
        </div>
    </div>
    <div class="row mb-4">
        <label for="numberplate" class="col-md-4 col-form-label text-md-end">Number Plate</label> 

        <div class="col-md-6">
    
        <input type="text" class="form-control" id="numberplate" name="numberplate">

        </div>
        

    </div>
    <div class="row mb-4">
        <label for="yom" class="col-md-4 col-form-label text-md-end">Year of Manufacture</label> 

        <div class="col-md-6">
    
        <input type="date" class="form-control" id="yom" name="yom">

        </div>
        

    </div>
    <div class="row mb-4">
        <label for="condition" class="col-md-4 col-form-label text-md-end">Condition</label>
        <div class="col-md-6">
            <select name="condition" id="condition" class="form-select col-md-6">
                <option value="new">new</option>
                <option value="foreignused">foreign used</option>
                <option value="locallyused">locally used</option>
                <option value="salvage">salvage</option>
            </select>
        </div>
    </div>   
</div>
</template>
<script>
    export default {
        props: ['toggle','selectedCategory','selectedSubcategory']
    }
</script>