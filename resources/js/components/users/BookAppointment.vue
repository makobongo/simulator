<template>
    <div class="container fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Book appointment</h4>
                        <form @submit.prevent="BookAppointment">
                            <div class="row offset-md-3">
                                <div class="col-sm-8">
                                    <select v-model="form.department" name="department" id="department" class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('department') }">
                                        <option value="">Please select department</option>
                                        <option value="laboratory">Laboratory</option>
                                        <option value="radiology">Radiology</option>
                                        <option value="treatment">Treatment</option>
                                        <option value="optical">Optical</option>
                                    </select>
                                    <has-error :form="form" field="department"></has-error>
                                </div>
                            </div>
                            <br>
                            <div class="row offset-md-3">
                                <div class="col-sm-8">
                                    <textarea v-model="form.message" name="message" placeholder="Enter your message here" class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('message') }"></textarea>
                                    <has-error :form="form" field="message"></has-error>
                                </div>
                            </div>
                            <br>
                            <div class="row offset-md-3">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-dark btn-block btn-sm">Book appointment&nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                        </form>
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
                form: new Form({
                department: '',
                message: '',
                // id:'',
                // name:'',
                // phone: '',
                // email:''
            })
            }
        },
        methods: {
            BookAppointment(){
                // console.log(this.form);
                this.form.post('api/user')
                .then(res=>{
                    console.log(res);
                    toast.fire({
                        type: 'success',
                        title: 'successfully created appointment'
                    })
                    this.form.reset();
                })
                .catch(err=>{
                    // this.$Progress.fail();
                    console.log(err)
                })
            }
        },
        // created(){
        //     axios.get('api/profile')
        //     .then(({ data })=>(this.form.fill(data)));
        // }
    }
</script>
