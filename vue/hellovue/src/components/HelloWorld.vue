<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <ul>
      <li v-for="link in links" v-bind:key="link.name">
        <a
          :href="link.href"
          target="_blank"
        >
          {{ link.name }}
        </a>
      </li>
    </ul>
    <el-row>
  <el-button>默认按钮</el-button>
    <el-button type="primary">主要按钮</el-button>
    <el-button type="success">成功按钮</el-button>
    <el-button type="info">信息按钮</el-button>
    <el-button type="warning">警告按钮</el-button>
    <el-button type="danger">危险按钮</el-button>
  </el-row>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  components:{
   
  },
  data () {
    return {
      msg: 'App depends on Vue2.5.2',
      links:[
        {name:'Doc' , href:'http://www.baidu.com/'},
        {name:'Help' , href:'http://www.bing.com/'},
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
