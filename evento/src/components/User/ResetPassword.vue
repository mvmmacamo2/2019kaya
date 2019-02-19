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
            <form @submit.prevent="resetPasswords()">
              <v-toolbar flat dense dark class="pink darken-2 elevation-4" justify-center>
                <v-toolbar-title class="text-md-center text-sm-center text-lg-center text-uppercase">Defina uma nova senha confiavel</v-toolbar-title>
              </v-toolbar>
              <v-card-text mt0>
                <v-container>
                  <v-layout row>
                    <v-flex xs12>
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
                  round
                >
                  Repor
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
  name: 'ResetPassword',
  created () {
  },
  computed: {
    loading () {
      return this.$store.getters.loading
    },
    error () {
      return this.$store.getters.error
    },
    message () {
      return this.$store.getters.message
    },
    comparePassword () {
      return this.form.password !== this.form.confirmPassword ? 'senhas incompativeis' : ''
    },
  },
  watch: {
    message (value) {
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
        password: '',
        confirmPassword: ''
      }
    }
  },
  methods: {
    resetPasswords () {
      const postData = {
        password: this.form.password,
        confirmPassword: this.form.confirmPassword,
        token: this.$route.params.token
      }
      this.$store.dispatch('resetPassword', postData)
    }
  }
}
</script>

<style scoped>

</style>
