<template>
  <v-app>
    <v-container>
      <v-layout>
         <v-flex xs12 sm6 offset-sm3 md6 offset-md3>
           <v-card>
             <v-toolbar flat dense dark class="pink darken-2 elevation-4" justify-center>
               <v-toolbar-title class="text-md-center text-sm-center text-lg-center text-uppercase">Acesse a sua conta</v-toolbar-title>
               <v-spacer></v-spacer>
               <v-toolbar-items>
                 <v-btn flat>K</v-btn>
               </v-toolbar-items>
             </v-toolbar>
             <v-card-text>
               <v-container>
                 <form @submit.prevent="LoginUser">
                   <v-layout row>
                     <v-flex xs12>

                       <v-text-field prepend-icon="person" name="email" label="Email" id="email" v-model="login.email" type="email" required=""> </v-text-field>

                       <v-text-field prepend-icon="lock" name="password" label="Password" id="password" v-model="login.password" type="password" required=""> </v-text-field>

                     </v-flex>
                   </v-layout>

                   <v-layout row>
                     <v-flex xs12>
                       <v-btn type="submit" class="success">
                         Entrar
                         <span slot="loader" class="custom-loader">
                       <v-icon light>cached</v-icon>
                    </span>
                       </v-btn>
                       <v-btn flat small outline color="error" to="/forgot-password">Esqueceu a password ?</v-btn>
                     </v-flex>
                   </v-layout>
                 </form>
               </v-container>
             </v-card-text>
           </v-card>

         </v-flex>
      </v-layout>
    </v-container>
  </v-app>
</template>

<script>
export default {
  name: 'Login',
  data () {
    return {
      login: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    LoginUser () {
      alert('123456')
    }
  }
}
</script>

<style scoped>

</style>
