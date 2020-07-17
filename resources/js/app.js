require('./bootstrap');

// import Vue from 'vue'
window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)


let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/personal-info', component: require('./components/PersonalInfo.vue').default },
    { path: '/income', component: require('./components/Income.vue').default },
    { path: '/assets', component: require('./components/Assets.vue').default },
    { path: '/libilities', component: require('./components/Liabilities.vue').default },
    { path: '/expenses', component: require('./components/Expenses.vue').default },
    { path: '/final-review', component: require('./components/FinalReview.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/download', component: require('./components/Download.vue').default },
]


const router = new VueRouter({
    routes //register array of router
})


const app = new Vue({
    el: '#app',
    router
});