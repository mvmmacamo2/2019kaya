import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import Login from './components/User/Login'
import Registar from './components/User/Registar'
import Perfil from './components/User/Perfil'
import Servicos from './components/User/Servicos/Servicos'
import adminServico from './components/Admin/Servicos/adminServico'
import Saloes from './components/Saloes'
import ForgotPassword from './components/User/ForgotPassword'
import ResetPassword from './components/User/ResetPassword'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/utilizador/perfil',
      name: 'Perfil',
      component: Perfil,
      meta: { requiresAuth: true }
    },
    {
      path: '/minha-conta/servicos',
      name: 'Servicos',
      component: Servicos,
      meta: { requiresAuth: true }
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
    },
    {
      path: '/admin/servicos',
      name: 'adminServico',
      component: adminServico
    },
    {
      path: '/saloes_eventos',
      name: 'Saloes',
      component: Saloes
    },
    {
      path: '/esqueceu_senha',
      name: 'ForgotPassword',
      component: ForgotPassword
    },
    {
      path: '/repor_senha/:token',
      name: 'ResetPassword',
      component: ResetPassword
    }
  ]
})
