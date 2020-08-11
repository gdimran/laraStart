require('./bootstrap');

// import Vue from 'vue'
window.Vue = require('vue');
import moment from 'moment';


// import { Form, HasError, AlertError } from 'vform';

// import Gate from "./Gate";
// Vue.prototype.$gate = new Gate(window.user);

// window.Form = Form;
// Vue.component(HasError.name, HasError)
// Vue.component(AlertError.name, AlertError)


// import VueProgressBar from 'vue-progressbar';
// Vue.use(VueProgressBar, {
//     color: 'rgb(143, 255, 199)',
//     failedColor: 'red',
//     height: '2px'
// })

// import Swal from 'sweetalert2';
// window.Swal = Swal;
// const Toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000,
//     timerProgressBar: true,
//     onOpen: (toast) => {
//         toast.addEventListener('mouseenter', Swal.stopTimer)
//         toast.addEventListener('mouseleave', Swal.resumeTimer)
//     }
// })
// window.Toast = Toast;


// import VueRouter from 'vue-router'
// Vue.use(VueRouter)
// let routes = [
//     { path: '/dashboard', component: require('./components/Dashboard.vue').default },
//     { path: '/personal-info', component: require('./components/PersonalInfo.vue').default },
//     { path: '/income', component: require('./components/Income.vue').default },
//     { path: '/assets', component: require('./components/Assets.vue').default },
//     { path: '/libilities', component: require('./components/Liabilities.vue').default },
//     { path: '/expenses', component: require('./components/Expenses.vue').default },
//     { path: '/final-review', component: require('./components/FinalReview.vue').default },
//     { path: '/profile', component: require('./components/Profile.vue').default },
//     { path: '/developer', component: require('./components/Developer.vue').default },
//     { path: '/download', component: require('./components/Download.vue').default },
//     { path: '/users', component: require('./components/users.vue').default },
// ]


// const router = new VueRouter({
//     mode: 'history',
//     routes //register array of router
// })

// Vue.filter('upText', function(text) {
//     return text.charAt(0).toUpperCase() + text.slice(1);
// });
// Vue.filter('dateFor', function(created) {
//     return moment().format('MMMM Do YYYY');
// });

//window.Fire = new Vue();
//import HomeSlider from './components/homeSlider.vue';

Vue.component('Slider', require('./components/Slider.vue').default);






const home = new Vue({
    el: "#app",
    // router
});