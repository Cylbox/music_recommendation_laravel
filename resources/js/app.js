import Vue from 'vue'

import App from './components/App'
import VueYoutube from 'vue-youtube'

import router from './router'
import Vuetify from "./plugins/vuetify";
import CKEditor from 'ckeditor4-vue';
Vue.use(CKEditor);
import VueToast from 'vue-toast-notification';
//import "materialize-css/dist/css/materialize.min.css";
//import 'material-design-icons-iconfont/dist/material-design-icons.css'
import '@mdi/font/css/materialdesignicons.css'
import 'vue-toast-notification/dist/theme-sugar.css';

require('./bootstrap');

Vue.use(VueToast);
Vue.use(VueYoutube);
Vue.component('app', require('./components/App').default)

new Vue({
    el: '#app',
    components:{App},
    router,
    vuetify: Vuetify,
    render: (h) => h(App)
})

