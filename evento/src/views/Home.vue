<template>
  <v-container grid-list-md text-xs-left fluid>
    <v-card class="grey lighten-2" flat>
      <v-layout row wrap>
        <v-flex xs12 md3 sm3>
          <!--max-height="380" min-height="380"-->
          <v-card>
            <v-img
              src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
              aspect-ratio="2.75"
              min-height="200"
              max-height="200"
            ></v-img>

            <v-card-title primary-title>
              <div>
                <h3 class="headline mb-0">Titulo de casas</h3>
                <div>  </div>
              </div>
            </v-card-title>
            <v-card-text>
              dmcjb
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn flat >Share</v-btn>
              <v-btn flat >Explore</v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      </v-layout>
    </v-card>
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
