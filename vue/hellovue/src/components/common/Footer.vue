<template>
  <div class="footer-bar">
    <ul>
      <li v-for="(link) in footer" v-bind:key="link.route">
        <el-link type="info" to="link.link"> {{ link.name}} </el-link>
      </li>
    </ul>
  </div>
</template>
<script>
const {log} = console;
export default {
  data(){
    return {
      footer:[
        {name:'大马兰' , link:'https://www.mlhchuangye.com/'},
        {name:'小马兰' , link:'https://www.malanhuachuangye.com/'},
        {name:'职培' , link:'https://www.zhipeiketang.com/'},
      ]
    }
  }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.footer-bar{
  position: relative;
  box-sizing: border-box;
  height: 35px;
  background:rgba(226, 236, 232, 0.679);
  border-top:1px dashed #edeaea;
  width:100%;
  bottom:0;
  margin:0 auto;
}
ul {
  width:100%;
  list-style: circle;
  margin:0;
  padding:0;
}
li {
  display: inline-block;
  list-style: circle;
  margin: 0 10px;
  font-size:12px;
}
</style>
