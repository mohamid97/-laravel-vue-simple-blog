import { createRouter, createWebHistory } from 'vue-router'
import Home from '../pages/Home.vue'
import Contactus from '../pages/Contactus.vue'
import Post from '../pages/Post.vue'
import Login from '../pages/auth/Login.vue'
import Register from '../pages/auth/Register.vue'
const routes = [
    {
        path:'/',
        name:'root',
        component:Home

    },
    {
        path:'/post/:id',
        name:'post',
        component:Post

    },
    {
        path:'/login',
        name:'login',
        component:Login

    },
    {
        path:'/register',
        name:'register',
        component:Register

    },
    {
       path :'/contact-us',
       name:'Contactus',
       component:Contactus
    }
];
const router = new createRouter({
    history: createWebHistory(),
    routes
});

export default router;
