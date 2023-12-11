<template>
  <div class="about">
    <h2>{{ title }}</h2>
    <div class="info-container">
      <dl v-for="(item , index) in info" v-bind:key="item.key">
        <dt>{{index+1}} : {{ item.key }} </dt>
        <dd>{{ item.value }}</dd>   
      </dl>
    </div>
  </div>
</template>

<script >
export default {
  name: 'About',
  components: {
  },
  data () {
    return {
      title: '系统信息',
      info:[
        { key: 'vue' , value : '2.7.15'},
        { key: 'vue-router' , value : '3.6.5'},
        { key: 'element-ui' , value : '2.15.14'},
      ]
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
</style>
