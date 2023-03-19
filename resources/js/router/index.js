import Vue from "vue";

Vue.use(VueRouter)
import VueRouter from "vue-router";

const files = require.context('../pages', true, /\.vue$/i)

const routes = files.keys().map(key => {
    let allData = key.split('/');
    let name = allData.pop().split('.')[0].toLowerCase();
    let path = '/' + name;
    return {
        path: path,
        name: name,
        component: files(key).default
    }
})

routes.push({
    path: '/',
    redirect: '/home'
})

const router = new VueRouter({
    routes,
    mode: "history"
})

router.beforeEach((to, from, next) => {
    const token = localStorage.getItem('x_xsrf_token')

    // if (token && to.path !== '/logout') {
    //
    // }

    if ((to.name === 'login' || to.name === 'register') && token) {
        return next({
            name: 'home'
        })
    }
    return next()
})

export default router

