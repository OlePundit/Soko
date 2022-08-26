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

        <div class="row mb-4">
            <label for="subcategory" class="col-md-4 col-form-label text-md-end">Subcategory</label>
            <div class="col-md-6">
                <select name="subcategory_id" id="subcategories" class="form-select col-md-6">
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
                showLiquorCategory : false
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