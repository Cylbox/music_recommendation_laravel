const router = require("./router");
import Vue from "vue";
window._ = require('lodash');

// try {
//     require('bootstrap');
// } catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Accept'] = 'application/json';
window.axios.defaults.withCredentials = true;
// window.axios.interceptors.response.use({}, err => {
//     if(err.response.status === 401 || err.response.status === 419 ){
//         const token = localStorage.getItem('x_xsrf_token')
//         if(token) {
//             localStorage.removeItem('x_xsrf_token')
//         }
//         router.push('/login')
//     }
//     return Promise.reject(err);
// })
window.axios.interceptors.response.use(null, error => {
    if (error.response) {
        switch (error.response.status) {
            case 401:
                const token = localStorage.getItem('x_xsrf_token')
                if(token) {
                    localStorage.removeItem('x_xsrf_token')
                    window.axios.post('/logout').finally(() => {
                        window.location = '/login'
                    })
                }
                break
            case 403:
                Vue.$toast.error('Не хватает прав')
                break
        }
    }
    return Promise.reject(error)
})
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
