import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import AddVendor from '@/components/AddVendor.vue'
import ViewVendor from '@/components/ViewVendor.vue'
import AddContact from '@/components/AddContact.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/AddVendor',
    name: 'AddVendor',
    component: AddVendor
  },
  {
    path: '/ViewVendor',
    name: 'ViewVendor',
    component: ViewVendor
  },
  {
    path: '/AddContact',
    name: 'AddContatc',
    component: AddContact
  },

]

const router = new VueRouter({
  routes
})

export default router
