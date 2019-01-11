<template>
 <v-app>
   <v-toolbar dark class="indigo darken-2">
     <v-toolbar-side-icon></v-toolbar-side-icon>

     <v-toolbar-title class="white--text">Kaya</v-toolbar-title>

     <v-spacer></v-spacer>

     <v-toolbar-items>
       <v-btn flat v-for="menu in menuLogin" :key="menu.title" :to="menu.link">
         <v-icon>{{menu.icon}}</v-icon>
         {{ menu.title}}
       </v-btn>
     </v-toolbar-items>
   </v-toolbar>
 </v-app>
</template>

<script>
export default {
  name: 'App',
  data () {
    return {
      menuLogin: [
        {icon: 'person_add', title: 'Criar conta', link: '/criar-conta'},
        {icon: 'supervisor_account', title: 'Entrar', link: '/login'}
      ]
    }
  }
}
</script>

<style>

</style>
