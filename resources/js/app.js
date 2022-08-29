/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('connect-button', require('./components/ConnectButton.vue').default);
Vue.component('create-product', require('./components/CreateProduct.vue').default);
Vue.component('liquor-category', require('./components/LiquorCategory.vue').default);
Vue.component('laptops-subcategory', require('./components/LaptopsSubcategory.vue').default);
Vue.component('phones-subcategory', require('./components/PhonesSubcategory.vue').default);
Vue.component('salvage-subcategory', require('./components/SalvageSubcategory.vue').default);
Vue.component('services-category', require('./components/ServicesCategory.vue').default);
Vue.component('tv-subcategory', require('./components/TvSubcategory.vue').default);
Vue.component('audio-subcategory', require('./components/AudioSubcategory.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
