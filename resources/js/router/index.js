import Vue from "vue";

Vue.use(VueRouter)
import VueRouter from "vue-router";

import Home from "../pages/Home"

const files = require.context('../pages', true, /\.vue$/i)

const routes = files.keys().map(key => {
    let allData = key.split('/');
    let name = allData.pop().split('.')[0].toLowerCase();
    console.log(name)
    let path = '/' + name;
    return {
        path: path,
        component: files(key).default
    }
})

export const router = new VueRouter({
    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home
        }
    ],
    mode: "history"
})

