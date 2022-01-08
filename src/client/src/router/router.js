import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'start',
        component: () => import('@/views/StartPage.vue')
    },
    {
        path: '/explore',
        name: 'explore',
        component: () => import('@/views/ExplorePage.vue')
    },
    {
        path: '/docs',
        name: 'documentation',
        component: () => import('@/views/DocumentationPage.vue')
    },
       {
        path: '/references',
        name: 'references',
        component: () => import('@/views/ReferencesPage.vue')
    },
    {
        path: '*',
        name: '404',
        component: () => import('@/views/PageNotFound.vue')
    }
];

export default new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    scrollBehavior(to) {
        if (to.hash) {

            const hashPostion = document.querySelector(`${to.hash}`).offsetTop - 60 - 20;

            return {
                x: 0,
                y: hashPostion , // 60 -> navbar height
            }
        }

        return {
            x: 0,
            y: 0
        }
    },
    routes
  })
