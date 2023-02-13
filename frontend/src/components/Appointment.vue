<template >
    <div >
       <div class="rounded-xl mt-9 shadow-lg w-1/2 m-auto text-center gap-3 flex flex-col p-4">
        <div class="flex justify-between">
            <div class="bg-blue-300 rounded p-2 w-10  ">🍀</div>
            <h1 class="font-bold text-xl">appointment </h1>
            <RouterLink to="/calendar" class="bg-blue-300 rounded p-2 font-semibold w-10" >X</RouterLink>
        </div>
        <div class="fex flex-start">
            <p>choose a time</p>
        </div>
        
        <router-link to="/calendar">
            <div class="flex flex-row drop-shadow-lg justify-between border-2 p-4 rounded-lg border-blue-600">
                <div class="flex items-center  ">
                    <i class="fa-regular fa-calendar text-xl"></i>
                </div>
                <div class="flex flex-col  mx-auto">
                    <div>
                        date
                    </div>
                    <div class="font-bold">
                        November 2, 2023
                    </div>
                </div>
            
            </div>
        </router-link>
        <router-link to="/time" >
            <div  class="flex flex-row justify-between  drop-shadow-lg border-2 p-4 rounded-lg border-gray-300" >
                <div class="flex items-center  ">
                <i class="fa-regular fa-clock text-xl"></i>
                </div>
            <div class="flex flex-col mx-auto">
                <div>
                time
            </div>
            <div class="font-bold">
                10:00 AM
            </div>
            </div>
        </div>
        </router-link>
       
        <div class="flex justify-end">
            
                <button class="bg-blue-500 rounded-xl p-2 p mr-4">Reserve</button>
            
        </div>
        
       </div>
    </div>
</template>
<script >
    export default {
        name: "appointment",
        data() {
            return {
                appointments: []
            };
        },
    };
</script>
<style>
body{
    background-color: #F5F5F5;
    }
</style>
