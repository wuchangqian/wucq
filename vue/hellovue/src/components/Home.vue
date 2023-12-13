<template>
  <el-container>
    <el-aside width="280px">
      <el-card body-style="width:200px; height:200px; border:1px solid red;" class="box-card">
       
          <el-row :gutter="1">
            <el-col :span="24">
              <div class="grid-content bg-purple-dark">
                3
              </div>
            </el-col>
          </el-row>
      </el-card>
    </el-aside>
    <el-container>
      <el-header>Header</el-header>
      <el-main>
        <el-alert
          title="成功提示的文案"
          type="success">
        </el-alert>
        <el-button :plain="true" @click="openmsg">打开消息提示</el-button>
        <el-button type="text" @click="openbox">点击打开 Message Box</el-button>
        <el-carousel indicator-position="outside">
          <el-carousel-item v-for="item in 4" :key="item">
            <h3>{{ item }}</h3>
          </el-carousel-item>
        </el-carousel>
        <el-calendar v-model="datevalue">
        </el-calendar>
        <el-descriptions title="师资信息" size="medium" border :column="4" direction="horizontal" extra="该老师是国内">
          <el-descriptions-item label="用户名">张丽</el-descriptions-item>
          <el-descriptions-item label="手机号">18100000000</el-descriptions-item>
          <el-descriptions-item label="居住地">郑州市</el-descriptions-item>
          <el-descriptions-item label="备注">
            <el-tag size="small">机构</el-tag>
          </el-descriptions-item>
          <el-descriptions-item label="联系地址">xx区xx号 1188 号xx区xx号 1188 号xx区xx号 1188 号xx区xx号 1188 号</el-descriptions-item>
          <el-descriptions-item label="类型">考评专家</el-descriptions-item>
          <el-descriptions-item label="评分">5.0</el-descriptions-item>
        </el-descriptions>
        <el-empty description="记录为空"></el-empty>
        <el-button type="primary" size="mini" icon="el-icon-back">
          返回
        </el-button>
        <el-backtop :bottom="100">
          <div
            style="{
              height: 100%;
              width: 100%;
              background-color: #f2f5f6;
              box-shadow: 0 0 6px rgba(0,0,0, .12);
              text-align: center;
              line-height: 40px;
              color: #1989fa;
            }"
          >
            ^
          </div>
        </el-backtop>
        <el-card ></el-card>
        <ul class="infinite-list" v-infinite-scroll="load" style="overflow:auto">
          <li v-for="i in count" :key="i" class="infinite-list-item">{{ i }}</li>
        </ul>

      </el-main>

      <el-footer>Footer</el-footer>
    </el-container>
    
  </el-container>
</template>
<script>
export default {
  name: 'Home',
  methods:{
    load () {
      this.count += 2
    },
    openmsg() {
      this.$message('这是一条消息提示');
      this.$notify({
          title: '成功',
          message: '这是一条成功的提示消息',
          type: 'success'
        });
    },
    openbox(){
      this.$alert('这是一段内容', '标题名称', {
          confirmButtonText: '确定',
          callback: action => {
            this.$message({
              type: 'error',
              message: `action: ${ action }`
            });
          }
        });
    }
  },
  data () {
    return {
      msg:' 网 创 ',
      count:10,
      datevalue:new Date(),
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
.infinite-list{
  width:300px;
  height:120px;
}
.el-header{
  background-color: #B3C0D1;
  color: #333;
}
.el-footer {
  background-color: aqua;
  color: #333;
}
.no-localstorage .box { color: red; }
.localstorage .box { color: green; }

.el-aside {
  background-color: #D3DCE6;
  color: #333;
  text-align: center;
  line-height: 200px;
}
</style>
