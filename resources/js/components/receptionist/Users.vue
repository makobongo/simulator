<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <strong>
                            Patients Who have booked appointment: 
                        </strong>
                        <table class="table table-success">
                        <thead>
                            <tr>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">phone</th>
                            <th scope="col">Department</th>
                            <th scope="col">Date booked Appointment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(user, index) in users" :key="index">
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.phone }}</td>
                                <td>{{ user.department }}</td>
                                <td>{{ user.created_at | isDate }}</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        data(){
            return {
                users:[],
                referals:{
                    department:''
                }
            }
        },
        methods:{
            
        },
        created(){
            axios.get('api/users')
            .then(({data}) => ( 
                this.users = data
                // console.log(data)
                // data.forEach(d => {
                //     this.history = d
                // })
             ))
            .catch(err => console.log(err));
        }
    }
</script>
