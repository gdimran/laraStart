require('./bootstrap');

// import Vue from 'vue'
window.Vue = require('vue');
import moment from 'moment';

import { Form, HasError, AlertError } from 'vform';

import Gate from "./Gate";




import VueRouter from 'vue-router'
Vue.use(VueRouter)
let routes = [
    { path: '/e-tin', component: require('./components/personalInfo/e-tin.vue').default },
    { path: '/personal', component: require('./components/personalInfo/personal.vue').default },
    { path: '/additionalInfo', component: require('./components/personalInfo/additionalInfo.vue').default },
    { path: '/mydocuments', component: require('./components/personalInfo/mydocuments.vue').default },

]


const personalRouter = new VueRouter({
    mode: 'history',
    routes //register array of router
})

Vue.filter('upText', function(text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
});
Vue.filter('dateFor', function(created) {
    return moment().format('MMMM Do YYYY');
});

window.Fire = new Vue();

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);



const app = new Vue({
    el: '#personal',
    personalRouter
});