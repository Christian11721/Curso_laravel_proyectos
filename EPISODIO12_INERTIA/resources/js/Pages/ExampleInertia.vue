<template>
  <div>
    <h1>{{ counter }}</h1>
    <button @click="increment">Increment</button>
  </div>
  <NavLink :href="route('login')">Login</NavLink>
</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
import { ref } from 'vue';

const counter = ref(0);

const increment = () => {
    counter.value++;
};
</script>

<style scoped>

</style>
