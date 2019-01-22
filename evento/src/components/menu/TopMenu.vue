<template>
  <v-app>
    <v-navigation-drawer
      stateless
      value="true"
    >
      <v-list>
        <v-list-tile>
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Home</v-list-tile-title>
        </v-list-tile>

        <v-list-group
          prepend-icon="account_circle"
          value="true"
        >
          <v-list-tile slot="activator">
            <v-list-tile-title>Users</v-list-tile-title>
          </v-list-tile>

          <v-list-group
            no-action
            sub-group
            value="true"
          >
            <v-list-tile slot="activator">
              <v-list-tile-title>Admin</v-list-tile-title>
            </v-list-tile>

            <v-list-tile
              v-for="(admin, i) in admins"
              :key="i"
              @click=""
            >
              <v-list-tile-title v-text="admin[0]"></v-list-tile-title>
              <v-list-tile-action>
                <v-icon v-text="admin[1]"></v-icon>
              </v-list-tile-action>
            </v-list-tile>
          </v-list-group>

          <v-list-group
            sub-group
            no-action
          >
            <v-list-tile slot="activator">
              <v-list-tile-title>Actions</v-list-tile-title>
            </v-list-tile>

            <v-list-tile
              v-for="(crud, i) in cruds"
              :key="i"
              @click=""
            >
              <v-list-tile-title v-text="crud[0]"></v-list-tile-title>
              <v-list-tile-action>
                <v-icon v-text="crud[1]"></v-icon>
              </v-list-tile-action>
            </v-list-tile>
          </v-list-group>
        </v-list-group>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar app class="pink darken-3" dark>
      <v-toolbar-title class="headline text-uppercase">
        <span>K</span>
        <!--<span class="font-weight-light">MATERIAL DESIGN</span>-->
      </v-toolbar-title>
      <v-toolbar-items>
        <v-btn flat v-for="menu in menuGeral" :key="menu.title" :to="menu.link">
          <v-icon>{{menu.icon}}</v-icon>
          {{menu.title}}
        </v-btn>
      </v-toolbar-items>
      <v-spacer></v-spacer>
      <v-toolbar-items>
        <v-btn flat v-for="menu in menuLogin" :key="menu.title" :to="menu.link">
          <v-icon>{{menu.icon}}</v-icon>
          {{menu.title}}
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>
  </v-app>
</template>

<script>
export default {
  name: 'TopMenu',
  data () {
    return {
      menuLogin: [
        { title: 'Entrar', icon: 'supervisor_account', link: '/entrar' },
        { title: 'Criar conta', icon: 'person_add', link: '/criar-conta' }
      ],
      menuGeral: [
        { title: 'Salões', icon: 'explore', link: '/servicos/casaseventos' }
      ]
    }
  }
}
</script>

<style scoped>

</style>
