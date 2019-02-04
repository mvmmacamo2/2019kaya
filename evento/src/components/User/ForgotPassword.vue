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
            <form @submit.prevent="forgotPassword()">
              <v-toolbar flat dense dark class="pink darken-2 elevation-4" justify-center>
              <v-toolbar-title class="text-md-center text-sm-center text-lg-center text-uppercase">Email de recuperação</v-toolbar-title>
              </v-toolbar>
              <v-card-text mt0>
                <v-container>
                  <v-layout row>
                    <v-flex xs12>
                      <v-text-field
                        prepend-icon="mail"
                        v-validate="'required|email'"
                        :error-messages="errors.collect('email')"
                        data-vv-name="email"
                        name="email"
                        label="Email da conta"
                        id="email"
                        v-model="form.email"
                        type="email"
                        required>
                      </v-text-field>
                      <!--<v-text-field prepend-icon="lock" name="password" label="Defina a Senha" id="password" v-model="form.password" type="password" required> </v-text-field>-->
                      <!--<v-text-field prepend-icon="lock" name="name" label="Confirmar a Senha" id="confirmPassword" v-model="form.confirmPassword" type="password" required :rules="[comparePassword]"> </v-text-field>-->
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card-text>
              <v-divider></v-divider>
              <v-card-actions>
                <v-snackbar
                  v-if="message"
                  v-model="snackBar"
                  :timeout="9000"
                  absolute
                  bottom
                  left
                  color="cyan darken-2"
                >
                  {{message}}
                </v-snackbar>
                <v-spacer></v-spacer>
                <v-btn
                  type="submit" class="error"
                  :loading="loading"
                  :disabled="loading"
                  color="secondary"
                  @click="loader = 'loading'"
                  round
                >
                  Submeter
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
  name: 'ForgotPassword',
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
    }
  },
  watch: {
    message (value) {
      if (value !== null) {
        this.snackBar = true
        setTimeout(function () { this.stopLoading() }.bind(this), 2000)
        setTimeout(function () { this.$store.dispatch('setMessage', null) }.bind(this), 2000)
        setTimeout(function () { this.snackBar = false }.bind(this), 9000)
      }
    }
  },
  data () {
    return {
      loader: null,
      snackBar: false,
      form: {
        email: ''
      }
    }
  },
  methods: {
    forgotPassword () {
      const postData = {
        email: this.form.email,
        url: 'http://localhost:8081'
      }
      this.$store.dispatch('forgotPassword', postData)
    },
    stopLoading () {
      this.$store.dispatch('setLoading', false)
    }
  }
}
</script>

<style scoped>

</style>
