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
                  <v-layout row wrap>
                    <v-flex xs12 md5 sm5>
                      <v-text-field
                        v-validate="'required:max:20'"
                        prepend-icon="person"
                        name="name"
                        label="Primeiro nome"
                        id="name"
                        hint="Ex: Paytek"
                        v-model="form.name"
                        :counter="20"
                        :error-messages="errors.collect('name')"
                        data-vv-name="name"
                        required>
                      </v-text-field>
                    </v-flex>
                    <v-flex xs12 md7 sm7>
                      <v-text-field
                        v-validate="'required:max:20'"
                        prepend-icon="person"
                        name="name"
                        label="Apelido"
                        id="name"
                        hint="Ex: Paytek"
                        v-model="form.apelido"
                        :counter="20"
                        :error-messages="errors.collect('name')"
                        data-vv-name="name"
                        required>
                      </v-text-field>
                    </v-flex>
                  </v-layout>
                  <v-layout row wrap>
                    <v-flex xs12 sm6 md6>
                      <v-text-field :mask="maskT" prepend-icon= "phone" v-model="form.bi" label="Nr Bilhete de identidade (Bi)" hint="Ex: 1516512161264Q"></v-text-field>
                    </v-flex>
                    <v-flex xs12 sm6 md6>
                      <v-text-field :mask="maskC" prepend-icon="settings_cell" v-model="form.celular" label="Celular" hint="Ex: 845030902"></v-text-field>
                    </v-flex>
                  </v-layout>
                  <v-layout row>
                    <v-flex xs12>
                      <v-text-field prepend-icon="mail" v-validate="'required|email'" :error-messages="errors.collect('email')" data-vv-name="email" name="email" label="Email" id="email" v-model="form.email" type="email" required> </v-text-field>
                      <v-text-field prepend-icon="lock" name="password" label="Defina a Senha" id="password" v-model="form.password" type="password" required> </v-text-field>
                      <v-text-field prepend-icon="lock" name="name" label="Confirmar a Senha" id="confirmPassword" v-model="form.confirmPassword" type="password" required :rules="[comparePassword]"> </v-text-field>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card-text>
              <v-divider></v-divider>
              <v-card-actions>
                <v-spacer></v-spacer>
                <!--<a-->
                  <!--href="/entrar"-->
                  <!--class="subheading mx-3"-->
                <!--&gt;-->
                  <!--Já possui uma conta?-->
                <!--</a>-->
                <v-btn
                 type="submit" class="secondary"
                 :loading="loading"
                 :disabled="loading"
                 color="secondary"
                 @click="loader = 'loading'"
                >
                  Criar
                </v-btn>
              </v-card-actions>
              <v-divider></v-divider>
              <router-link :to="{name: 'Login'}"> já tem a conta?</router-link>
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
      maskC: '#########',
      maskT: '###########A',
      maskNuit: '########',
      form: {
        name: '',
        apelido: '',
        bi: '',
        celular: '',
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
        password: this.form.password,
        name: this.form.name,
        apelido: this.form.apelido,
        bi: this.form.bi,
        celular: this.form.celular
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
