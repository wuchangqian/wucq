<template> 
  <el-container style="height: 100%; border: 1px solid #eee">
    <el-aside width="200px" style="background-color: rgb(238, 241, 246)">
      <el-menu :default-openeds="defaultOpen">
        <el-submenu index="1">
          <template slot="title"><i class="el-icon-message"></i>机构管理</template>
          <el-menu-item-group>
            <template slot="title">机构列表</template>
            <el-menu-item index="1-1">省属机构</el-menu-item>
            <el-menu-item index="1-2">市属机构</el-menu-item>
          </el-menu-item-group>
          <el-menu-item-group title="机构审核">
            <el-menu-item index="1-3">我的审核</el-menu-item>
          </el-menu-item-group>
          <el-submenu index="1-4">
            <template slot="title">机构师资</template>
            <el-menu-item index="1-4-1">师资关联</el-menu-item>
          </el-submenu>
        </el-submenu>
        <el-submenu index="2">
          <template slot="title"><i class="el-icon-menu"></i>师资管理</template>
          <el-menu-item-group>
            <template slot="title">师资列表</template>
            <el-menu-item index="2-1">网创</el-menu-item>
            <el-menu-item index="2-2">syb</el-menu-item>
          </el-menu-item-group>
          <el-menu-item-group title="师资派遣">
            <el-menu-item index="2-3">调度</el-menu-item>
          </el-menu-item-group>
          <el-submenu index="2-4">
            <template slot="title">师资培养</template>
            <el-menu-item index="2-4-1">在线学习</el-menu-item>
          </el-submenu>
        </el-submenu>
        <el-submenu index="3">
          <template slot="title"><i class="el-icon-setting"></i>班级管理</template>
          <el-menu-item-group>
            <template slot="title">班级列表</template>
            <el-menu-item index="3-1">网创</el-menu-item>
            <el-menu-item index="3-2">gyb</el-menu-item>
          </el-menu-item-group>
          <el-menu-item-group title="开班申请">
            <el-menu-item index="3-3">我的申请</el-menu-item>
          </el-menu-item-group>
          <el-submenu index="3-4">
            <template slot="title">班级审核</template>
            <el-menu-item index="3-4-1">我的审核</el-menu-item>
          </el-submenu>
        </el-submenu>
      </el-menu>
    </el-aside>
    
    <el-container>
      <el-header style="text-align: right; font-size: 12px">
        <el-dropdown>
          <i class="el-icon-setting" style="margin-right: 15px"></i>
          <el-dropdown-menu slot="dropdown">
            <el-dropdown-item>查看</el-dropdown-item>
            <el-dropdown-item>新增</el-dropdown-item>
            <el-dropdown-item>删除</el-dropdown-item>
          </el-dropdown-menu>
        </el-dropdown>
        <span>王吴成</span>
      </el-header>
      
      <el-main>
        <el-table :data="tableData">
          <el-table-column prop="date" label="日期" width="140">
          </el-table-column>
          <el-table-column prop="name" label="姓名" width="120">
          </el-table-column>
          <el-table-column prop="address" label="地址">
          </el-table-column>
        </el-table>
      </el-main>
    </el-container>
  </el-container>
</template>
<script>
  export default {
    data() {
      const item = {
        date: '2016-05-02',
        name: '王老师',
        address: '杭州市西湖区文二西路738号'
      };
      return {
        defaultOpen:['1'],
        tableData: Array(20).fill(item)
      }
    }
  };
</script>

<style scope>
  .el-header {
    background-color: #B3C0D1;
    color: #333;
    line-height: 60px;
  }
  .el-aside {
    color: #333;
  }
</style>