
window.Vue = require('vue').default;

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './route.js';

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});
