<template>
<div>
    <div class="row mb-4">
        <label for="type" class="col-md-4 col-form-label text-md-end">Type</label>
        <div class="col-md-6">
            <select name="type" id="type" class="form-select col-md-6">
                <option value="digital">Speakers</option>
                <option value="hometheatres">Home theatres</option>
                <option value="microphones">Microphones</option>
                <option value="walkietalkies">Walkie Talkies</option>
                <option value="djmixers">DJ Mixers</option>
                <option value="pasystems">PA systems</option>
                <option value="headphones">Headphones & earphones</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>    
    <div class="row mb-4">
        <label for="brand" class="col-md-4 col-form-label text-md-end">Brand</label>
        <div class="col-md-6">
            <select name="brand" id="brand" class="form-select col-md-6">
                <option value="sony">Sony</option>
                <option value="ampex">Ampex</option>
                <option value="pioneer">Pioneer</option>
                <option value="beatsbydre">Beats by Dre</option>
                <option value="harmankardon">Harman Kardon</option>
                <option value="hisense">Hisense</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div> 
    <div class="row mb-4">
        <label for="condition" class="col-md-4 col-form-label text-md-end">Condition</label>
        <div class="col-md-6">
            <select name="condition" id="condition" class="form-select col-md-6">
                <option value="new">new</option>
                <option value="used">used</option>
                <option value="refurbished">refurbished</option>
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