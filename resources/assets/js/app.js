import router from './routes.js';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



import VueRouter from 'vue-router'

Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('my-navbar', require('./components/Navigation.vue'));
//Vue.component('my-form', require('./components/Form.vue'));
Vue.component('my-show', require('./components/ShowTodos.vue'));
Vue.component('my-side', require('./components/Sidenav.vue'));
const app = new Vue({
    el: '#app',
    router,

  });
