<template>
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
