import Vue from 'vue'
import { getHeader, CreateAccountUrl, userUrl, LoginUrl, updateAvatar, updatePerfilUrl, forgotPasswordUrl, resetPasswordUrl } from '../config'
import { ClientSecret, ClientId } from '../config/env'
import ForgotPassword from '../components/User/ForgotPassword'
import response from 'vue-resource/src/http/response'

const state = {
  authUser: null,
  message: null,
  error: null,
  loading: false,
  user: null
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
  },
  SET_USER (state, payload) {
    state.user = payload
  },
  CLEAR_USER (state) {
    state.user = null
  }
}
const actions = {
  setMessage: ({ commit }, msg) => {
    commit('SET_MESSAGE', msg)
  },
  setUser: ({ commit }, payload) => {
    commit('SET_USER', payload)
  },
  clearUser: ({ commit }) => {
    commit('CLEAR_USER')
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
      password: payload.password,
      name: payload.name,
      apelido: payload.apelido,
      bi: payload.bi,
      celular: payload.celular
    }
    const authUser = {}
    Vue.http.post(CreateAccountUrl, postData).then(response => {
      authUser.access_token = response.data.access_token
      authUser.refresh_token = response.data.refresh_token
      window.localStorage.setItem('authUser', JSON.stringify(authUser))
      Vue.http.get(userUrl, { headers: getHeader() }).then(response => {
        authUser.name = response.body.name
        authUser.email = response.body.email
        authUser.apelido = response.body.apelido
        authUser.nuit = response.body.nuit
        authUser.bi = response.body.bi
        authUser.data_nascimento = response.body.data_nascimento
        authUser.estado = response.body.estado
        authUser.estado_perfil = response.body.estado_perfil
        authUser.uuid = response.body.uuid
        authUser.foto = response.body.foto
        authUser.id = response.body.id
        authUser.nivel = response.body.nivel
        window.localStorage.setItem('authUser', JSON.stringify(authUser))
        commit('SET_AUTH_USER', authUser)
        commit('SET_USER', response.body)
        commit('SET_MESSAGE', 'Conta criada com sucesso')
        commit('SET_LOADING', false)
      }).catch(error => {
        commit('SET_ERROR', error)
        commit('SET_LOADING', false)
      })
    }).catch(error => {
      commit('SET_LOADING', false)
      commit('SET_ERROR', error)
    })
  },
  loginUser: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    const postData = {
      grant_type: 'password',
      client_id: ClientId,
      client_secret: ClientSecret,
      username: payload.email,
      password: payload.password,
      scope: ''
    }
    const authUser = {}
    Vue.http.post(LoginUrl, postData).then(response => {
      commit('SET_LOADING', false)
      console.log(response)
      authUser.access_token = response.data.access_token
      authUser.refresh_token = response.data.refresh_token
      window.localStorage.setItem('authUser', JSON.stringify(authUser))
      Vue.http.get(userUrl, { headers: getHeader() }).then(response => {
        console.log('UserObject', response)
        // this.$store.dispatch('setLoading', false)
        authUser.name = response.body.name
        authUser.email = response.body.email
        authUser.apelido = response.body.apelido
        authUser.nuit = response.body.nuit
        authUser.bi = response.body.bi
        authUser.data_nascimento = response.body.data_nascimento
        authUser.estado = response.body.estado
        authUser.estado_perfil = response.body.estado_perfil
        authUser.uuid = response.body.uuid
        authUser.foto = response.body.foto
        authUser.id = response.body.id
        authUser.nivel = response.body.nivel
        window.localStorage.setItem('authUser', JSON.stringify(authUser))
        commit('SET_AUTH_USER', authUser)
        commit('SET_USER', response.body)
        commit('SET_LOADING', false)
      })
    }).catch(error => {
      console.log(error)
      commit('SET_ERROR', error)
      commit('SET_LOADING', false)
    })
  },
  updateAvatar: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    let postData = {
      foto: payload.foto,
      id: payload.id
    }
    Vue.http.post(updateAvatar, postData, { headers: getHeader() }).then(response => {
      commit('SET_MESSAGE', response.body.message)
      commit('SET_USER', response.body.data)
      commit('SET_LOADING', false)
    }).catch(error => {
      commit('SET_ERROR', error)
      commit('SET_LOADING', false)
    })
  },
  getUser: ({ commit }, payload) => {
    Vue.http.get(userUrl, { headers: getHeader() }).then(response => {
      commit('SET_USER', response.body)
    }).catch(error => {
      console.log(error)
    })
  },
  updateUser: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    let postData = {
      id: payload.id,
      name: payload.name,
      celular: payload.celular,
      endereco: payload.endereco,
      apelido: payload.apelido,
      bi: payload.bi,
      nuit: payload.nuit,
      data_nascimento: payload.data_nascimento
    }
    Vue.http.post(updatePerfilUrl, postData, { headers: getHeader() }).then(response => {
      commit('SET_MESSAGE', response.body.message)
      commit('SET_USER', response.body.data)
      // commit('SET_LOADING', false)
      // setTimeout(commit('SET_LOADING', false)
      //   , 6000)
    }).catch(error => {
      commit('SET_ERROR', error)
      commit('SET_LOADING', false)
    })
  },
  forgotPassword: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    let postData = {
      email: payload.email,
      url: payload.url
    }
    Vue.http.post(forgotPasswordUrl, postData).then(response => {
      console.log(response)
      commit('SET_MESSAGE', response.body.message)
    }).catch(error => {
      console.log(error)
      commit('SET_LOADING', false)
      console.log(error)
    })
  },
  resetPassword: ({ commit }, payload) => {
    commit('SET_LOADING', true)
    let postData = {
      password: payload.password,
      confirm_password: payload.confirmPassword,
      token: payload.token
    }
    Vue.http.post(resetPasswordUrl, postData).then(response => {
      console.log(response)
      commit('SET_MESSAGE', response.body.message)
    }).catch(error => {
      console.log(error)
      commit('SET_ERROR', error)
      commit('SET_LOADING', false)
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
    return state.user
  },
  authUser () {
    return state.authUser
  }
}
export default {
  state, mutations, actions, getters
}
