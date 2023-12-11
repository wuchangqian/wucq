<template>

<el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
  <el-menu-item index="1">{{ title }}</el-menu-item>
  <el-menu-item v-for="(link , index) in navs" v-bind:key="link.route">
    <router-link :to="link.route">
      {{ index }} {{ link.name }}
    </router-link>
  </el-menu-item>
  <el-submenu index="2">
    <template slot="title">讲师工作台</template>
    <el-menu-item index="2-1">班级</el-menu-item>
    <el-menu-item index="2-2">课表</el-menu-item>
    <el-menu-item index="2-3">通知</el-menu-item>
    <el-submenu index="2-4">
      <template slot="title">其它</template>
      <el-menu-item index="2-4-1">学习</el-menu-item>
      <el-menu-item index="2-4-2">名称</el-menu-item>
      <el-menu-item index="2-4-3">项目</el-menu-item>
    </el-submenu>
  </el-submenu>
</el-menu>

</template>
<script>
import router from '../../router';
console.log(router)
const {log} = console;
export default {
  data(){
    return {
      title: '马兰花-师资工作台',
      navs:[
        {route:'/' , name:'HelloWorld'},
        {route:'/eltable' , name:'Eltable'},
        {route:'/about' , name:'About'},
      ]
    }
  }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.nav-bar{
  border:1px solid #F5F7FA;
}
h1{
  color:#f90;
  margin:0 auto;
  font-size:24px;
  text-align: center;
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
