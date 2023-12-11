<template>
  <div id="app">
    <my-nav></my-nav>
    <!-- <img src="./assets/logo.png"> -->
    <transition name="fade">
      <router-view/>
    </transition>
    <com-footer></com-footer>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
body{
  padding:0;
  margin:0;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #1776d5;
  margin-top: 0;
  padding: 0;
}
</style>
