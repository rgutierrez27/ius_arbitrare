
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.axios = require('axios');

import CKEditor from 'ckeditor4-vue';
Vue.use(CKEditor);

import VueFileAgent from 'vue-file-agent';
import VueFileAgentStyles from 'vue-file-agent/dist/vue-file-agent.css';
Vue.use(VueFileAgent);

import 'vue-loaders/dist/vue-loaders.css'
import VueLoaders from 'vue-loaders'
Vue.use(VueLoaders)

//sweetalert
import VueSweetalert2 from 'vue-sweetalert2'
Vue.use(VueSweetalert2)

import _funciones from './components/_functions.js'
Vue.mixin(_funciones)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('content-manager-list', require('./components/list.vue'));
Vue.component('content-manager-editor', require('./components/editor.vue'));
Vue.component('file-agent', require('./components/extras/FileAgent.vue'));
Vue.component('loader', require('./components/extras/Loader.vue'));

const app = new Vue({
    el: '#app'
});
