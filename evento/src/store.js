import Vue from 'vue'
import Vuex from 'vuex'
import userStore from './store/userStore'
import servicoStore from './store/servicoStore'
Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    userStore,
    servicoStore
  }
})
