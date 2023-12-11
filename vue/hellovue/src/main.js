// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import Nav from './components/common/Nav'
import Footer from './components/common/Footer'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import router from './router'

Vue.config.productionTip = false

Vue.use(ElementUI);
Vue.component('my-nav', Nav);
Vue.component('com-footer', Footer);

/* eslint-disable no-new */
const app = new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
// console.log(app);
