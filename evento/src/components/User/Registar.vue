<template>
  <v-app>
    <v-container>
      <v-layout row v-if="error">
        <v-flex xs12 sm6 offset-sm3 >
          <app-alert @dismissed="onDismissed" :text="error.body.message" ></app-alert>
        </v-flex>
      </v-layout>
      <v-layout>
        <v-flex xs12 sm6 offset-sm3>
          <v-card height="">
            <form @submit.prevent="createUser">
              <!--<v-toolbar flat dense dark class="pink darken-2 elevation-4" justify-center>-->
                <!--<v-toolbar-title class="text-md-center text-sm-center text-lg-center text-uppercase">Crie uma Conta</v-toolbar-title>-->
                <!--<v-spacer></v-spacer>-->
                <!--<v-toolbar-items>-->
                  <!--<v-btn flat>K</v-btn>-->
                <!--</v-toolbar-items>-->
              <!--</v-toolbar>-->
              <v-card-text mt0>
                <v-container>
                  <v-layout row>
                    <v-flex xs12>
                      <v-text-field prepend-icon="mail" v-validate="'required|email'" :error-messages="errors.collect('email')" data-vv-name="email" name="email" label="Email" id="email" v-model="form.email" type="email" required> </v-text-field>
                      <v-text-field prepend-icon="lock" name="password" label="Password" id="password" v-model="form.password" type="password" required> </v-text-field>
                      <v-text-field prepend-icon="lock" name="name" label="Confirmar password" id="confirmPassword" v-model="form.confirmPassword" type="password" required :rules="[comparePassword]"> </v-text-field>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card-text>
              <v-divider></v-divider>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                 type="submit" class="success"
                 :loading="loading"
                 :disabled="loading"
                 color="secondary"
                 @click="loader = 'loading'"
                >
                  Entrar
                </v-btn>
                <!--<v-layout row wrap>-->
                  <!--<v-flex xs12>-->
                    <!--<v-btn type="submit" class="success">-->
                      <!--Entrar-->
                    <!--</v-btn>-->
                    <!--<v-btn link small outline color="error" to="/forgot-password">Esqueceu a password ?</v-btn>-->
                  <!--</v-flex>-->
                <!--</v-layout>-->
              </v-card-actions>
            </form>
          </v-card>

        </v-flex>
      </v-layout>
    </v-container>
  </v-app>
</template>

<script>
import { getHeader, userUrl } from '../../config'

export default {
  name: 'Registar',
  $_veeValidate: {
    validator: 'new'
  },
  created () {

  },
  computed: {
    message () {
      return this.$store.getters.message
    },
    error () {
      return this.$store.getters.error
    },
    loading () {
      return this.$store.getters.loading
    },
    comparePassword () {
      return this.form.password !== this.form.confirmPassword ? 'senhas incompativeis' : ''
    },
    authUser () {
      return this.$store.getters.authUser
    }
  },
  watch: {
    message (value) {
      console.log(value)
    },
    authUser (value) {
      if (value === null) {
        // const authUser = {}
        // authUser.access_token = response.data.access_token
        // authUser.refresh_token = response.data.refresh_token
        window.localStorage.setItem('authUser', JSON.stringify(value))
        this.$http.get(userUrl, { headers: getHeader() }).then(response => {
          console.log('UserObject', response)
          // this.$store.dispatch('setLoading', false)
          // authUser.name = response.body.name
          // authUser.email = response.body.email
          // authUser.foto = response.body.foto
          // authUser.id = response.body.id
          // authUser.nivel_acesso = response.body.nivel_acesso
          // window.localStorage.setItem('authUser', JSON.stringify(authUser))
          // console.log(response.body.email)
          // this.$store.dispatch('putAuthuser', authUser)
          this.$router.push({ name: 'Home' })
        })
      }
    }
  },
  data () {
    return {
      loader: null,
      form: {
        email: '',
        password: '',
        confirmPassword: ''
      },
      dictionary: {
        attributes: {
          email: 'E-mail Address'
          // custom attributes
        },
        custom: {
          name: {
            required: () => 'Name can not be empty',
            max: 'The name field may not be greater than 10 characters'
            // custom messages
          },
          email: {
            required: () => 'O campo Email deve ser válido'
          }
        }
      }
    }
  },
  mounted () {
    this.$validator.localize('en', this.dictionary)
  },
  methods: {
    createUser () {
      // this.$validator.validateAll()
      // this.$store.dispatch('setLoading', true)
      const postData = {
        email: this.form.email,
        password: this.form.password
      }
      this.$store.dispatch('createAccount', postData)
      // this.$http.post(CreateAccountUrl, postData, { headers: getHeader() }).then(response => {
      //   console.log(response)
      //   this.$store.dispatch('setLoading', false)
      // }).catch(error => {
      //   this.$store.dispatch('setError', error)
      //   console.log('error', error)
      //   this.$store.dispatch('setLoading', false)
      //   // if (error.status === 422) {
      //   //   const msg = 'Este email já foi Utilizado'
      //   //   this.$store.dispatch('setError', msg)
      //   // } else {
      //   //   const msg = 'A senha deve ter no minimo 6 caracteres'
      //   //   this.$store.dispatch('setError', msg)
      //   // }
      // })
    },
    onDismissed () {
      console.log('Dissmised Alert!')
      this.$store.dispatch('clearError')
    }
  }
}
</script>

<style scoped>
@import "../../assets/loading.css";
</style>
