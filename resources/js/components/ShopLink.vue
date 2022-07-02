<template>
   <div>
        
   </div>
</template>
<script>
    export default {
        props:['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
          showShop(){
                axios.post('/shop/' + this.userId )
                    .then(response=> {
                        alert(response.data);
                });
            }
        }
    }
</script>