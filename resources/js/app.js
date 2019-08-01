import Vue from 'vue'
require('./bootstrap');

window.Vue = require('vue');

Vue.component('pagination-component', require('./partials/PaginationComponent.vue').default);
Vue.component('all-products-component', require('./views/Home.vue').default);
Vue.component('categories-products-component', require('./views/Category.vue').default);
Vue.component('single-product-component', require('./views/SingleProduct.vue').default);
Vue.component('checkout-product-component', require('./views/Checkout.vue').default);
Vue.component('confirm-component', require('./views/Confirmation.vue').default);
Vue.component('user-board-component', require('./views/UserBoard.vue').default);


const app = new Vue({
    el: '#app'
});


