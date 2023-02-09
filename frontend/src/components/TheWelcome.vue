<template>
  <div class="bg-red-100 w-full flex flex-col" >
    <h1 class="font-['Titan_One'] font-bold">
    Reserve your appointment for a fresh new look with a stylish haircut 
  </h1>
  <h2 class="font-['Racing_Sans_One'] font-semibold">
    and step out feeling confident and ready to conquer the world. 
  </h2>
  <button class="font-['Train_One'] w-fit bg-[#294C60] text-white p-2 rounded">GO Now</button>
    <div class="w-full flex justify-end">
      <div class="w-fit relative after:content-[''] after:absolute after:bg-yellow-400 after:w-full after:h-4/6 after:bottom-0 after:-right-2">
        <img src="@/assets/man.png" class="w-44 relative z-10" alt="">
      </div>
    </div>
  </div>
  
  
</template>
<script >
    export default {
        name: "Thewelcome",
    };
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Train+One&display=swap');
</style>