<template>
<div>
    <div class="row mb-4">
        <label for="volume" class="col-md-4 col-form-label text-md-end">Volume</label>
        <div class="col-md-6">
            <select name="volume" id="volume" class="form-select col-md-6" v-model="liquorData.volume" v-on:change="emitData()">
                <option value="null">Choose volume</option>
                <option value="5ltr">5ltr</option>
                <option value="1ltr">1ltr</option>
                <option value="750ml">750ml</option>
                <option value="500ml">500ml</option>
                <option value="250ml">250ml</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div> 
     
</div>
</template>
<script>
    export default {
        props: ['toggle','selectedCategory'],
        data () {
            return {
                liquorData: {
                    volume : ''
                }
            }
        },
        methods: {
            emitData() {
                console.log('emiting')
                this.$emit('childToParent', this.liquorData)
            }
        }
    }
</script>