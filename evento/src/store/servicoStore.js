import Vue from 'vue'
import { getHeader, getServicos, saveServicoUrl } from '../config'

const state = {
  servicoData: null
}
const mutations = {
  SET_SERVICO_DATA (state, payload) {
    state.servicoData = payload
  }
}
const actions = {
  setServicoData: ({ commit }, payload) => {
    commit('SET_SERVICO_DATA', payload)
  },
  getServicos: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    Vue.http.get(getServicos, { headers: getHeader() }).then(response => {
      commit('SET_SERVICO_DATA', response.body.data)
      commit('SET_LOADING', false)
    }).catch(error => {
      commit('SET_ERROR', error)
      commit('SET_LOADING', false)
    })
  },
  saveServico: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    let postData = {
      name: payload.nome,
      descricao: payload.descricao
    }
    Vue.http.post(saveServicoUrl, postData, { headers: getHeader() }).then(response => {
      if (response.body.class === 'error') {
        commit('SET_ERROR', response.body.message)
        // commit('SET_LOADING', false)
      }
      if (response.body.class === 'success') {
        commit('SET_SERVICO_DATA', response.body.data)
        commit('SET_MESSAGE', response.body.message)
      }
    }).catch(error => {
      commit('SET_ERROR', error)
      commit('SET_LOADING', false)
    })
  }
}
const getters = {
  servicos () {
    return state.servicoData
  }
}
export default {
  state, mutations, actions, getters
}
