<template>
  <v-app>
    <!--<v-toolbar app>-->
      <!--<v-toolbar-title class="headline text-uppercase">-->
        <!--<span>Vuetify</span>-->
        <!--<span class="font-weight-light">MATERIAL DESIGN</span>-->
      <!--</v-toolbar-title>-->
      <!--<v-spacer></v-spacer>-->
      <!--<v-toolbar-items>-->
        <!--<v-btn flat>-->
          <!--Entrar-->
        <!--</v-btn>-->
        <!--<v-btn flat>-->
          <!--Criar Conta-->
        <!--</v-btn>-->
      <!--</v-toolbar-items>-->
    <!--</v-toolbar>-->
   <TopMenu></TopMenu>
    <v-content>
      <HelloWorld/>
    </v-content>
  </v-app>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import TopMenu from './components/menu/TopMenu'

export default {
  name: 'App',
  components: {
    HelloWorld,
    TopMenu
  },
  data () {
    return {
      //
    }
  }
}
</script>
