import Vue from 'vue'
require('./bootstrap');

window.Vue = require('vue');

// import VueRouter from 'vue-router'

// Vue.use(VueRouter)

// import App from './views/App'
// import Home from './views/Home'
// import Login from './views/Login'
// import Register from './views/Register'
// // import SingleProduct from
// import Checkout from './views/Checkout'
// import Confirmation from './views/Confirmation'
// import UserBoard from './views/UserBoard'
// import Admin from './views/Admin'
Vue.component('pagination-component', require('./partials/PaginationComponent.vue').default);
Vue.component('all-products-component', require('./views/Home.vue').default);
Vue.component('categories-products-component', require('./views/Category.vue').default);
Vue.component('single-product-component', require('./views/SingleProduct.vue').default);
Vue.component('checkout-product-component', require('./views/Checkout.vue').default);
Vue.component('confirm-component', require('./views/Confirmation.vue').default);
Vue.component('user-board-component', require('./views/UserBoard.vue').default);


// const router = new VueRouter({
//     mode: 'history',
//     routes: [
//         {
//             path: '/',
//             name: 'home',
//             component: Home

//         },
//         {
//             path: '/login',
//             name: 'login',
//             component: Login
//         },
//         {
//             path: '/register',
//             name: 'register',
//             component: Register
//         },
//         {
//             path: '/confirmation',
//             name: 'confirmation',
//             component: Confirmation
//         },
//         {
//             path: '/checkout',
//             name: 'checkout',
//             component: Checkout,
//             props: (route) => ({ pid: route.query.pid })
//         },
//         {
//             path: '/dashboard',
//             name: 'userboard',
//             component: UserBoard,
//             meta: {
//                 requiresAuth: true,
//                 is_user: true
//             }
//         },
//         {
//             path: '/admin/:page',
//             name: 'admin-pages',
//             component: Admin,
//             meta: {
//                 requiresAuth: true,
//                 is_admin: true
//             }
//         },
//         {
//             path: '/admin',
//             name: 'admin',
//             component: Admin,
//             meta: {
//                 requiresAuth: true,
//                 is_admin: true
//             }
//         },
//     ],
// })

// router.beforeEach((to, from, next) => {
//     if (to.matched.some(record => record.meta.requiresAuth)) {
//         if (localStorage.getItem('bigStore.jwt') == null) {
//             next({
//                 path: '/login',
//                 params: { nextUrl: to.fullPath }
//             })
//         } else {
//             let user = JSON.parse(localStorage.getItem('bigStore.user'))
//             if (to.matched.some(record => record.meta.is_admin)) {
//                 if (user.is_admin == 1) {
//                     next()
//                 }
//                 else {
//                     next({ name: 'userboard' })
//                 }
//             }
//             else if (to.matched.some(record => record.meta.is_user)) {
//                 if (user.is_admin == 0) {
//                     next()
//                 }
//                 else {
//                     next({ name: 'admin' })
//                 }
//             }
//             next()
//         }
//     } else {
//         next()
//     }
// })

const app = new Vue({
    el: '#app'
});


