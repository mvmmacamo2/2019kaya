<template>
 <v-app>
   <v-container luid grid-list-md text-xs-center>
     <v-card>
       <v-layout row wrap>
         <v-flex xs12 sm4 v-for="item in items" :key="item.color">
           <v-card
             :color="item.color"
             dark
           >
             <v-card-title class="title">Lorem Ipsum Dolor</v-card-title>
             <v-card-text class="white text--primary">
               <p>Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus, vix an salutandi sententiae.</p>
               <v-btn
                 :color="item.color"
                 class="mx-0"
                 outline
               >
                 Button
               </v-btn>
             </v-card-text>
           </v-card>
         </v-flex>
       </v-layout>
     </v-card>
   </v-container>
 </v-app>
</template>

<script>
export default {
  name: 'Servicos',
  data () {
    return {
      items: [
        {
          color: 'red lighten-2',
          icon: 'mdi-star'
        },
        {
          color: 'purple darken-1',
          icon: 'mdi-book-variant'
        },
        {
          color: 'green lighten-1',
          icon: 'mdi-airballoon'
        },
        {
          color: 'indigo',
          icon: 'mdi-buffer'
        }
      ]
    }
  }
}
</script>

<style scoped>

</style>
