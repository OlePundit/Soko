<template>
<div>
    <div class="row mb-4">
        <label for="type" class="col-md-4 col-form-label text-md-end">Type</label>
        <div class="col-md-6">
            <select name="type" id="type" class="form-select col-md-6" v-model="laptopData.type" v-on:change="emitdata()">
                <option value="laptop">Laptop</option>
                <option value="ultrabook">ultrabook</option>
                <option value="mini_laptop">minilaptop</option>
                <option value="desktop">desktop</option>
            </select>
        </div>
    </div>    
    <div class="row mb-4">
        <label for="brand" class="col-md-4 col-form-label text-md-end">Brand</label>
        <div class="col-md-6">
            <select name="brand" id="brand" class="form-select col-md-6" v-model="laptopData.brand" v-on:change="emitdata()">
                <option value="dell">DELL</option>
                <option value="hp">HP</option>
                <option value="mac">Mac</option>
                <option value="toshiba">Toshiba</option>
                <option value="lenovo">Lenovo</option>
                <option value="mac">Mac</option>
                <option value="sony">Sony</option>
                <option value="samsung">Samsung</option>
                <option value="acer">Acer</option>
                <option value="lg">LG</option>
                <option value="asus">Asus</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>
    <div class="row mb-4">
        <label for="processor" class="col-md-4 col-form-label text-md-end">Processor</label>
        <div class="col-md-6">
            <select name="processor" id="processor" class="form-select col-md-6" v-model="laptopData.processor" v-on:change="emitdata()">
                <option value="null">Processor</option>
                <option value="intelpentium">Intel Pentium</option>
                <option value="Intelceleron">intel Celeron</option>
                <option value="core2">Core 2 Duo</option>
                <option value="corei3">Core i3</option>
                <option value="corei5">Core i5</option>
                <option value="corei7">Core i7</option>
                <option value="corei9">Core i9</option>
                <option value="applem2">Apple M2</option>
                <option value="applem1">Apple M1</option>
                <option value="amdryzen">AMD Ryzen</option>
                <option value="amda8">AMD A8</option>
                <option value="amda6">AMD A6</option>
                <option value="amda10">AMD A10</option>
                <option value="amda4">AMD A4</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>  
    <div class="row mb-4">
        <label for="operatingSystem" class="col-md-4 col-form-label text-md-end">Operating System</label>
        <div class="col-md-6">
            <select name="0peratingSystem" id="operatingSystem" class="form-select col-md-6" v-model="laptopData.operatingSystem" v-on:change="emitdata()">
                <option value="macos">Mac Os</option>
                <option value="linux">Linux</option>
                <option value="windowsvista">Windows Vista</option>
                <option value="windowsxp">Windows XP</option>
                <option value="windows7">Windows 7</option>
                <option value="windows8">Windows 8</option>
                <option value="windows10">Windows 10</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>
    <div class="row mb-4">
        <label for="storageType" class="col-md-4 col-form-label text-md-end">Storoge Type</label>
        <div class="col-md-6">
            <select name="storageType" id="storageType" class="form-select col-md-6" v-model="laptopData.storageType" v-on:change="emitdata()">
                <option value="HDD">HDD</option>
                <option value="SDD">SDD</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>    
    <div class="row mb-4">
        <label for="storageCapacity" class="col-md-4 col-form-label text-md-end">Storoge Capacity</label>
        <div class="col-md-6">
            <select name="storageCapacity" id="storageCapacity" class="form-select col-md-6" v-model="laptopData.storageCapacity" v-on:change="emitdata()">
                <option value="256">256</option>
                <option value="512">512</option>
                <option value="1TB">1TB</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div> 
    <div class="row mb-4">
        <label for="memory" class="col-md-4 col-form-label text-md-end">Memory (RAM)</label>
        <div class="col-md-6">
            <select name="memory" id="memory" class="form-select col-md-6" v-model="laptopData.memory" v-on:change="emitdata()">
                <option value="2gb">2GB</option>
                <option value="4gb">4GB</option>
                <option value="8gb">8GB</option>
                <option value="16gb">16GB</option>
                <option value="32gb">32GB</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>  
    <div class="row mb-4">
        <label for="display" class="col-md-4 col-form-label text-md-end">Display</label>
        <div class="col-md-6">
            <select name="display" id="display" class="form-select col-md-6" v-model="laptopData.display" v-on:change="emitdata()">
                <option value="21inches+">21"+</option>
                <option value="21inches">21"</option>
                <option value="17inches+">17"+</option>
                <option value="14inches+">14"+</option>
                <option value="10inches+">10"+</option>
            </select>
        </div>
    </div> 
    <div class="row mb-4">
        <label for="condition" class="col-md-4 col-form-label text-md-end">Condition</label>
        <div class="col-md-6">
            <select name="condition" id="condition" class="form-select col-md-6" v-model="laptopData.condition" v-on:change="emitdata()">
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
                laptopData : {
                    type : '',
                    brand : '',
                    processor : '',
                    operatingSystem : '',
                    storageType : '',
                    storageCapacity : '',
                    memory : '',
                    display : '',
                    condition : ''
                }
            }
        },
        methods: {
            emitdata() {
                this.$emit('childToParent', this.laptopData)
            }
        }
    }
</script>