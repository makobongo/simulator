import Vue from 'vue';
import VueRouter from 'vue-router';
import { BookAppointment, MedicalHistory } from './components/users';
import { Users, History,MedicalPractisioner } from './components/receptionist';
Vue.use(VueRouter);

const routes = [
     { 
      path: '/appointment', 
      component: BookAppointment
   },
   { 
    path: '/history', 
    component: MedicalHistory
   },
   { 
    path: '/users', 
    component: Users
   },
   { 
    path: '/historyrecep', 
    component: History
   },
   { 
    path: '/practioner', 
    component: MedicalPractisioner
   },
  ]

  const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: 'history'
  })

export default router;