<template>
  <div id="app">
    <my-nav :fromroute="routefrom" :toroute="routeto"></my-nav>
    <router-view name="aside"></router-view>
    <!-- <img src="./assets/logo.png"> -->
    <transition :name="transitionName">
      <keep-alive>
        <router-view name="default"></router-view>
      </keep-alive>
    </transition>
    <com-footer></com-footer>
  </div>
</template>
<script>
  const {log} = console
  export default {
    name: 'App',
    data() {
      return {
        transitionName:'slide-left',
        routefrom: 'from',
        routeto:'to'
      }
    },
    beforeRouteUpdate (to, from, next) {
      // const toDepth = to.path.split('/').length
      // const fromDepth = from.path.split('/').length
      // this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
      next()
    },
    watch: {
      $route(to, from) {
        this.routefrom = from.path;
        this.routeto = to.path
        const toDepth = to.path.split('/').length
        const fromDepth = from.path.split('/').length
        this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
    
        log(this.$router.mode)
      }
      
    }
  }
</script>
<style>
html,body{
  padding:0;
  margin:0;
  height:100%;
  position: relative;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #1776d5;
  height: 100%;
  border:1px solid red;
  margin-top: 0;
  height: 100%;
  padding: 0;
}
.router-link-active{
  color:#303133;
  border-bottom:2px solid #409EFF
}
</style>
