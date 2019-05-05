import VueRouter from 'vue-router'
import Home from './components/Home'
import Service from './components/Service'

let routes = [
    {
        path: '/home',
        name: 'Home2',
        component: Home
    },
    {
        path: '/servicos',
        name: 'Service',
        component: Service
    },
    {
        path: '/',
        name: 'Home',
        component: Home
    }
]
export default new VueRouter({
    routes
})

// component: require('./components/Home')
