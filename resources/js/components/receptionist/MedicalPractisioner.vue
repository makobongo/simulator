<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Medical Practioners to refer patients to:</h5>
                        <!-- <form> -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <p>Radiology</p>
                                    <select v-model="radiology.doctor" name="department" id="department" class="form-control form-control-sm">
                                        <option value="">select practioner</option>
                                        <option value="Dr.Luke">Dr.Luke</option>
                                        <option value="Dr.Sivachi">Dr.Sivachi</option>
                                    </select>
                                    <br>
                                    <button @click="registerRadio" type="submit" class="btn btn-dark btn-block btn-sm"> Choose medical practioner&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                                </div>
                                <div class="col-sm-4">
                                    <p>laboratory</p>
                                    <select v-model="laboratory.doctor" name="department" id="department" class="form-control form-control-sm">
                                        <option value="">select practioner</option>
                                        <option value="Dr.Anwar">Dr.Anwar</option>
                                        <option value="Dr.Okoye">Dr.Okoye</option>
                                    </select>
                                    <br>
                                    <button @click="registerLab" type="submit" class="btn btn-dark btn-block btn-sm"> Choose medical practioner&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                                </div>
                                <div class="col-sm-4">
                                    <p>treatment</p>
                                    <select v-model="treat.doctor" name="department" id="department" class="form-control form-control-sm">
                                        <option value="">select practioner</option>
                                        <option value="Dr.cecilia">Dr.cecilia</option>
                                        <option value="Dr.Jian">Dr.Jian</option>
                                    </select>
                                    <br>
                                    <button @click="registerTreat" type="submit" class="btn btn-dark btn-block btn-sm"> Choose medical practioner&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                            <br>
                        <!-- </form> -->
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
               radiology: {
                   department: 'radiology',
                   doctor:''
               },
               laboratory: {
                   department: 'laboratory',
                   doctor:''
               },
               treat:{
                   department: 'treatment',
                   doctor:''
               }
           }
       },
        methods:{
            registerRadio(){
                axios.post('api/referals', this.radiology)
                .then(()=>{
                    toast.fire({
                        type: 'success',
                        title: 'successfully added referal'
                    })
                })
                .catch(err=>{
                    console.log(err)
                })
            },
            registerLab(){
                 axios.post('api/referals', this.laboratory)
                .then(()=>{
                    toast.fire({
                        type: 'success',
                        title: 'successfully added referal'
                    })
                })
                .catch(err=>{
                    console.log(err)
                })
            },
            registerTreat(){
                axios.post('api/referals', this.treat)
                .then(()=>{
                    toast.fire({
                        type: 'success',
                        title: 'successfully added referal'
                    })
                })
                .catch(err=>{
                    console.log(err)
                })
            },
           }
    }
</script>
