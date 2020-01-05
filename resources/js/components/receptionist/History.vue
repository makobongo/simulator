<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">View the history</div>

                    <div class="card-body" v-for="(history, index) in histories" :key="index">
                        <p>
                            Refered Patient to: <strong>{{ history.department }} department</strong><br> Doctors name: <strong>{{ history.doctor }}</strong>
                            <br> Date refered: <strong>{{ history.created_at | isDate }}</strong>
                            <br> Receptionist: <strong>{{ history.name }}</strong>
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
           axios.get('api/historyrecep')
            .then(({data}) => ( 
                this.histories = data
                // console.log(data)
                // data.forEach(d => {
                //     this.history = d
                // })
             ))
            .catch(err => console.log(err));
        }
    }
</script>
