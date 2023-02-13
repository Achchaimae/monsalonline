<script setup>
import calendar from '../components/Calendar.vue'
import User from '../components/User.vue'

</script>

<template>
  <main class="flex flex-col justify-between">
      <User/>
    <div>
       <calendar/>
    </div>
    
  </main>
</template>
<style>
  .test {
    background-color: red;
  }
</style>
