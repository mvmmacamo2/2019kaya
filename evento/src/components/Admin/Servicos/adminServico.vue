<template>
  <v-app>
    <v-container fluid grid-list-md text-xs-center>
      <div>
        <v-toolbar flat color="pink darken-3" dark dense>
          <v-toolbar-title>Serviços KAYA</v-toolbar-title>
          <v-divider
            class="mx-2"
            inset
            vertical
          ></v-divider>
          <v-spacer></v-spacer>
          <v-dialog v-model="dialog" max-width="500px">
            <v-btn
              slot="activator"
              dark
              class="mb-2"
              fab
              color="pink"
              small
            >
              <v-icon>add</v-icon>
            </v-btn>
            <form @submit.prevent="save()">
              <v-card>
                <v-toolbar color="pink darken-3" dark dense>
                  <v-toolbar-title>{{ formTitle }}</v-toolbar-title>
                </v-toolbar>
                <v-card-text>
                  <v-container grid-list-md>
                    <v-layout row v-if="error">
                      <v-flex xs12 sm12 md12 >
                        <app-alert @dismissed="onDismissed" :text="error" ></app-alert>
                      </v-flex>
                    </v-layout>
                    <v-layout row wrap>
                      <v-flex xs12 sm12 md12>
                        <v-text-field
                          v-model="editedItem.name"
                          label="Servico"
                          hint="Ex: catering"
                        >
                        </v-text-field>
                      </v-flex>
                    </v-layout>
                    <v-layout wrap>
                      <v-flex xs12 sm12 md12>
                        <v-textarea
                          outline
                          name="input-7-4"
                          label="Descrição do serviço"
                          hint="Ex: descreve o serviço, ou seja o que ele proporciona"
                          value=""
                          v-model="editedItem.descricao"
                        ></v-textarea>
                      </v-flex>
                    </v-layout>

                  </v-container>
                </v-card-text>
                <v-divider></v-divider>
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
                  <v-btn color="blue darken-1" flat @click="close">Cancel</v-btn>
                  <v-btn
                    :loading="loading"
                    :disabled="loading"
                    color="secondary"
                    @click="loader = 'loading'"
                    type="submit"
                  >
                    <v-icon left>save</v-icon>
                    Salvar
                  </v-btn>
                </v-card-actions>
                <!--<v-card-actions>-->
                <!--<v-spacer></v-spacer>-->
                <!--<v-btn color="blue darken-1" flat @click="close">Cancel</v-btn>-->
                <!--<v-btn color="secondary" @click="save">Save</v-btn>-->
                <!--</v-card-actions>-->
              </v-card>
            </form>
          </v-dialog>
        </v-toolbar>
        <v-progress-circular
          :size="70"
          :width="7"
          color="red"
          indeterminate
          v-if="loading"
        ></v-progress-circular>
        <v-data-table
          v-if="servicos !== null || !loading"
          :headers="headers"
          :items="servicos"
          class="elevation-1"
        >
          <template slot="items" slot-scope="props">
            <td>{{ props.item.id}}</td>
            <!--<td class="text-xs-right">{{ props.item.name }}</td>-->
            <td class="">{{ props.item.name }}</td>
            <td class="">{{ props.item.estado }}</td>
            <td class="">{{ props.item.descricao }}</td>
            <td class="">{{ props.item.created_at }}</td>
            <td class="justify-center">{{ props.item.updated_at }}</td>
            <td class="justify-center layout px-0">
              <v-icon
                small
                class="mr-2"
                @click="editItem(props.item)"
              >
                edit
              </v-icon>
              <v-icon
                small
                @click="deleteItem(props.item)"
              >
                delete
              </v-icon>
            </td>
          </template>
          <template slot="no-data">
            <v-btn color="primary" @click="initialize">Reset</v-btn>
          </template>
        </v-data-table>
      </div>
    </v-container>
  </v-app>
</template>

