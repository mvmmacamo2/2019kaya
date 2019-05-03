<template>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table-users" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Email</th>
                            <th>Posição</th>
                            <th>Data Nascimento</th>
                            <th>Acções</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="u in utilizadores">
                            <td>{{u.name}}</td>
                            <td>
                                {{u.apelido}}
                            </td>
                            <td>{{u.email}}</td>
                            <td>{{u.nivel}}</td>
                            <td>{{u.data_nascimento}}</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</template>

<script>
  export default {
    mounted() {
        console.log('Component mounted.')
    },
    created () {
        this.users()
    },
    data () {
      return {
          utilizadores: null
      }
    },
    methods: {
        users () {
            axios.get('get-users').then(response => {
                console.log(response.data)
                this.utilizadores =response.data
            })
        }
    }
  }
</script>

