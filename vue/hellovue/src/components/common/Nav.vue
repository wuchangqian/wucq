<template>
  <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
    <el-menu-item index="1">{{ title }} {{ fromroute }} => {{ toroute }}</el-menu-item>
    <el-menu-item v-for="(link) in navs" v-bind:key="link.route">
      <router-link :to="link.route">
        {{ link.name }}
      </router-link>
    </el-menu-item>
    <el-menu-item>
      <el-menu-item index="10">工作台</el-menu-item>
      <el-submenu index="20">
        <template>讲师工作台</template>
        <el-menu-item index="20-1">班级</el-menu-item>
        <el-menu-item index="20-2">课表</el-menu-item>
        <el-menu-item index="20-3">通知</el-menu-item>
        <el-submenu index="20-4">
          <template>其它</template>
          <el-menu-item index="20-4-1">学习</el-menu-item>
          <el-menu-item index="20-4-2">名称</el-menu-item>
          <el-menu-item index="20-4-3">项目</el-menu-item>
        </el-submenu>
      </el-submenu>
    </el-menu-item>
  </el-menu>
</template>
<script>
// import router from '../../router';
// const {log} = console;
export default {
  props:{
    fromroute:{type:String , default:'f'},
    toroute:{type:String , default:'t'}
  },
  data(){
    return {
      title: '马兰花-师资工作台',
      activeIndex:'1',
      defaultActive:1,
      activeIndex2:'1',
      navs:[],
    }
  },
  mounted(){
    // 路由器
    let router = this.$router
    let route = this.$route

    let aryRouters = router.getRoutes()
    console.log(aryRouters)
    let uid = Math.round(Math.random()*1000)
    let gid = Math.round(Math.random()*1000);
    for(let r of aryRouters){
      if(r.path.indexOf(':id')){
        r.path =  r.path.replace(':id' , uid);
      }
      if(r.path.indexOf(':gid')){
        r.path = r.path.replace(':gid' , gid);
      }
      this.navs.push({
        route:r.path,
        name:r.meta.desc
      })
    }
  },
  methods:{
    handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
  }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.act-item{
  color:red !important;
}
.nav-bar{
  border:1px solid #F5F7FA;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
</style>
