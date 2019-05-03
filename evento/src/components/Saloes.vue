<template>
  <v-app>
    <v-container fluid grid-list-md text-xs-center>
      <v-layout>
        <v-flex xs12 sm12 md12>
          <v-card color="grey lighten-2" flat>
             <v-layout row wrap>
               <v-flex xs12 sm4 md3>
                 <v-card flat elevation="2">
                   <v-img
                           src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
                           aspect-ratio="2.75"
                           max-height="200"
                           min-height="200"
                   >
                   </v-img>
                   <v-card-title>
                     <div class="text-xs-left">
                       <h5 class="headline mb-0">Kangaroo Valley Safari</h5>
                         <span class="grey--text">Number 10</span><br>
                         <span>Whitehaven Beach</span><br>
                         <span>Whitsunday Island, Whitsunday Islands</span>
                     </div>
                   </v-card-title>
                   <v-card-text>
                     <div class="text-xs-left">Talvez</div>
                   </v-card-text>
                   <v-divider></v-divider>
                   <v-card-actions>
                     <v-spacer></v-spacer>
                     <v-btn flat>reservar</v-btn>
                   </v-card-actions>
                 </v-card>
               </v-flex>
             </v-layout>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </v-app>
</template>

<script>
export default {
  name: 'Saloes'
}
</script>

<style scoped>

</style>
