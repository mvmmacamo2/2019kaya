<template>
  <v-app>
    <v-navigation-drawer
      app
      absolute
      clipped
      fixed
      temporary
      value="true"
      width="300"
      v-model="drawer"
    >
      <!--stateless-->
      <v-list>
        <v-list-tile :to="'/'">
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Home</v-list-tile-title>
        </v-list-tile>
       <v-divider></v-divider>
        <v-text-field
          flat
          solo-inverted
          hide-details
          prepend-inner-icon="search"
          label="Pesquisar"
          class="hidden-sm-and-down"
        ></v-text-field>
        <v-spacer></v-spacer>
        <v-list-tile :to="'/saloes_eventos'">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Salões</v-list-tile-title>
        </v-list-tile>
        <!--<v-list-group prepend-icon="view_agenda">-->
          <!--<v-list-tile slot="activator">-->
            <!--<v-list-tile-title>Administração</v-list-tile-title>-->
          <!--</v-list-tile>-->

          <!--<v-list-group  no-action sub-group>-->
            <!--<v-list-tile slot="activator">-->
              <!--<v-list-tile-title>Servicos</v-list-tile-title>-->
            <!--</v-list-tile>-->
            <!--<v-list-tile-->
              <!--v-for="menu in menu.admin.servico"-->
              <!--:key="menu.title"-->
              <!--:to="menu.link"-->
            <!--&gt;-->
              <!--<v-list-tile-action>-->
                <!--<v-icon v-text="menu.icon"></v-icon>-->
              <!--</v-list-tile-action>-->
              <!--<v-list-tile-title v-text="menu.title"></v-list-tile-title>-->
            <!--</v-list-tile>-->
          <!--</v-list-group>-->
        <!--</v-list-group>-->
        <v-divider></v-divider>
        <!--<v-list-group prepend-icon="person" no-action>-->
          <!--<v-list-tile slot="activator">-->
            <!--<v-list-tile-title>Minha Conta</v-list-tile-title>-->
          <!--</v-list-tile>-->
          <!--<v-list-tile-->
            <!--v-for="menu in menu.admin.minhaconta"-->
            <!--:key="menu.title"-->
            <!--:to="menu.link"-->
          <!--&gt;-->
            <!--<v-list-tile-action>-->
            <!--<v-icon v-text="menu.icon"></v-icon>-->
            <!--</v-list-tile-action>-->
            <!--<v-list-tile-title v-text="menu.title"></v-list-tile-title>-->
            <!--&lt;!&ndash;<v-list-tile-action>&ndash;&gt;-->
              <!--&lt;!&ndash;<v-icon v-text="menu.icon"></v-icon>&ndash;&gt;-->
            <!--&lt;!&ndash;</v-list-tile-action>&ndash;&gt;-->
          <!--</v-list-tile>-->
        <!--</v-list-group>-->

        <!--<v-list-group-->
          <!--prepend-icon="account_circle"-->
          <!--value="true"-->
        <!--&gt;-->
          <!--<v-list-tile slot="activator">-->
            <!--<v-list-tile-title>Users</v-list-tile-title>-->
          <!--</v-list-tile>-->

          <!--<v-list-group-->
            <!--no-action-->
            <!--sub-group-->
            <!--value="true"-->
          <!--&gt;-->
            <!--<v-list-tile slot="activator">-->
              <!--<v-list-tile-title>Admin</v-list-tile-title>-->
            <!--</v-list-tile>-->

            <!--<v-list-tile-->
              <!--v-for="(admin, i) in admins"-->
              <!--:key="i"-->
              <!--@click=""-->
            <!--&gt;-->
              <!--<v-list-tile-title v-text="admin[0]"></v-list-tile-title>-->
              <!--<v-list-tile-action>-->
                <!--<v-icon v-text="admin[1]"></v-icon>-->
              <!--</v-list-tile-action>-->
            <!--</v-list-tile>-->
          <!--</v-list-group>-->

          <!--<v-list-group-->
            <!--sub-group-->
            <!--no-action-->
          <!--&gt;-->
            <!--<v-list-tile slot="activator">-->
              <!--<v-list-tile-title>Actions</v-list-tile-title>-->
            <!--</v-list-tile>-->

            <!--<v-list-tile-->
              <!--v-for="(crud, i) in cruds"-->
              <!--:key="i"-->
              <!--@click=""-->
            <!--&gt;-->
              <!--<v-list-tile-title v-text="crud[0]"></v-list-tile-title>-->
              <!--<v-list-tile-action>-->
                <!--<v-icon v-text="crud[1]"></v-icon>-->
              <!--</v-list-tile-action>-->
            <!--</v-list-tile>-->
          <!--</v-list-group>-->
        <!--</v-list-group>-->
      </v-list>
    </v-navigation-drawer>
    <v-toolbar app fixed clipped-left class="pink darken-3" dark>
      <v-toolbar-side-icon @click.stop="drawer = !drawer" > </v-toolbar-side-icon>
      <v-btn icon large>
        <v-avatar size="45px" tile  to="/">
          <img
            src="./assets/kAYA-lOGO-TRANSPARENT.png"
            alt="Kaya"
          >
        </v-avatar>
      </v-btn>
      <!--<v-toolbar-title class="headline text-uppercase">-->
        <!--<span>K</span>-->
        <!--&lt;!&ndash;<span class="font-weight-light">MATERIAL DESIGN</span>&ndash;&gt;-->
      <!--</v-toolbar-title>-->
      <!--<v-toolbar-items>-->
        <!--<v-btn flat v-for="menu in menuGeral" :key="menu.title" :to="menu.link">-->
          <!--<v-icon>{{menu.icon}}</v-icon>-->
          <!--{{menu.title}}-->
        <!--</v-btn>-->
      <!--</v-toolbar-items>-->
      <v-spacer></v-spacer>
      <v-toolbar-items v-if="userStore.authUser === null">
        <v-btn flat v-for="menu in menuLogin" :key="menu.title" :to="menu.link">
          <v-icon>{{menu.icon}}</v-icon>
          {{menu.title}}
        </v-btn>
      </v-toolbar-items>
      <!--<v-spacer></v-spacer>-->
      <!--<v-btn icon>-->
        <!--<v-icon>apps</v-icon>-->
      <!--</v-btn>-->
      <!--<v-btn icon>-->
        <!--<v-icon>notifications</v-icon>-->
      <!--</v-btn>-->

        <!--<v-icon-->
          <!--large-->
          <!--color="grey lighten-1"-->
        <!--&gt;-->
          <!--shopping_cart-->
        <!--</v-icon>-->
        <v-btn icon large v-if="userD !== null">
          <v-badge  left color="red">
            <span slot="badge">6</span>
          <v-icon>notifications</v-icon>
          </v-badge>
        </v-btn>
      <!--<v-btn icon large>-->
        <!--<v-avatar size="32px" tile>-->
          <!--<img-->
            <!--src="https://cdn.vuetifyjs.com/images/logos/logo.svg"-->
            <!--alt="Vuetify"-->
          <!--&gt;-->
        <!--</v-avatar>-->
      <!--</v-btn>-->
      <v-toolbar-items v-if="userD !== null">
        <v-menu offset-y>
          <v-btn
            slot="activator"
            dark
            icon
            large
            :title="userD.name"
            flat
          >
            <v-avatar size="45px">
              <img
                :src="userD.foto"
                :alt="userD.name"
              >
            </v-avatar>
          </v-btn>
          <!--userStore.authUser != null && item.title == 'sair'"  @click="logOutUser"-->
          <v-list>
            <v-list-tile
              v-for="(item, index) in menu.logado"
              :key="index"
              :to="item.link"
              v-if="userStore.authUser != null && item.title != 'sair'"
            >
              <v-icon>{{item.icon}}</v-icon>
              <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-tile>
            <v-list-tile
              v-for="(item, index) in menu.logado"
              :key="index"
              :to="item.link"
              v-if="userStore.authUser != null && item.title == 'sair'" @click="logOutUser()"
            >
              <v-icon>{{item.icon}}</v-icon>
              <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-tile>
          </v-list>
        </v-menu>
      </v-toolbar-items>
    </v-toolbar>
   <!--<TopMenu></TopMenu>-->
    <v-content>
      <router-view></router-view>
    </v-content>
  </v-app>
