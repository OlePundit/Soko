<template>
   <div>
        <button class ="btn btn-primary" style="margin-left:20px;" @click="connectUser" v-text="buttonText"></button>
   </div>
</template>
<script>
    export default {
        props:['userId','connects'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function (){
            return{
                status: this.connects,
            }
        },

        methods:{
            connectUser(){
                axios.post('/connect/' + this.userId )
                    .then(response=> {
                        this.status = ! this.status;

                        console.log(response.data);
                })
                .catch(errors =>{
                    if(errors.response.status == 401){
                        window.location = '/login';
                    }

                });
            }
        },

        computed: {
            buttonText() {
                return (this.status) ? 'Connected' : 'Connect';
            }
        }
    }
</script>
