<template>
  <v-app>
    <v-container fluid grid-list-md text-xs-center>
      <v-layout row wrap>
        <v-flex xs12 md10 sm10 offset-sm1 offset-md1>
          <v-card>
            <v-layout row wrap>
              <v-flex xs12 sm6 md6>
                <v-img
                  class="white--text"
                  height="530px"
                  src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                >
                  <v-container fill-height fluid>
                    <v-layout fill-height>
                      <v-flex xs12 align-end flexbox>
                        <span class="headline">Top 10 Australian beaches</span>
                      </v-flex>
                    </v-layout>
                  </v-container>
                </v-img>

              </v-flex>
              <v-flex xs12 sm6 md6>
                <v-layout row v-if="error">
                  <v-flex xs12>
                    <app-alert @dismissed="onDismissed" :text="error.body.message" ></app-alert>
                  </v-flex>
                </v-layout>
                <form @submit.prevent="LoginUser">
                  <blockquote class="blockquote display-4 text-xs-left text-sm-left">
                  Login
                  </blockquote>
                  <!--<v-toolbar flat dense dark class="pink darken-2 elevation-4" justify-center>-->
                    <!--<v-toolbar-title class="text-md-center text-sm-center text-lg-center text-uppercase">Acesse a sua conta</v-toolbar-title>-->
                    <!--<v-spacer></v-spacer>-->
                    <!--<v-toolbar-items>-->
                      <!--<v-btn flat>K</v-btn>-->
                    <!--</v-toolbar-items>-->
                  <!--</v-toolbar>-->
                  <v-card-text>
                    <v-container>
                      <v-layout row>
                        <v-flex xs12>

                          <v-text-field prepend-icon="person" name="email" label="Email" id="email" v-model="login.email" type="email" required=""> </v-text-field>

                          <v-text-field prepend-icon="lock" name="password" label="Password" id="password" v-model="login.password" type="password" required=""> </v-text-field>

                        </v-flex>
                      </v-layout>

                      <!--<v-layout row>-->
                      <!--<v-flex xs12>-->
                      <!--<v-btn type="submit" class="success">-->
                      <!--Entrar-->
                      <!--<span slot="loader" class="custom-loader">-->
                      <!--<v-icon light>cached</v-icon>-->
                      <!--</span>-->
                      <!--</v-btn>-->
                      <!--<v-btn flat small outline color="error" to="/forgot-password">Esqueceu a password ?</v-btn>-->
                      <!--</v-flex>-->
                      <!--</v-layout>-->

                    </v-container>
                  </v-card-text>
                  <v-card-actions>
                    <v-spacer></v-spacer>
                    <!--<a-->
                      <!--href="/criar-conta"-->
                      <!--class="subheading mx-3"-->
                    <!--&gt;-->
                      <!--Ainda não possui uma conta?-->
                    <!--</a>-->
                    <v-btn
                      type="submit"
                      class="error"
                      :loading="loading"
                      :disabled="loading"
                      color="secondary"
                      round
                      @click="loader = 'loading'"
                    >
                      Entrar
                    </v-btn>
                  </v-card-actions>
                  <router-link :to="{name: 'ForgotPassword'}">Recuperar a senha?</router-link>
                  <v-divider></v-divider>
                  ou
                  <router-link :to="{name: 'Registar'}">Registar?</router-link>
                </form>
              </v-flex>
            </v-layout>
          </v-card>
        </v-flex>
         <v-flex xs12 sm6 offset-sm3 md6 offset-md3>
           <!--<v-card>-->
             <!--<form @submit.prevent="LoginUser">-->
             <!--<v-toolbar flat dense dark class="pink darken-2 elevation-4" justify-center>-->
               <!--<v-toolbar-title class="text-md-center text-sm-center text-lg-center text-uppercase">Acesse a sua conta</v-toolbar-title>-->
               <!--<v-spacer></v-spacer>-->
               <!--<v-toolbar-items>-->
                 <!--<v-btn flat>K</v-btn>-->
               <!--</v-toolbar-items>-->
             <!--</v-toolbar>-->
             <!--<v-card-text>-->
               <!--<v-container>-->
                   <!--<v-layout row>-->
                     <!--<v-flex xs12>-->

                       <!--<v-text-field prepend-icon="person" name="email" label="Email" id="email" v-model="login.email" type="email" required=""> </v-text-field>-->

                       <!--<v-text-field prepend-icon="lock" name="password" label="Password" id="password" v-model="login.password" type="password" required=""> </v-text-field>-->

                     <!--</v-flex>-->
                   <!--</v-layout>-->

                   <!--&lt;!&ndash;<v-layout row>&ndash;&gt;-->
                     <!--&lt;!&ndash;<v-flex xs12>&ndash;&gt;-->
                       <!--&lt;!&ndash;<v-btn type="submit" class="success">&ndash;&gt;-->
                         <!--&lt;!&ndash;Entrar&ndash;&gt;-->
                         <!--&lt;!&ndash;<span slot="loader" class="custom-loader">&ndash;&gt;-->
                       <!--&lt;!&ndash;<v-icon light>cached</v-icon>&ndash;&gt;-->
                    <!--&lt;!&ndash;</span>&ndash;&gt;-->
                       <!--&lt;!&ndash;</v-btn>&ndash;&gt;-->
                       <!--&lt;!&ndash;<v-btn flat small outline color="error" to="/forgot-password">Esqueceu a password ?</v-btn>&ndash;&gt;-->
                     <!--&lt;!&ndash;</v-flex>&ndash;&gt;-->
                   <!--&lt;!&ndash;</v-layout>&ndash;&gt;-->

               <!--</v-container>-->
             <!--</v-card-text>-->
             <!--<v-card-actions>-->
               <!--<v-spacer></v-spacer>-->
               <!--<a-->
                 <!--href="/criar-conta"-->
                 <!--class="subheading mx-3"-->
               <!--&gt;-->
                 <!--Ainda não possui uma conta?-->
               <!--</a>-->
               <!--<v-btn-->
                 <!--type="submit" class="secondary"-->
                 <!--:loading="loading"-->
                 <!--:disabled="loading"-->
                 <!--color="secondary"-->
                 <!--@click="loader = 'loading'"-->
               <!--&gt;-->
                 <!--Entrar-->
               <!--</v-btn>-->
             <!--</v-card-actions>-->
             <!--</form>-->
           <!--</v-card>-->

         </v-flex>
      </v-layout>
    </v-container>
  </v-app>
</template>

<script>
export default {
  name: 'Login',
  computed: {
    loading () {
      return this.$store.getters.loading
    },
    authUser () {
      return this.$store.getters.authUser
    },
    error () {
      return this.$store.getters.error
    },
    message () {
      return this.$store.getters.message
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
      login: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    LoginUser () {
      let postData = {
        email: this.login.email,
        password: this.login.password
      }
      this.$store.dispatch('loginUser', postData)
    },
    onDismissed () {
      this.$store.dispatch('clearError')
    }
  }
}
</script>

<style scoped>

</style>
