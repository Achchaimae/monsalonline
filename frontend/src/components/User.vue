<template>
    <div class="z-10 absolute right-14 top-4">
        <button class="flex ml-[95%] bg-blue-400 p-3 rounded-full w-fit " id="myAppoin" @click="show">
            <i class="fa-solid fa-thumbtack  "></i>
        </button>
        <div class="bg-white w-64 rounded h-44" :class=" hide ? 'block' : 'hidden'">
            <div class="border-red-300 ">
                hello world
            </div>
            <div class="border-red-300 ">
                    hello world
            </div>  
        </div>
    </div>
    
</template>
<script>
    export default {
        name: 'User',
        data() {
            return {
                hide: false
            }
        },
        methods: {
            show(){
                this.hide =  !this.hide;
            }
        }      
    }
    
    
    
</script>
