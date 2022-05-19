<template>
   <div>
        <button class ="btn-primary" style="margin-left:20px;" @click="connectUser">Connect</button>
   </div>
</template>
<script>
    export default {
        props:['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            connectUser(){
                axios.post('/connect/' + this.userId )
                    .then(response=> {
                        alert(response.data);
                });
            }
        }
    }
</script>
