import Vue from 'vue'
import App from './App.vue'

import {router} from './router'
import vuetify from "./plugins/vuetify";
import CKEditor from 'ckeditor4-vue';
Vue.use(CKEditor);
import VueToast from 'vue-toast-notification';

import 'vue-toast-notification/dist/theme-sugar.css';

require('./bootstrap');

//window.Vue = require('vue').default;

Vue.use(VueToast);
Vue.component('app', require('./components/App').default)

new Vue({
    el: '#app',
    router,
    vuetify,
    render: (h) => h(App)
})

