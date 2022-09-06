<template>
<div>
    <div class="row mb-4" @submit.prevent="storeTv()">
        <label for="type" class="col-md-4 col-form-label text-md-end">Type</label>
        <div class="col-md-6">
            <select name="type" id="type" class="form-select col-md-6" v-model="tvData.type" v-on:change="emitData()">
                <option value="digital">Digital</option>
                <option value="analog">Analog</option>
            </select>
        </div>
    </div>    
    <div class="row mb-4">
        <label for="brand" class="col-md-4 col-form-label text-md-end">Brand</label>
        <div class="col-md-6">
            <select name="brand" id="brand" class="form-select col-md-6" v-model="tvData.brand" v-on:change="emitData()">
                <option value="samsung">Samsung</option>
                <option value="tcl">TCL</option>
                <option value="sony">Sony</option>
                <option value="nokia">Nokia</option>
                <option value="xiaomi">Xiaomi</option>
                <option value="hisense">Hisense</option>
                <option value="skyworth">Skyworth</option>
                <option value="panasonic">Panasonic</option>
                <option value="philips">Philips</option>
                <option value="jvc">JVC</option>
                <option value="asus">Asus</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div> 
    <div class="row mb-4">
        <label for="condition" class="col-md-4 col-form-label text-md-end">Condition</label>
        <div class="col-md-6">
            <select name="condition" id="condition" class="form-select col-md-6" v-model="tvData.condition" v-on:change="emitData()">
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
        props: ['toggle','selectedCategory','selectedSubcategory'],
        data () {
            return {
                tvData: {
                    type : '',
                    brand : '',
                    condition : ''
                }
            }
        },
        methods: {
            storeTv() {
                axios.post('/p',{type:this.type, brand:this.brand, condition:this.condition})
                    .then(response => {
                        console.log(response.data)
                });
            }
        }
    }
</script>