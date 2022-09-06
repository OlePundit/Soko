<template>
<div>
    <div class="row" @submit.prevent="storeServices()">
        <label for="attachments" class="col-md-4 col-form-label text-md-end">Upload portfolio, CV or resume</label> 

        <div class="col-md-6">
    
            <input type="file" class="form-control-file" id="attachments" name="attachments" @change="onFileChange">
                
        </div>
    </div> 
    <div class="row mb-4">
        <label for="description" class="col-md-4 col-form-label text-md-end" >Description</label> 

        <div class="col-md-6">
    
        <input type="text" class="form-control" id="description" name="description" placeholder="I  will..." v-model="servicesData.description" v-on:change="emitData()">

        </div>
    </div>

    <div class="row">
        <label for="image" class="col-md-4 col-form-label text-md-end">Product Image</label> 

        <div class="col-md-6">
    
            <input type="file" class="form-control-file" id="image" name="image" @change="onFileChange">
            <div>Upload an image that best describes the service you are offering</div>
        </div>
    </div>   
</div>

</template>
<script>
    export default {
        props: ['toggle','selectedCategory'],
        data () {
            return {
                servicesData: {
                    attachments : {},
                    description : '',
                    image : null
                }
            }
        },
        methods: {
            onFileChange(e) {
            this.image = e.target.files[0]
            },
            
            emitData() {
                this.$emit('childToParent', this.image)
            } 
        }
    }
</script>