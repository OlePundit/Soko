<template>
<div>
    <div class="row mb-4" @submit.prevent="storePhones()">
        <label for="type" class="col-md-4 col-form-label text-md-end">Type</label>
        <div class="col-md-6">
            <select name="type" id="type" class="form-select col-md-6" v-model="phoneData.type" v-on:change="emitData()">
                <option value="phone">Phone</option>
                <option value="table">Tablet</option>
            </select>
        </div>
    </div>    
    <div class="row mb-4">
        <label for="brand" class="col-md-4 col-form-label text-md-end">Brand</label>
        <div class="col-md-6">
            <select name="brand" id="brand" class="form-select col-md-6" v-model="phoneData.brand" v-on:change="emitData()">
                <option value="samsung">Samsung</option>
                <option value="sony">Sony</option>
                <option value="nokia">Nokia</option>
                <option value="xiaomi">Xiaomi</option>
                <option value="tecno">Tecno</option>
                <option value="apple">Apple</option>
                <option value="oppo">Oppo</option>
                <option value="itel">Itel</option>
                <option value="huawei">Huawei</option>
                <option value="lg">LG</option>
                <option value="google">Google</option>
                <option value="asus">Asus</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div> 
    <div class="row mb-4">
        <label for="storageCapacity" class="col-md-4 col-form-label text-md-end">Storoge Capacity</label>
        <div class="col-md-6">
            <select name="storageCapacity" id="storageCapacity" class="form-select col-md-6" v-model="phoneData.storageCapacity" v-on:change="emitData()">
                <option value="64GB">64GB</option>
                <option value="32GB">256GB</option>
                <option value="256GB">256GB</option>
                <option value="16GB">16GB</option>
                <option value="128GB">128GB</option>
                <option value="lessthan4">Less than 4GB</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div> 
    <div class="row mb-4">
        <label for="memory" class="col-md-4 col-form-label text-md-end">Memory (RAM)</label>
        <div class="col-md-6">
            <select name="memory" id="memory" class="form-select col-md-6" v-model="phoneData.memory" v-on:change="emitData()">
                <option value="512mb">512MB</option>
                <option value="1gb">1GB</option>
                <option value="2gb">2GB</option>
                <option value="4gb">4GB</option>
                <option value="6gb">6GB</option>
            </select>
        </div>
    </div>    
    <div class="row mb-4">
        <label for="display" class="col-md-4 col-form-label text-md-end" v-model="phoneData.display" v-on:change="emitData()">Display</label>
        <div class="col-md-6">
            <select name="display" id="display" class="form-select col-md-6">
                <option value="6inches+">6"+</option>
                <option value="5inches">5"</option>
                <option value="4inches+">4"</option>
                <option value="lessthat4inches">less that 4"</option>
            </select>
        </div>
    </div> 
    <div class="row mb-4">
        <label for="condition" class="col-md-4 col-form-label text-md-end" v-model="phoneData.condition" v-on:change="emitData()">Condition</label>
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
        props: ['toggle','selectedCategory','selectedSubcategory'],
        data () {
            return {
                phoneData: {
                    type : '',
                    brand : '',
                    storageCapacity : '',
                    memory : '',
                    display : '',
                    condition : ''
                }
            }
        },
        methods: {
           emitData() {
                this.$emit('childToParent', this.phoneData)
            } 
        }
    }
</script>