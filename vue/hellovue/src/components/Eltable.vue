<template>
<div>
<i class="el-icon-edit"></i>
<i class="el-icon-share"></i>
<i class="el-icon-delete"></i>
<el-table
    :data="tableData"
    height="250"
    border
    style="width: 100%">
    <el-table-column
      prop="date"
      label="日期"
      width="180">
    </el-table-column>
    <el-table-column
      prop="name"
      label="姓名"
      width="180">
    </el-table-column>
    <el-table-column
      prop="address"
      label="地址">
    </el-table-column>
  </el-table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tableData: [{
        date: '2016-05-02',
        name: '学员一',
        address: '学员一的地址信息'
      }, {
        date: '2016-05-04',
        name: '学员二',
        address: '学员二的地址信息'
      }, {
        date: '2016-05-01',
        name: '学员三',
        address: '学员三的地址信息'
      }, {
        date: '2016-05-03',
        name: '学员四',
        address: '学员四的地址信息'
      }]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>