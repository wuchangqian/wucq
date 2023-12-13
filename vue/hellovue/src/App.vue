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

    <com-footer>
      <template #copyright="{msg , hao}">
        <el-link>Copyright ©2021-2023 浙江德伦教育科技有限公司{{msg}} {{hao}}</el-link>
      </template>
      <template #beian>
        <el-link>浙ICP备19033231号-15</el-link>
      </template>
      <template #gwab>
        <el-link>浙公网安备33010602013036</el-link>
      </template>
    </com-footer>
  </div>
</template>
<script>
  const {log} = console
  export default {
    name: 'App',
    data() {
      return {
        msg:'hhhhh',
        hao:2222,
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
        //log(this.$router.mode)
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
  margin-top: 0;
  height: 100%;
  padding: 0;
}
.router-link-active{
  color:#303133;
  border-bottom:2px solid #409EFF
}
</style>
