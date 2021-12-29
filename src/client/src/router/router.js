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
];

export default new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    scrollBehavior () {
        return {
            x: 0,
            y: 0
        }
    },
    routes
  })
