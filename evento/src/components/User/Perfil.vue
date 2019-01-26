<template>
  <v-app>
    <v-container fluid grid-list-md text-xs-center>
      <!--justify-center-->
      <v-layout row wrap justify-center>
        <v-flex xs12 sm3 class="text-xs-center text-sm-center text-md-center text-lg-center">
          <v-card>
            <v-toolbar color="pink darken-3" dark dense>
              <v-toolbar-title>Mude a foto do perfil</v-toolbar-title>

              <v-spacer></v-spacer>
              <template v-if="true || userD !== null">
                <v-spacer></v-spacer>
                <app-user-avatar v-if="userD !== null" :user="userD"></app-user-avatar>
              </template>
            </v-toolbar>
            <v-img
              v-if="userD !== null"
              :src="userD.foto"
              height="250px"
              lazy-src
            ></v-img>
            <!--<v-img-->
              <!--v-if="userStore.authUser !== null"-->
              <!--:src="userStore.authUser.foto"-->
              <!--height="250px"-->
              <!--lazy-src-->
            <!--&gt;</v-img>-->
            <v-divider></v-divider>
            <!--<span>Biografia</span>-->
            <!--<v-card-actions>-->
              <!--<v-card-text v-if="userStore.authUser !== null">-->
                <!--<blockquote class="blockquote">-->
                  <!--{{userStore.authUser.endereco}}-->
                <!--</blockquote>-->
              <!--</v-card-text>-->
            <!--</v-card-actions>-->

          </v-card>
        </v-flex>

        <v-flex xs12 sm6 >
          <v-card>
            <v-toolbar color="pink darken-3" dark dense>
              <v-toolbar-title v-if="!isEditing">Perfil do Utilizador</v-toolbar-title>
              <!--<v-toolbar-title >Perfil do Utilizador</v-toolbar-title>-->
              <v-toolbar-title v-else>Editar o Perfil</v-toolbar-title>

              <v-spacer></v-spacer>

              <v-btn dark icon  @click="isEditing = !isEditing">
                <v-icon v-if="isEditing" @click="fecharEdit()">close</v-icon>
                <v-icon v-else>edit</v-icon>
              </v-btn>
            </v-toolbar>
            <v-list v-if="!isEditing">
              <v-list-tile>
                <v-list-tile-action>
                  <v-icon>person</v-icon>
                </v-list-tile-action>

                <v-list-tile-content>
                  <v-list-tile-title v-if="userD !== null" class="text-uppercase">{{userD.name}} {{userD.apelido}}</v-list-tile-title>
                </v-list-tile-content>
                <!--<v-list-tile-content>-->
                  <!--<v-list-tile-title v-if="userStore.authUser !== null" class="text-uppercase">{{userStore.authUser.name}}</v-list-tile-title>-->
                <!--</v-list-tile-content>-->
                <v-list-tile-action>
                  <!--<v-icon>chat</v-icon>-->
                </v-list-tile-action>
              </v-list-tile>
              <v-divider></v-divider>

              <v-list-tile>
                <v-list-tile-action>
                  <v-icon>event</v-icon>
                </v-list-tile-action>

                <v-list-tile-content>
                  <v-list-tile-title v-if="userD !== null" class="text-uppercase">{{userD.data_nascimento}}</v-list-tile-title>
                </v-list-tile-content>
              </v-list-tile>
              <v-divider></v-divider>

              <v-list-tile>
                <v-list-tile-action>
                  <v-icon>settings_cell</v-icon>
                </v-list-tile-action>

                <v-list-tile-content>
                  <v-list-tile-title v-if="userD !== null">{{userD.celular}}</v-list-tile-title>
                </v-list-tile-content>
                <v-list-tile-action>

                  <!--<v-icon>chat</v-icon>-->
                </v-list-tile-action>
              </v-list-tile>

              <!--<v-divider inset></v-divider>-->

              <!--<v-list-tile>-->
                <!--<v-list-tile-action>-->
                  <!--<v-icon>phone</v-icon>-->
                <!--</v-list-tile-action>-->

                <!--<v-list-tile-content>-->
                  <!--<v-list-tile-title v-if="userStore.authUser !== null">{{userStore.authUser.email}}</v-list-tile-title>-->
                <!--</v-list-tile-content>-->
                <!--<v-list-tile-action>-->

                  <!--&lt;!&ndash;<v-icon>chat</v-icon>&ndash;&gt;-->
                <!--</v-list-tile-action>-->
              <!--</v-list-tile>-->

              <v-divider></v-divider>
              <v-list-tile >
                <v-list-tile-action>
                  <v-icon>mail</v-icon>
                </v-list-tile-action>

                <v-list-tile-content>
                  <v-list-tile-title v-if="userD !== null">{{userD.email}}</v-list-tile-title>
                </v-list-tile-content>
              </v-list-tile>

              <v-divider inset></v-divider>

              <v-list-tile>
                <v-list-tile-action>
                  <v-icon>location_on</v-icon>
                </v-list-tile-action>

                <v-list-tile-content>
                  <v-list-tile-title v-if="userD !== null">{{userD.endereco}}</v-list-tile-title>
                </v-list-tile-content>
              </v-list-tile>
            </v-list>
            <v-form v-else @submit.prevent="updateUser()">
              <v-card-text>
                <v-layout row wrap>
                  <v-flex xs12 md5 sm5>
                    <v-text-field
                      v-validate="'required:max:20'"
                      prepend-icon="person"
                      name="name"
                      label="Primeiro nome"
                      id="name"
                      hint="Ex: Paytek"
                      v-model="formEdit.name"
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
                      v-model="formEdit.apelido"
                      :counter="20"
                      :error-messages="errors.collect('name')"
                      data-vv-name="name"
                      required>
                    </v-text-field>
                  </v-flex>
                  <!--<v-flex xs12 md7 sm7>-->
                    <!--<v-text-field-->
                      <!--v-validate="'required|email'"-->
                      <!--v-model="formEdit.email"-->
                      <!--:error-messages="errors.collect('email')"-->
                      <!--label="E-mail"-->
                      <!--data-vv-name="email"-->
                      <!--prepend-icon="mail"-->
                      <!--disabled-->
                      <!--required-->
                      <!--:value="formEdit.email"-->
                    <!--&gt;</v-text-field>-->
                  <!--</v-flex>-->
                </v-layout>
                <v-layout row wrap>
                  <v-flex xs12 md7 sm7>
                  <v-text-field
                  v-validate="'required|email'"
                  v-model="formEdit.email"
                  :error-messages="errors.collect('email')"
                  label="E-mail"
                  data-vv-name="email"
                  prepend-icon="mail"
                  disabled
                  required
                  :value="user.email"
                  ></v-text-field>
                  </v-flex>

                  <v-flex xs12 md5 sm5>
                    <v-text-field
                      v-model="formEdit.nuit"
                      label="Nuit"
                      prepend-icon="mail"
                      :mask="maskNuit"
                      required
                      hint="Ex: 11257895"
                      :value="user.nuit"
                    ></v-text-field>
                  </v-flex>
                </v-layout>

                <v-layout row wrap>
                  <v-flex xs12 sm6 md6>
                    <v-text-field :mask="maskT" prepend-icon= "phone" v-model="formEdit.bi" label="Nr Bilhete de identidade (Bi)" hint="Ex: 1516512161264Q"></v-text-field>
                  </v-flex>
                  <v-flex xs12 sm6 md6>
                    <v-text-field :mask="maskC" prepend-icon="settings_cell" v-model="formEdit.celular" label="Celular" hint="Ex: 845030902"></v-text-field>
                  </v-flex>
                </v-layout>
                <v-layout row wrap>
                  <v-flex xs12 sm12 md12>
                    <v-text-field prepend-icon="person"  v-model="formEdit.endereco" label="Morada" hint="Ex: Maputo, Albasine Q14 casa Nr: 48"></v-text-field>
                  </v-flex>
                </v-layout>

                <v-layout row wrap>
                  <v-flex xs12 sm12 md12>
                    <v-menu
                      ref="menu"
                      :close-on-content-click="false"
                      v-model="menu"
                      :nudge-right="40"
                      lazy
                      transition="scale-transition"
                      offset-y
                      full-width
                      min-width="290px"
                    >
                      <v-text-field
                        slot="activator"
                        v-model="formEdit.data_nascimento"
                        label="Birthday date"
                        prepend-icon="event"
                        readonly
                      ></v-text-field>
                      <v-date-picker
                        ref="picker"
                        v-model="formEdit.data_nascimento"
                        :max="new Date().toISOString().substr(0, 10)"
                        min="1950-01-01"
                        @change="save2"
                      ></v-date-picker>
                    </v-menu>
                  </v-flex>
                </v-layout>
              </v-card-text>
              <v-card-actions>
                <v-snackbar
                  v-if="message"
                  v-model="snackBar"
                  :timeout="3000"
                  absolute
                  bottom
                  left
                >
                  {{message}}
                </v-snackbar>
                <v-spacer></v-spacer>
                <v-btn
                  :loading="loading"
                  :disabled="loading"
                  color="secondary"
                  @click="loader = 'loading'"
                  type="submit"
                >
                  <v-icon left>update</v-icon>
                  Update
                </v-btn>
              </v-card-actions>
            </v-form>
            <!--<v-img-->
            <!--src="https://picsum.photos/700?image=996"-->
            <!--height="200px"-->
            <!--&gt;</v-img>-->
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </v-app>
</template>

