<template>
  <v-app>
    <v-container>
        <v-layout row v-if="error">
          <v-flex xs12 sm6 offset-sm3 >
            <app-alert @dismissed="onDismissed" :text="error.body.message" ></app-alert>
          </v-flex>
        </v-layout>
      <v-layout>
         <v-flex xs12 sm6 offset-sm3 md6 offset-md3>
           <v-card>
             <form @submit.prevent="LoginUser">
             <v-toolbar flat dense dark class="pink darken-2 elevation-4" justify-center>
               <v-toolbar-title class="text-md-center text-sm-center text-lg-center text-uppercase">Acesse a sua conta</v-toolbar-title>
               <v-spacer></v-spacer>
               <v-toolbar-items>
                 <v-btn flat>K</v-btn>
               </v-toolbar-items>
             </v-toolbar>
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
               <a
                 href="/criar-conta"
                 class="subheading mx-3"
               >
                 Ainda não possui uma conta?
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
