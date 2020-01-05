<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Your Medical History</div>

                    <div class="card-body" v-for="(history, index) in histories" :key="index">
                        <p>
                            Department: <strong>{{ history.department }}</strong><br> Time Booked for appointment: <strong>{{ history.created_at | isDate }}</strong>
                        </p>
                        <button @click="printPage(history)" class="btn btn-danger btn-block btn-sm">Generate This report</button>
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
                histories:[]
            }
        },
        methods:{
            printPage(history){
                window.print(history);
            }
        },
        created(){
           axios.get('api/history')
            .then(({data}) => ( 
                this.histories = data
                // data.forEach(d => {
                //     this.history = d
                // })
             ))
            .catch(err => console.log(err));
        }
    }
</script>