</template>

<script>
// import TopMenu from './components/menu/TopMenu'
import { mapState } from 'vuex'
import { userUrl, getHeader } from './config'

export default {
  name: 'App',
  components: {
    // TopMenu
  },
  created () {
    const userObj = JSON.parse(window.localStorage.getItem('authUser'))
    if (userObj !== null) {
      this.$store.dispatch('setAuthUser', userObj)
      this.checkUserStatus()
      this.$store.dispatch('getUser')
    }
  },
  computed: {
    ...mapState({
      userStore: state => state.userStore
    }),
    userD () {
      return this.$store.getters.user
    }
  },
  data () {
    return {
      drawer: false,
      menuLogin: [
        { title: 'Entrar', icon: 'supervisor_account', link: '/entrar' },
        { title: 'Criar conta', icon: 'person_add', link: '/criar-conta' }
      ],
      menuGeral: [
        { title: 'Salões', icon: 'explore', link: '/servicos/casaseventos' }
      ],
      menu: {
        logado: [
          { icon: 'settings', title: 'Configuracoes', link: '/admin/configuracoes' },
          { icon: 'supervisor_account', title: 'Minha Conta', link: '/utilizador/perfil' },
          { icon: 'exit_to_app', title: 'sair', link: '/' }
        ],
        admin: {
          minhaconta: [
            { icon: 'settings', title: 'Servicos', link: '/minha-conta/servicos' },
            { icon: 'supervisor_account', title: 'Minha conta', link: '/utilizador/perfil' }
          ],
          servico: [
            { icon: 'add', title: 'Novos', link: '/admin/servicos' }
          ]
        }
      },
      admins: [
        ['Management', 'people_outline'],
        ['Settings', 'settings']
      ],
      cruds: [
        ['Create', 'add'],
        ['Read', 'insert_drive_file'],
        ['Update', 'update'],
        ['Delete', 'delete']
      ]
    }
  },
  methods: {
    logOutUser () {
      this.$store.dispatch('clearAuth')
      window.localStorage.removeItem('authUser')
      this.$store.dispatch('clearUser')
      this.$router.push('/')
    },
    checkUserStatus () {
      this.$http.get(userUrl, { headers: getHeader() }).then(response => {
      }).catch(error => {
        console.log('errosUser', error)
        if (error.status === 401) {
          this.$store.dispatch('clearAuth')
          window.localStorage.removeItem('authUser')
          this.$store.dispatch('clearUser')
          this.$router.push('/')
        }
      })
    }
  }
}
</script>
