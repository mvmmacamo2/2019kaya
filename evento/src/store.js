import Vue from 'vue'
import Vuex from 'vuex'
import userStore from './store/userStore'
import servicoStore from './store/servicoStore'
import loaderStore from './store/loaderStore'
Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    userStore,
    servicoStore,
    loaderStore
  }
})
