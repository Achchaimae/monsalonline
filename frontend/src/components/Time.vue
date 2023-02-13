<template>
    <div>
        <div class="rounded-xl mt-9 shadow-lg w-1/2 m-auto h-96 text-center gap-3 flex flex-col p-4">
        
            <div class=" flex flex-row justify-between">
                <div class="bg-blue-300 rounded p-2 w-10  ">🍀</div>
                <h1 class="font-bold text-xl">appointment hour</h1>
                <RouterLink to="/appointment" class="bg-blue-300 rounded p-2 font-semibold w-10" >X</RouterLink>
            </div>
            
                <form action="" method="POSt" class="flex flex-col h-full justify-around items-center">
                    <select name="time"  class=" w-full p-1 rounded focus:border-blue-500 text-center">
                        <option  selected disabled value="8:00">Hour</option>
                        <option value="9:00" class="">9:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                    </select>
                    <div class="flex justify-end">
                         <button class="bg-blue-500 rounded-xl p-2 p mr-4">Save</button>
                    </div>
                </form>
        </div>
    </div>
    
</template>
<script>
    export default {
        name: 'Time',
               
    };
</script>