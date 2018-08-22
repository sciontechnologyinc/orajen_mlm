<template>
    <div class='link'>
        <button v-on:click="reverseMessage" data-toggle="modal" data-target=".lg-login">Login</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: {
            styleObject: {
                display: 'flex'
            }
        },
        methods:{
            reverseMessage: function () {

            }
        }
    }
    
</script>
