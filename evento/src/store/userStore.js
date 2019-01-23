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
  }
}

const getters = {
  message () {
    return state.message
  },
  error () {
    return state.error
  },
  user () {
    return state.authUser
  }
}
export default {
  state, mutations, actions, getters
}

