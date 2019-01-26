<template>
  <v-dialog width="500px" persistent v-model="editDialog">
    <v-btn floating accent slot="activator" dark icon >
      <v-icon >edit</v-icon>
    </v-btn>

    <v-card>
      <form @submit.prevent="saveAvatar()">
      <v-toolbar color="pink darken-3" dark dense>
        <v-toolbar-title>Alterar a imagem do perfil</v-toolbar-title>
      </v-toolbar>
      <v-container>
        <v-divider></v-divider>

        <v-layout row wrap>
          <v-flex xs12 sm12>
            <v-responsive>
              <v-img
                :src="userFoto"
                contain
                aspect-ratio="1.75"
                width="400px"
              ></v-img>
            </v-responsive>
          </v-flex>
        </v-layout>
        <v-layout>
          <v-flex xs12 sm6 offset-sm3>
            <v-btn raised class="indigo darken-2 white--text" @click="PickFoto">Carregue a Foto</v-btn>
            <input type="file" style="display: none" ref="fileInput" accept="image/*"
                   @change="FotoPicked"
            />
          </v-flex>
        </v-layout>
        <v-divider></v-divider>
        <v-layout row wrap>
          <v-flex xs12>
            <v-card-actions>
              <v-snackbar
                v-if="message"
                v-model="hasSaved"
                :timeout="2000"
                absolute
                bottom
                left
              >
                {{message}}
              </v-snackbar>
              <v-spacer></v-spacer>
              <!--<v-btn flat class="blue&#45;&#45;text darken-2" @click="saveAvatar()">Save </v-btn>-->
              <v-btn flat class="blue--text darken-2"  @click="fecharDialog()">Fechar</v-btn>
              <v-btn
                :loading="loading"
                :disabled="loading || disabled"
                color="secondary"
                @click="loader = 'loading'"
                type="submit"
              >
                Actualizar
              </v-btn>

            </v-card-actions>
          </v-flex>
        </v-layout>

      </v-container>
      </form>
    </v-card>
  </v-dialog>
</template>

<script>
// import { getHeader, updateAvatar } from '../../../config'

export default {
  props: ['user'],
  data () {
    return {
      disabled: true,
      loader: null,
      hasSaved: false,
      userFoto: this.user.foto,
      foto2: '',
      user_id: this.user.id,
      editDialog: false
    }
  },
  created () {
    this.$store.dispatch('getUser')
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
  methods: {
    PickFoto () {
      this.$refs.fileInput.click()
    },
    FotoPicked (event) {
      const files = event.target.files
      let filename = files[0].name
      if (filename.lastIndexOf('.') <= 0) {
        return alert('please add a valid File')
      } else {
        this.disabled = false
      }

      const fileReader = new FileReader()
      fileReader.addEventListener('load', () => {
        this.userFoto = fileReader.result
      })
      fileReader.readAsDataURL(files[0])
      this.foto2 = files[0]
    },
    saveAvatar () {
      const postData = {
        foto: this.userFoto,
        id: this.user.id
      }
      this.$store.dispatch('updateAvatar', postData)
      // this.editDialog = false
      this.hasSaved = true
    },
    fecharDialog () {
      this.editDialog = false
      this.hasSaved = false
      this.$store.dispatch('clearMessage')
    }
  }
}
</script>

<style scoped>

</style>
