

<template>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table</h6>
            <!-- <h1>{{ test }}</h1> -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
               <!--  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>Role</th>                            
                            <th>Actions</th>
                        </tr>
                    </thead>                   
                    <tbody>
                        <tr v-for="data in users">
                            <td>{{ data.id }} </td>
                            <td>{{ data.first_name }} </td>
                            <td>{{ data.last_name }} </td>
                            <td>{{ data.email }} </td>
                            <td>{{ data.country.country }} </td>
                            <td>{{ data.state.state }} </td>
                            <th>{{ data.role.role }} </th>                           
                            <td>botones</td>                            
                        </tr> 
                    </tbody>
                </table> -->
                <!--  ejemplo correcto -->

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>Role</th>                            
                            <th>Actions</th>
                        </tr>
                    </thead>


                  <!--   <tbody>
                  </tbody> -->

              </table>



          </div>
      </div>
      <br>
      <br>


      <!--  <button class="btn-success" v-on:click="test()">test</button> -->

      <br>
      <br>
  </div>

</template>

<script>
    export default {       
        data() {
            return {
                users: null
                // users: [],
                // dataTable:null
            };
        },
        mounted() {
            axios
            .get('http://127.0.0.1:8000/getusers')
            .then(response =>
                (

                    this.users = response.data
                    // this.dtable(this.users)

                    // this.dtable()

                    // console.log(response.data),

                      // console.log(this.users[0].id)

                    //   $('#dataTable').DataTable( {
                    //     // "processing": true,
                    //     // "ajax": url,
                    //     "columns": [
                    //     { "data": 'response.data[0].id' },
                    //     { "data": 'response.data[0].first_name' },
                    //     { "data": 'response.data[0].last_name' },
                    //     { "data": 'response.data[0].email' },
                    //     { "data": 'response.data[0].country.country' },
                    //     { "data": 'response.data[0].state.state' },
                    //     { "data": 'response.data[0].role.role' },
                    //     { "data": 'response.data[0].role.role' }
                    //     ]
                    // } )





                      )

                )
            .catch(error =>
               console.log(error)
               )
        },

        methods: {
          dtable() {

            // var url = 'http://127.0.0.1:8000/getusers';

            // console.log(url);

            // alert();

            // console.log(params);

            // console.log(params.__ob__.value);

            // console.log(params[0].id);
            // console.log(params[0].first_name);
            // console.log(params[0].last_name);
            // console.log(params[0].email);
            // console.log(params[0].country.country);
            // console.log(params[0].state.state);
            // console.log(params[0].role.role);

            // var i;
            // var d = '';

            // for (i = 0; i < params.length; i++) {

            //    console.log(params[i].id);

            //     // aqui le estoy agregando estos valores y se guarda en la variable
            //     // con +=
            //     d+=params[i].id;


            // }

            //  // console.log(params[i].id);

            //  console.log(d);

            //  $('#dataTable').DataTable( {
            //     "processing": true,
            //     // "ajax": "data/objects_deep.txt",
            //     "columns": [
            //     { "data": d },
            //     { "data": d },
            //     { "data": d },
            //     { "data": d },
            //     { "data": d },
            //     { "data": d },
            //     { "data": d },
            //     { "data": d }
            //     ]
            // } );

            //   $('#dataTable').DataTable( {
            //     "processing": true,
            //     "ajax": url,
            //     "columns": [
            //     { "data": params[0].id },
            //     { "data": params[0].first_name },
            //     { "data": params[0].last_name },
            //     { "data": params[0].email },
            //     { "data": params[0].country.country },
            //     { "data": params[0].state.state },
            //     { "data": params[0].role.role },
            //     { "data": params[0].role.role }
            //     ]
            // } );









            //  $('#dataTable').DataTable( {
            //     "processing": true,
            //     // "ajax": "data/objects_deep.txt",
            //     "columns": [
            //     { "data": params[0].id },
            //     { "data": params[0].first_name },
            //     { "data": params[0].last_name },
            //     { "data": params[0].email },
            //     { "data": params[0].country.country },
            //     { "data": params[0].state.state },
            //     { "data": params[0].role.role },
            //     { "data": params[0].role.role }
            //     ]
            // } );

        }
    }
}
</script>


