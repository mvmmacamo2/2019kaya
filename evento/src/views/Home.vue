<template>
  <v-container grid-list-md text-xs-left fluid>
    <v-layout row wrap>
      <v-flex xs12>
        <v-card>Home or Casa Eventos</v-card>
      </v-flex>
    </v-layout>
    <v-layout row>
      <v-snackbar
        v-model="snackbar"
        :bottom="'bottom'"
        :left="'left'"
        :timeout="3000"
        v-if="message"
      >
        {{ message }}
        <v-btn
          color="pink"
          flat
          @click="snackbar = false"
        >
          Fechar
        </v-btn>
      </v-snackbar>
    </v-layout>
  </v-container>
</template>

<script>
// import HelloWorld from '../components/HelloWorld'
export default {
  components: {
    // HelloWorld
  },
  computed: {
    message () {
      return this.$store.getters.message
    },
    error () {
      return this.$store.getters.error
    }
  },
  watch: {
    message (value) {
      if (value !== null) {
      }
    }
  },
  created () {
    this.snackbar = true
    // setTimeout(function () { this.stopLoading() }.bind(this), 2000)
    setTimeout(function () { this.$store.dispatch('setMessage', null) }.bind(this), 4000)
    setTimeout(function () { this.snackbar = false }.bind(this), 4000)
  },
  data () {
    return {
      snackbar: false
    }
  },
  methods: {

  }
}
</script>
