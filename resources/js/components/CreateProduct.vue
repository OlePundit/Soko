<template>
   <div>
        <div class="row mb-4">
            <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>
            <div class="col-md-6">
                <select name="category" id ="category" class="form-select col-md-6">
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
                    <option value="">Subcategory A</option>
                </select>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
                categories : [],
                subcategories : []
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