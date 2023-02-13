<template>
    <div class="z-10 absolute right-14 top-4">
        <div class="flex ml-[95%] bg-blue-400 p-3 rounded-full w-fit" id="test">
            <i class="fa-solid fa-thumbtack  "></i>
        </div>
        <div class="bg-white w-64 rounded  flex-col h-44 hidden " onclick="">
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
               
    };
    function showPins() {
       var  document.getElementById("test").addEventListener("click", function() {
            document.querySelector(".hidden").classList.remove("hidden");
        });
    }
</script>
<style>
    .pins {
        display: flex;
    }
