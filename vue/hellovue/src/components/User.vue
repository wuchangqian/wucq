<template>
  <div class="main">
    <h2>{{ title }}</h2>
    <div class="main-container">
      <div>$route.params    = {{ $route.params }}</div>
      <div>$route.params.id = {{ $route.params.id }}</div>
      <div>$route.params = {{ $route.query }}</div>
    </div>
  </div>
</template>
<script >
import Vue from 'vue'
export default {
  name: 'User',
  components: {
  },
  data () {
    return {
      title: '用户信息'
    }
  },
  mounted:function(){
    
  },
  computed:{
    
  }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
body{
  background: #ddd;
}
h1 {
  font-weight: normal;
}
.main{
  border:1px solid red;
}
.main-container {
  width:500px;
  margin:0 auto;
  text-align: left;
  background: #dedede;
  border-radius: 4px;
  padding:5px;
}
info-item {
  display: block;
  margin: 0 10px;
  text-align: left;
}
dl{
  text-align: left;
}
dt{
  font-weight: 800;
}
a {
  color: #42b983;
}
ol{
  display: inline-block;
}
ol li{
  display: inline-block;
  width:20px;
  border-radius: 4px;
  margin:0 2px;
  border:1px solid #42b983;
  cursor: pointer;
}
</style>
