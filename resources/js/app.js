require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform';
import BootstrapVue from 'bootstrap-vue'
window.Form = Form;
Vue.use(BootstrapVue)
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import swal from 'sweetalert2';
import './assets/app.scss';
import router from './router';
import moment from 'moment';

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
  window.toast = toast;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/Navbar.vue').default);

Vue.filter('isDate', function(created){
  return moment(created).format('MMMM Do YYYY');
});

const app = new Vue({
    el: '#app',
    router,
});
