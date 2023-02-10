<template >
    <div >
       <div class="rounded-xl mt-9 shadow-lg w-1/2 m-auto text-center gap-3 flex flex-col p-4">
        <div class="flex justify-between">
            <h1 class="font-bold text-xl">appointment hour</h1>
            <button >X</button>
        </div>
        <div class="fex flex-start">
            <p>choose a time</p>
        </div>
        <div class="flex flex-row justify-between shadow-lg border-2 p-4 rounded-lg border-blue-600">
            <p>icon</p>
            <div class="flex flex-col mx-auto">
                <div>
                date
            </div>
            <div>
                November 2, 2023
            </div>
            </div>
            
        </div>
        <div class="flex flex-row justify-between shadow-lg border-2 p-4 rounded-lg border-gray-600">
            <p>icon</p>
            <div class="flex flex-col mx-auto">
                <div>
                time
            </div>
            <div>
                10:00 AM
            </div>
            </div>
        </div>
        <div>
            <button class="bg-blue-500 rounded-xl p-2">Reserve</button>
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
