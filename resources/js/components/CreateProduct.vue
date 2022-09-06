<template>
<div>
    <div class="containter">
        <form action = "/p" enctype="multipart/form-data" method="post" @submit.prevent="authentication">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row text-center">
                        <h2>Create new product</h2>
                    </div>
                    
                    <div class="row mb-4">
                        <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Name</label>

                        <div class="col-md-6">
                            <input id="product_name" type="text" class="form-control" name="product_name" v-model="product_name">

                        </div>
                    </div>
                    <div class="row mb-4" @click="toggleLiquor" @submit.prebent="storeProduct()">
                        <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>
                        <div class="col-md-6" @click="toggleDescription">
                            <select name="category" id ="category" class="form-select col-md-6" required v-model="selectedCategory">
                                <option value="">Select category</option>
                                <option v-for="item in categories" :key="item.id" :value="item.id">{{item.category}}</option>
                            </select>
                        </div>
                    </div>   

                    <div class="row mb-4" @click="toggleLaptops" v-if="showSubcategories">
                        <label for="subcategory" class="col-md-4 col-form-label text-md-end">Subcategory</label>
                        <div class="col-md-6">
                            <select name="subcategory_id" id="subcategories" class="form-select col-md-6" required v-model="selectedSubcategory">
                                <option value="">Select subcategory</option>
                                <option v-for="subcategory in subcategories" :key="subcategory.id" :value="subcategory.id">{{ subcategory.subcategory }}</option>
                            </select>
                        </div>
                    </div>
                    <liquor-category
                    v-if="showLiquorCategory"
                    :toggle="toggleLiquor"
                    :selectedCategory="selectedCategory"
                    v-on:childToParent="onLiquorClick"
                    >
                    </liquor-category> 
                    <laptops-subcategory
                    v-if="showLaptopsSubcategory"
                    :toggle="toggleLaptops"
                    :selectedCategory="selectedCategory"
                    :selectedSubcategory="selectedSubcategory"
                    v-on:childToParent="onLaptopClick"
                    >
                    </laptops-subcategory> 
                    <phones-subcategory
                    v-if="showPhonesSubcategory"
                    :toggle="toggleLaptops"
                    :selectedCategory="selectedCategory"
                    :selectedSubcategory="selectedSubcategory"
                    v-on:childToParent="onPhoneClick"
                    >
                    </phones-subcategory> 
                    <salvage-subcategory
                    v-if="showSalvageSubcategory"
                    :toggle="toggleLaptops"
                    :selectedCategory="selectedCategory"
                    :selectedSubcategory="selectedSubcategory"
                    v-on:childToParent="onSalvageClick"
                    >
                    </salvage-subcategory> 
                    <services-category
                    v-if="showServicesCategory"
                    :toggle="toggleLiquor"
                    :selectedCategory="selectedCategory"
                    v-on:childToParent="onServicesClick"
                    >
                    </services-category> 
                    <tv-subcategory
                    v-if="showTvSubcategory"
                    :toggle="toggleLaptops"
                    :selectedCategory="selectedCategory"
                    :selectedSubcategory="selectedSubcategory"
                    v-on:childToParent="onTvClick"
                    >
                    </tv-subcategory> 
                    <audio-subcategory
                    v-if="showAudioSubcategory"
                    :toggle="toggleLaptops"
                    :selectedCategory="selectedCategory"
                    :selectedSubcategory="selectedSubcategory"
                    v-on:childToParent="onAudioClick"
                    >
                    </audio-subcategory> 
                    <div class="row mb-4">
                        <label for="ad_status" class="col-md-4 col-form-label text-md-end">Ad Status</label>
                        <div class="col-md-6">
                            <select name="ad_status" id="ad_status" class="form-select col-md-6" v-model="ad_status">
                                <option value="null">Ad status</option>
                                <option value="5ltr">available</option>
                                <option value="1ltr">unavailable</option>
                            </select>
                        </div>
                    </div> 
                    <div class="row mb-4">
                        <label for="description" class="col-md-4 col-form-label text-md-end" >Description</label> 

                        <div class="col-md-6">

                        <input type="text" class="form-control" id="description" name="description" v-model="description">

                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>

                        <div class="col-md-6">
                            <input id="price" type="text" class="form-control" name="price" v-model="price">
                        </div>
                    </div>



                    <div class="row pt-4">
                        <button class="btn btn-warning text-white">Add New Product</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
   
</template>
<script>
import LiquorCategory from '../components/LiquorCategory.vue'

    export default {
        components: {
            LiquorCategory
        },
        data () {
            return{
                categories : {},
                subcategories : {},
                product_name : '',
                price : '',
                description : '',
                selectedCategory : '',
                selectedSubcategory : '',
                showLiquorCategory : false,
                showLaptopsSubcategory : false,
                showPhonesSubcategory : false,
                showSalvageSubcategory : false,
                showServicesCategory : false,
                showTvSubcategory : false,
                showAudioSubcategory : false,
                showSubcategories : true,
                audioData : {},
                laptopData : {},
                liquorData : {},
                phoneData : {},
                salvageData : {},
                servicesData : {},
                tvData : {},
                ad_status : ''

            }
        },
        watch : {
            selectedCategory : function(value) {
                axios.get('/api/subcategories?categories_id=' + this.selectedCategory)
                .then(response => {
                    this.subcategories = response.data.data;
                });
            }
        },
        methods: {
            toggleLiquor() {
                if (this.selectedCategory === 1) 
                this.showLiquorCategory = !this.showLiquorCategory
                else if (this.selectedCategory === 8)
                this.showServicesCategory = !this.showServicesCategory
                else if (this.selectedCategory > 9)
                this.showSubcategories = !this.showSubcategories
            },
            toggleLaptops() {
                if (this.selectedSubcategory === 18)
                this.showLaptopsSubcategory = !this.showLaptopsSubcategory
                else if (this.selectedSubcategory === 21)
                this.showPhonesSubcategory = !this.showPhonesSubcategory
                else if (this.selectedSubcategory === 31 || this.selectedSubcategory === 32)
                this.showSalvageSubcategory = !this.showSalvageSubcategory
                else if (this.selectedSubcategory === 22)
                this.showAudioSubcategory = !this.showAudioSubcategory
                else if (this.selectedSubcategory === 23)
                this.showTvSubcategory = !this.showTvSubcategory
            },
            toggleDescription() {
                if (this.selectedCategory === 8) 
                this.showDescriptionInp = !this.showDescriptionInp
            },
            onAudioClick (value) {
                this.audioData = value
            },
            onLaptopClick (value) {
                this.laptopData = value
            },
            onLiquorClick (value) {
                this.liquorData = value
            },
            onPhoneClick (value) {
                this.phoneData = value
            },
            onSalvageClick (value) {
                this.salvageData = value
            },
            onTvClick (value) {
                this.tvData = value
            },
            authentication() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/p', this.product_name, this.price,
                     this.description, this.selectedCategory, 
                     this.selectedSubcategory, this.audioData, this.laptopData, 
                     this.liquorData, this.phoneData, this.SalvageData, 
                     this.servicesData, this.tvData, this.ad_status)
                     .then(response => {
                        console.log(response);
                     });
                });
            }
        },

        mounted() {
            axios.get('/api/categories')
            .then(response => {
                this.categories = response.data.data;
            });
        }
    }
</script>