<template>
<div>
    <div class="row">
        <label for="image" class="col-md-4 col-form-label text-md-end">Upload portfolio, CV or resume</label> 

        <div class="col-md-6">
    
            <input type="file" class="form-control-file" id="image" name="image">
                 
        </div>
    </div> 
</div>
</template>
<script>
    export default {
        props: ['toggle','selectedCategory']
    }
</script>