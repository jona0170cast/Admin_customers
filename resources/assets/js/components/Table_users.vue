


<template>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table</h6>
            <!-- <h1>{{ test }}</h1> -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <!-- <th>Created At</th> -->
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
                           <!--  <th>{{ data.created_at }} </th> -->
                            <td>botones</td>                            
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>

     <!--    <ul>
            <li v-for="data in users">
             {{ data.id }} 
         </li>
     </ul> -->

 </div>

</template>

<script>
    export default {       
        data() {
            return {
                users: null
            };
        },
        mounted() {
            axios
            .get('http://127.0.0.1:8000/getusers')
            .then(response =>
                (this.users = response.data)
                // console.log(response.data)               
                )
            .catch(error =>
             console.log(error)
             )
        }
    }
</script>


