<template>

    <el-row>
      <el-col :span="8">
        <slot name="copyright" :msg="msg" :hao="hao">
          msg:{{ msg }} hao:{{ hao }}
        </slot>
      </el-col>
      <el-col :span="4"><slot name="beian"></slot></el-col>
      <el-col :span="5"><slot name="gwab"></slot></el-col>
      <el-col :span="6" :offset="1">
          <el-link v-for="(link) in footer" 
          v-bind:key="link.route" :href="link.link"
           size="mini"  
           type='info'
           icon="el-icon-star-on"
           >{{ link.name }}</el-link>
        
      </el-col>
    </el-row>
</template>
<script>
const {log} = console;
export default {
  data(){
    return {
      msg:'yesitis',
      hao:'3333',
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
</style>
