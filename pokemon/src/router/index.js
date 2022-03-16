import {createRouter, createWebHistory} from "vue-router";
import DefaultLayout from '../components/DefaultLayout.vue';
import Login from '../views/Login.vue';
import Register from '../views/Register.vue';
import Dashboard from '../views/Dashboard.vue';
import Pokemons from '../views/PokemonList.vue';
import store from "../store";
import AuthLayout from "../views/AuthLayout.vue"

const routes = [
    {
        path: '/',
        redirect: '/dashboard',
        component: DefaultLayout,
        meta: {requiresAuth: true },
        children: [
            { path: '/dashboard', name: 'Dashboard', component: Dashboard },
            { path: '/pokemons', name: 'Pokemons', component: Pokemons }
        ]    
    },
    {
        path: '/auth',
        redirect: '/login',
        name: 'Auth',
        component: AuthLayout,
        meta: {isGuest: true},
        children: [
            {
                path: '/login',
                name: 'Login',
                component: Login
            },
            {
                path: '/register',
                name: 'Register',
                component: Register
            },
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to,from,next) => {
    if(to.meta.requiresAuth && !store.state.user.token) {
        next({name: 'Login'})
    } else if(store.state.user.token && (to.meta.isGuest)) {
        next({name: 'Dashboard'});
    } else {
        next()
    }
})

export default router;