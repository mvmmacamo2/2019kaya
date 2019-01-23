import Vue from 'vue'
import { getHeader, CreateAccountUrl, userUrl } from '../config'

const state = {
  authUser: null,
  message: null,
  error: null,
  loading: false
}
const mutations = {
  SET_AUTH_USER (state, userObj) {
    state.authUser = userObj
  },
  SET_MESSAGE (state, msg) {
    state.message = msg
  },
  SET_ERROR (state, error) {
    state.error = error
  },
  SET_LOADING (state, loading) {
    state.loading = loading
  },
  CLEAR_AUTH_USER (state) {
    state.authUser = null
  },
  CLEAR_MESSAGE (state) {
    state.message = null
  },
  CLEAR_ERROR (state) {
    state.error = null
  }
}
const actions = {
  setMessage: ({ commit }, msg) => {
    commit('SET_MESSAGE', msg)
  },
  setError: ({ commit }, erro) => {
    commit('SET_ERROR', erro)
  },
  setLoading: ({ commit }, payload) => {
    commit('SET_LOADING', payload)
  },
  setAuthUser: ({ commit }, user) => {
    commit('SET_AUTH_USER', user)
  },
  clearAuth: ({ commit }) => {
    commit('CLEAR_AUTH_USER')
  },
  clearError: ({ commit }) => {
    commit('CLEAR_ERROR')
  },
  clearMessage: ({ commit }) => {
    commit('CLEAR_MESSAGE')
  },
  createAccount: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    const postData = {
      email: payload.email,
      password: payload.password
    }
    Vue.http.post(CreateAccountUrl, postData, { headers: getHeader() }).then(response => {
      commit('SET_LOADING', false)
      // commit('SET_AUTH_USER', response)
      commit('SET_MESSAGE', 'Conta criada com Sucesso!')
    }).catch(error => {
      commit('SET_LOADING', false)
      commit('SET_ERROR', error)
    })
  }
}

const getters = {
  message () {
    return state.message
  },
  error () {
    return state.error
  },
  loading () {
    return state.loading
  },
  user () {
    return state.authUser
  },
  authUser () {
    return state.authUser
  }
}
export default {
  state, mutations, actions, getters
}