<script>
export default {
  name: 'newServico',
  created () {
    this.$store.dispatch('getServicos')
    this.initialize()
  },
  computed: {
    servicos () {
      return this.$store.getters.servicos
    },
    userD () {
      return this.$store.getters.user
    },
    formTitle () {
      return this.editedIndex === -1 ? 'Cadastrar novos Servicos' : 'Editar o servico'
    },
    error () {
      return this.$store.getters.error
    },
    message () {
      return this.$store.getters.message
    },
    loading () {
      return this.$store.getters.loading
    }
  },
  watch: {
    servicos (value) {
      // console.log('servicos', value)
    },
    userD (value) {
      // console.log('useAdmin', value)
    },
    dialog (val) {
      val || this.close()
    },
    message (value) {
      if (value !== null) {
        this.snackBar = true
        setTimeout(function () { this.stopLoading() }.bind(this), 2000)
        setTimeout(function () { this.onDismissed() }.bind(this), 2000)
        setTimeout(function () { this.$store.dispatch('setMessage', null) }.bind(this), 2000)
        setTimeout(function () { this.snackBar = false }.bind(this), 2000)
      }
    },
    error (value) {
      if (value !== null) {
        setTimeout(function () { this.stopLoading() }.bind(this), 2000)
        setTimeout(function () { this.onDismissed() }.bind(this), 2000)
        setTimeout(function () { this.$store.dispatch('setMessage', null) }.bind(this), 2000)
        setTimeout(function () { this.$store.dispatch('setError', null) }.bind(this), 2000)
      }
    }
  },
  data () {
    return {
      pesquisar: '',
      loader: null,
      snackBar: false,
      dialog: false,
      headers: [
        {
          text: 'ID',
          align: 'center',
          sortable: false,
          value: ''
        },
        { text: 'Nome do Serviço', value: 'calories', align: 'center' },
        { text: 'Estado', value: 'calories', align: 'center' },
        { text: 'Descriçao', value: 'fat' },
        { text: 'Data (Criado)', value: 'carbs' },
        { text: 'Data (Actualização)', value: 'protein' },
        { text: 'Actions', value: 'name', sortable: false }
      ],
      desserts: [],
      editedIndex: -1,
      editedItem: {
        name: '',
        descricao: ''
      },
      defaultItem: {
        name: '',
        calories: 0,
        fat: 0,
        carbs: 0,
        protein: 0
      }
    }
  },
  methods: {
    getServico (value) {
      console.log(value)
    },
    initialize () {
      this.desserts = [
        {
          name: 'Frozen Yogurt',
          calories: 159,
          fat: 6.0,
          carbs: 24,
          protein: 4.0
        },
        {
          name: 'Ice cream sandwich',
          calories: 237,
          fat: 9.0,
          carbs: 37,
          protein: 4.3
        },
        {
          name: 'Eclair',
          calories: 262,
          fat: 16.0,
          carbs: 23,
          protein: 6.0
        },
        {
          name: 'Cupcake',
          calories: 305,
          fat: 3.7,
          carbs: 67,
          protein: 4.3
        },
        {
          name: 'Gingerbread',
          calories: 356,
          fat: 16.0,
          carbs: 49,
          protein: 3.9
        },
        {
          name: 'Jelly bean',
          calories: 375,
          fat: 0.0,
          carbs: 94,
          protein: 0.0
        },
        {
          name: 'Lollipop',
          calories: 392,
          fat: 0.2,
          carbs: 98,
          protein: 0
        },
        {
          name: 'Honeycomb',
          calories: 408,
          fat: 3.2,
          carbs: 87,
          protein: 6.5
        },
        {
          name: 'Donut',
          calories: 452,
          fat: 25.0,
          carbs: 51,
          protein: 4.9
        },
        {
          name: 'KitKat',
          calories: 518,
          fat: 26.0,
          carbs: 65,
          protein: 7
        }
      ]
    },

    editItem (item) {
      this.editedIndex = this.desserts.indexOf(item)
      this.editedItem = Object.assign({}, item)
      this.dialog = true
    },

    deleteItem (item) {
      const index = this.desserts.indexOf(item)
      confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
    },

    close () {
      this.dialog = false
      setTimeout(() => {
        this.editedItem = Object.assign({}, this.defaultItem)
        this.editedIndex = -1
      }, 300)
    },

    save () {
      if (this.editedIndex > -1) {
        Object.assign(this.desserts[this.editedIndex], this.editedItem)
      } else {
        // this.desserts.push(this.editedItem)
        const postData = {
          nome: this.editedItem.name,
          descricao: this.editedItem.descricao
        }
        this.$store.dispatch('saveServico', postData)
      }
      // this.close()
    },
    onDismissed () {
      this.$store.dispatch('clearError')
    },
    stopLoading () {
      this.$store.dispatch('setLoading', false)
    }
  }
}
</script>

<style scoped>

</style>
