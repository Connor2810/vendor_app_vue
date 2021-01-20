import Vue from 'vue'
import './plugins/bootstrap-vue'
import App from './App.vue'
import router from './router'
import BootstrapVue from 'bootstrap-vue'
// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import cors from 'cors'
import vueConfig from '../vue.config'


Vue.config.productionTip = false
Vue.use(vueConfig)
Vue.use(BootstrapVue)
Vue.use(cors)
new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