<script>
import { mapState } from 'vuex'
import { userUrl, getHeader } from '../../config'

export default {
  name: 'Perfil',
  created () {
    this.userPerfil()
    this.$store.dispatch('getUser')
  },
  computed: {
    ...mapState({
      userStore: state => state.userStore
    }),
    loading () {
      return this.$store.getters.loading
    },
    message () {
      return this.$store.getters.message
    },
    user () {
      return this.$store.getters.authUser
    },
    userD () {
      return this.$store.getters.user
    }
  },
  watch: {
    message (value) {
      if (value !== null) {
        this.snackBar = true
        setTimeout(function () { this.stopLoading() }.bind(this), 2000)
        setTimeout(function () { this.$store.dispatch('setMessage', null) }.bind(this), 2000)
        setTimeout(function () { this.snackBar = false }.bind(this), 2000)
      }
    },
    snackBar (value) {
      console.log('snackeBar', value)
    },
    userD (value) {
      this.formEdit.name = value.name
      this.formEdit.apelido = value.apelido
      this.formEdit.email = value.email
      this.formEdit.nuit = value.nuit
      this.formEdit.bi = value.bi
      this.formEdit.celular = value.celular
      this.formEdit.endereco = value.endereco
      this.formEdit.data_nascimento = value.data_nascimento
    },
    menu (val) {
      val && this.$nextTick(() => (this.$refs.picker.activePicker = 'YEAR'))
    }
  },
  data () {
    return {
      isEditing: null,
      menu: false,
      maskC: '#########',
      maskT: '###########A',
      maskNuit: '########',
      snackBar: false,
      loader: null,
      userData: null,
      hasMessage: null,
      formEdit: {
        email: '',
        name: '',
        endereco: '',
        celular: '',
        biografia: '',
        nuit: null,
        apelido: '',
        bi: '',
        data_nascimento: null
      }
    }
  },
  methods: {
    fecharEdit () {
      if (this.isEditing === false) {
        this.$store.dispatch('setLoading', false)
        this.snackBar = false
      }
    },
    save () {
      this.isEditing = !this.isEditing
      this.snackBar = true
    },
    save2 (date) {
      this.$refs.menu.save(date)
      console.log(date)
    },
    updateUser () {
      const postData = {
        id: this.user.id,
        name: this.formEdit.name,
        celular: this.formEdit.celular,
        endereco: this.formEdit.endereco,
        apelido: this.formEdit.apelido,
        bi: this.formEdit.bi,
        nuit: this.formEdit.nuit,
        data_nascimento: this.formEdit.data_nascimento
      }
      this.$store.dispatch('updateUser', postData)
    },
    userPerfil () {
      this.$http.get(userUrl, { headers: getHeader() }).then(response => {
        this.userData = response
        // console.log(response.body)
      }).catch(error => {
        console.log(error)
      })
    },
    stopLoading () {
      this.$store.dispatch('setLoading', false)
    }
  }
}
</script>

<style scoped>

</style>
