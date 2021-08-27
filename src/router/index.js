import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import AddVendor from '@/components/AddVendor.vue'
import ViewVendor from '@/components/ViewVendor.vue'
import AddContact from '@/components/AddContact.vue'
import ViewContacts from '@/components/ViewContacts.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
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
    name: 'AddContact',
    component: AddContact
  },
  {
    path: '/ViewContacts',
    name: 'ViewContacts',
    component: ViewContacts
  }

]

const router = new VueRouter({
  routes
})

export default router
