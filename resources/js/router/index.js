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

export const router = new VueRouter({
    routes,
    mode: "history"
})

