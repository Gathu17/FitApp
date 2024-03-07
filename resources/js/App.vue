<template>
    <div class="app-screen bg-red">
       <main class="main">
          <router-view></router-view>
          <div v-if="isRootPath">
            <LandingPage/>
           </div>
       </main>
    </div>
</template>
<script setup lang="ts">
import {computed, defineComponent, onMounted} from "vue";
import { useRoute } from 'vue-router';
import LandingPage from './components/pages/LandingPage.vue'


const route = useRoute()

const isRootPath = computed(()=>{
   return route.path === '/'
})

</script>
<style scoped>
.app-screen{
   background-color: #1E1E1E;
   color: white;
}
</style>