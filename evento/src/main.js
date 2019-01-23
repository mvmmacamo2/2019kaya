import Vue from 'vue'
import './plugins/vuetify'
import App from './App.vue'
import router from './router'
import store from './store'
import './registerServiceWorker'
import VeeValidate from 'vee-validate'
import VueResource from 'vue-resource'
import Alert from './components/partilhado/Alert'

Vue.use(VeeValidate)
Vue.use(VueResource)
Vue.component('app-alert', Alert)

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
