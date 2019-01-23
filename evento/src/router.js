import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import Login from './components/User/Login'
import Registar from './components/User/Registar'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/criar-conta',
      name: 'Registar',
      component: Registar
    },
    {
      path: '/entrar',
      name: 'Login',
      component: Login
    }
  ]
})
