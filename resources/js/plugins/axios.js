import Vue from "vue";
import axios from 'axios'
import UserClass from "../classes/UserClass";

const instance = axios.create({baseURL: '/'});

instance.defaults.headers.common['Authorization'] = 'Bearer ' + window.token;
instance.defaults.headers.common['Accept'] = 'application/json';

instance.interceptors.response.use(null, function (error) {
    if (error.response) {
        switch (error.response.status) {
            case 401:
                axios.post('/logout').finally(() => {
                    window.location = '/login'
                })
                break
            case 403:
                Vue.$toast.error('Не хватает прав')
                break
        }
    }
    return Promise.reject(error)
})


Vue.prototype.$http = instance;
Vue.prototype.$query = (url, query = null) => {
    if (query || query.length) {
        function serializeQuery(params, prefix) {
            const query = Object.keys(params).map((key) => {
                let value = params[key]
                if (!value) {
                    value = ''
                }
                if (params.constructor === Array) {
                    key = `${prefix}[]`
                } else if (params.constructor === Object) {
                    key = (prefix ? `${prefix}[${key}]` : key)
                }

                if (typeof value === 'object') {
                    return serializeQuery(value, key)
                } else {
                    return `${key}=${encodeURIComponent(value)}`
                }
            })

            return [].concat.apply([], query).join('&')
        }

        return `${url}?${serializeQuery(query)}`
    }
    return url
}
Vue.prototype.$queryParseToObject = ($route = {}, defaultFilters = {}) => {
    if (Object.keys($route.query).length) {
        let filters = Object.assign(defaultFilters, $route.query)
        for (const query in filters) {
            if (query === 'page' || query === 'status') {
                filters[query] = parseInt(filters[query])
            } else if (query === 'categories' || query === 'tags') {
                if (filters[query] instanceof Array) {
                    filters[query] = filters[query].map(e => parseInt(e))
                } else {
                    filters[query] = [parseInt(filters[query])]
                }
            } else if (query === 'active' || query === 'moderate') {
                filters[query] = filters[query] === 'true'
            }
        }
        return filters
    } else {
        return defaultFilters
    }
}
let user = new UserClass(window.authUser || {})
Vue.prototype.$user = user

export default axios
