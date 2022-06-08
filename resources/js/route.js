import HomeView from './components/HomeView.vue';
import AboutView from './components/AboutView.vue';
import router from './app';
import NotFound from './components/NotFound.vue';
import Login from './components/LoginView.vue';
import Register from './components/RegisterView.vue';


export default {
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: HomeView
        },
        {
            path: '/about',
            component: AboutView
        }
    ],

}