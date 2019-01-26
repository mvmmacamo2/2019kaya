import Vue from 'vue'
import './plugins/vuetify'
import App from './App.vue'
import router from './router'
import store from './store'
import './registerServiceWorker'
import VeeValidate from 'vee-validate'
import VueResource from 'vue-resource'
import Alert from './components/partilhado/Alert'
import EditUserAvatar from './components/User/Dialogs/EditUSerProfile'

Vue.use(VeeValidate)
Vue.use(VueResource)
Vue.component('app-alert', Alert)
Vue.component('app-user-avatar', EditUserAvatar)

Vue.config.productionTip = false

router.beforeEach((to, from, next) => {
  if (to.meta.requiresAuth) {
    const authUser = JSON.parse(window.localStorage.getItem('authUser'))
    if (authUser !== null) {
      next()
    } else {
      next({ name: 'Login' })
    }
    if (authUser && authUser.access_token) {
      // store.dispatch('setAuthUser', authUser)
      store.dispatch('getUser')
      next()
    } else {
      next({ name: 'Login' })
    }
  }
  next()
})
new Vue({
  router,
  store,
  created () {
    const userObj = JSON.parse(window.localStorage.getItem('authUser'))
    if (userObj !== null) {
      this.$store.dispatch('setAuthUser', userObj)
      this.$store.dispatch('getUser')
    }
  },
  render: h => h(App)
}).$mount('#app')
