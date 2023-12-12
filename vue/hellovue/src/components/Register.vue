<template>
  <div class="form-container">
    <router-link to="/register">注册</router-link>
    <el-card class="box-card">
      <el-steps :space="100" :active="2" finish-status="success">
        <el-step title="注册"></el-step>
        <el-step title="认证"></el-step>
        <el-step title="核验"></el-step>
      </el-steps>
      <el-form ref="form" :model="form" label-width="80px">
        <el-form-item label="活动名称">
          <el-input v-model="form.name"></el-input>
        </el-form-item>
        <el-form-item label="活动区域">
          <el-select v-model="form.region" placeholder="请选择活动区域">
            <el-option label="上海" value="shanghai"></el-option>
            <el-option label="北京" value="beijing"></el-option>
          </el-select>
        </el-form-item>
        <el-form-item label="活动时间">
          <el-col :span="11">
            <el-date-picker type="date" placeholder="选择日期" v-model="form.date1" style="width: 100%;"></el-date-picker>
          </el-col>
          <el-col class="line" :span="2">-</el-col>
          <el-col :span="11">
            <el-time-picker placeholder="选择时间" v-model="form.date2" style="width: 100%;"></el-time-picker>
          </el-col>
        </el-form-item>
        <el-form-item label="即时配送">
          <el-switch v-model="form.delivery"></el-switch>
        </el-form-item>
        <el-form-item label="活动性质">
          <el-checkbox-group v-model="form.xingzi">
            <el-checkbox name="type" v-for="t in form.xingzi" :label="t.id" :key="t.id">{{t.name}}</el-checkbox>
          </el-checkbox-group>
        </el-form-item>
        <el-form-item label="特殊资源">
          <el-radio-group v-model="form.resource">
            <el-radio label="线上品牌商赞助"></el-radio>
            <el-radio label="线下场地免费"></el-radio>
          </el-radio-group>
        </el-form-item>
        <el-form-item label="活动形式">
          <el-input type="textarea" v-model="form.desc"></el-input>
        </el-form-item>
        <el-form-item>
          <el-button type="primary" @click="onSubmit">立即创建</el-button>
          <el-button>取消</el-button>
        </el-form-item>
    </el-form>
  </el-card>
</div>
</template>
<script>
  export default {
    data() {
      return {
        form: {
          name: '',
          region: 'beijing',
          date1: '2023-12-12 12:12:12',
          date2: '2023-12-13 13:13:13',
          delivery: true,
          type: ['id1' , 'id2'],
          xingzi:[
            {id:'id1' , name:'美食/餐厅线上活动'},
            {id:'id2' , name:'地推活动'},
            {id:'id3' , name:'线下主题活动'},
            {id:'id4' , name:'单纯品牌曝光'},
          ],
          resource: '线上品牌商赞助',
          desc: ''
        }
      }
    },
    methods: {
      onSubmit() {
        console.log('submit!');
      }
    }
  }
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.form-container{
  text-align: left;
  margin:10px auto;
  width:600px;
}
</style>
