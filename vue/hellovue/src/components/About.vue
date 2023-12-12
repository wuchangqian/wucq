<template>
  <div class="about">
    <h2>{{ title }}</h2>
    <div v-if="rand > 0.5">
      {{ rand }} rand > 0.5 Now you see me
    </div>
    <div v-else>
      {{ rand }} rand &lt;= 0.5 Now you don't
    </div>
    <div class="info-container">
      <dl v-for="(item , index) of info" :key="item.key">
        <dt>{{index+1}} : {{ item.key }} </dt>
        <dd>{{ item.value }}</dd>   
      </dl>
      <div>Vue version: {{ dict.vueversion }}</div>
      <div>Vue-Router version: {{ dict.vuerouterversion }}</div>
      <div v-html="html"></div>
      <div>computerVar = {{ computerVar }}</div>
      <div ref="mydiv" class="mydiv">
        <button @click="addHeight" class="btn">通过this.$refs.mydiv 变高</button>
      </div>
    </div>
    <ol >
        <li v-for="n of 10" :key="n">{{ n }}</li>
    </ol>
    <router-link :to="{ path: '/register' }">Register</router-link>
  </div>
</template>
<script>
import {version,ref} from 'vue'

let height = 100;
export default {
  name: 'About',
  data () {
    return {
      title: '系统信息',
      date:33,
      html:'<font color="red">3</font>',
      pre:"<el-menu-item index='11'>{{ title }}</el-menu-item>",
      dict:{
        vueversion:0,
        vuerouterversion:0
      },
      rand:Math.random(),
      info:[
        { key: 'vue' , value : version},
        { key: 'vue-router' , value : '3.6.5'},
        { key: 'element-ui' , value : '2.15.14'},
      ]
    }
  },
  mounted:function(){
    let that = this;
    that.dict.vueversion = version
    // console.log(this.$router);
    that.dict.vuerouterversion = '3.6.5'
    setInterval(function(){
      // that.date = Date();
      //console.log(Vue);return;
      that.date = Date();
      
    } , 2000)
  },
  methods:{
    addHeight:function(){
      let mydiv = this.$refs.mydiv;
      //height += 10;
      console.log(mydiv.innerHTML , mydiv.style.height);
    
      height += 10;
      mydiv.style.height= height + 'px'
    }
  },
  computed:{
    computerVar(){
      let that = this;
      let sum =  0;
      for(let i = 0 ; i< 10 ; i++){
        sum+=i;
      }
      return sum;
    }
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
.info-container {
  width:500px;
  margin:0 auto;

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
.mydiv{
  height: 60px;
  width: 200px;
  border:1px solid red;
  background-color: pink;
  transition: all .5s ease-in-out;
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
