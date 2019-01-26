<template>
  <v-app>
    <v-container fluid grid-list-md text-xs-center>
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
                <a
                  href="/entrar"
                  class="subheading mx-3"
                >
                  Já possui uma conta?
                </a>
                <v-btn
                 type="submit" class="success"
                 :loading="loading"
                 :disabled="loading"
                 color="secondary"
                 @click="loader = 'loading'"
                >
                  Entrar
                </v-btn>
              </v-card-actions>
            </form>
          </v-card>

        </v-flex>
      </v-layout>
    </v-container>
  </v-app>
</template>

<script>
// import { getHeader, userUrl, CreateAccountUrl } from '../../config'

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
    authUser (value) {
      if (value !== null) {
        this.$router.push({ name: 'Home' })
        this.$store.dispatch('getUser')
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
      const postData = {
        email: this.form.email,
        password: this.form.password
      }
      this.$store.dispatch('createAccount', postData)
    },
    onDismissed () {
      this.$store.dispatch('clearError')
    }
  }
}
</script>

<style scoped>
@import "../../assets/loading.css";
</style>
