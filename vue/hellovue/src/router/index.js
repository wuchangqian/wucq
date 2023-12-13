import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import About from '@/components/About'
import Eltable from '@/components/Eltable'
import Register from '@/components/Register'
import User from '@/components/User'
import Basic from '@/components/Basic'
import Ref from '@/components/Ref'

Vue.use(Router)

export default new Router({
  linkActiveClass:'act-item',
  routes: [
    {
      path: '*',
      name: 'Default',
      meta:{desc:'首页'},
      component: Home,
    },
    {
      path: '/home',
      name: 'Home',
      meta:{desc:'首页'},
      component: Home,
    },
    {
      path: '/about',
      name: 'About',
      meta:{desc:'关于'},
      component: About
    },
    {
      path: '/eltable',
      name: 'Eltable',
      meta:{desc:'表格'},
      component: Eltable,
      children: [
        // 这也是个路由记录
        { path: 'basic', meta:{desc:'基础表格'} , component: Basic }
      ]
    },
    {
      path: '/register',
      name: 'Register',
      meta:{desc:'注册'},
      component: Register
    },
    {
      path: '/user/:id/:gid',
      name: 'User',
      meta:{desc:'用户'},
      component: User,
     
    },
    {
      path: '/404',
      component: () => import('@/views/error-page/404'),
      hidden: true
    },
    {
      path: '/ref',
      name: 'Ref',
      meta:{desc:'Ref'},
      component: Ref
    },
    {
      path: '/401',
      component: () => import('@/views/error-page/401'),
      hidden: true 
    },
  ]
})
