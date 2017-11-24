
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
//require('vue2-autocomplete-js');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('search', require('./components/autocomplete.vue'));


const app = new Vue({
    el: '#app',
    data: {
        value : {},
    },
    methods: {
        setValue: function ( param ) {
            this.$set( this.value , param.name, param.id)
        }
    }
});
