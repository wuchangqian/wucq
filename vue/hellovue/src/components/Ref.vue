<template>
  <div class="demo1-container">
      <p>通过ref直接拿到dom</p>
      <div ref="sectionRef" class="ref-section"></div>
      <button @click="higherAction" class="btn">变高</button>
  </div>
</template>

<script setup lang="ts">
import {ref} from 'vue'
const sectionRef = ref()
let height = 100;

const higherAction = () => {
  height += 50;
  sectionRef.value.style = `height: ${height}px`;
}
</script>

<style scoped>
.demo1-container {
  width: 100%;
  height: 100%;
}
  .ref-section {
      width: 200px;
      height: 100px;
      background-color: pink;
      transition: all .5s ease-in-out;
  }

  .btn {
      width: 200px;
      height: 50px;
      background-color: gray;
      color: #fff;
      margin-top: 100px;
  }
</style>
