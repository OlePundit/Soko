<template>
<div>
    <div>
        <div class="row mb-4" @click="toggleLiquor">
            <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>
            <div class="col-md-6">
                <select name="category" id ="category" class="form-select col-md-6" required v-model="selectedCategory">
                    <option value="">Select category</option>
                    <option v-for="item in categories" :key="item.id" :value="item.id">{{item.category}}</option>
                </select>
            </div>
        </div>   

        <div class="row mb-4" @click="toggleLaptops">
            <label for="subcategory" class="col-md-4 col-form-label text-md-end">Subcategory</label>
            <div class="col-md-6">
                <select name="subcategory_id" id="subcategories" class="form-select col-md-6" required v-model="selectedSubcategory">
                    <option value="">Select subcategory</option>
                    <option v-for="subcategory in subcategories" :key="subcategory.id" :value="subcategory.id">{{ subcategory.subcategory }}</option>
                </select>
            </div>
        </div>
    </div>
    <liquor-category
    v-if="showLiquorCategory"
    :toggle="toggleLiquor"
    :selectedCategory="selectedCategory"
    >
    </liquor-category> 
    <laptops-subcategory
    v-if="showLaptopsSubcategory"
    :toggle="toggleLaptops"
    :selectedCategory="selectedCategory"
    :selectedSubcategory="selectedSubcategory"
    >
    </laptops-subcategory> 
    <phones-subcategory
    v-if="showPhonesSubcategory"
    :toggle="toggleLaptops"
    :selectedCategory="selectedCategory"
    :selectedSubcategory="selectedSubcategory"
    >
    </phones-subcategory> 
    <salvage-subcategory
    v-if="showSalvageSubcategory"
    :toggle="toggleLaptops"
    :selectedCategory="selectedCategory"
    :selectedSubcategory="selectedSubcategory"
    >
    </salvage-subcategory> 
    <services-category
    v-if="showServicesCategory"
    :toggle="toggleLiquor"
    :selectedCategory="selectedCategory"
    >
    </services-category> 
    <tv-subcategory
    v-if="showTvSubcategory"
    :toggle="toggleLaptops"
    :selectedCategory="selectedCategory"
    :selectedSubcategory="selectedSubcategory"
    >
    </tv-subcategory> 
    <audio-subcategory
    v-if="showAudioSubcategory"
    :toggle="toggleLaptops"
    :selectedCategory="selectedCategory"
    :selectedSubcategory="selectedSubcategory"
    >
    </audio-subcategory> 
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
                selectedCategory : '',
                selectedSubcategory : '',
                showLiquorCategory : false,
                showLaptopsSubcategory : false,
                showPhonesSubcategory : false,
                showSalvageSubcategory : false,
                showServicesCategory : false,
                showTvSubcategory : false,
                showAudioSubcategory : false

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
            },
            toggleLaptops() {
                if (this.selectedSubcategory === 16)
                this.showLaptopsSubcategory = !this.showLaptopsSubcategory
                else if (this.selectedSubcategory === 18)
                this.showPhonesSubcategory = !this.showPhonesSubcategory
                else if (this.selectedSubcategory === 28)
                this.showSalvageSubcategory = !this.showSalvageSubcategory
                else if (this.selectedSubcategory === 19)
                this.showAudioSubcategory = !this.showAudioSubcategory
                else if (this.selectedSubcategory === 20)
                this.showTvSubcategory = !this.showTvSubcategory
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