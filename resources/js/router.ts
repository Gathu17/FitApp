//@ts-ignore
import { createRouter,createWebHistory } from 'vue-router'


export default createRouter({
    history: createWebHistory(), 
    routes: [
        {
            path:'/home',
            name:'home',
            component: () => import('./pages/home/Home.vue')
        },
    ]
})
