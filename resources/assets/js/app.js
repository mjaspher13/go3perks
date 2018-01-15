
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vuex from 'vuex';
window.Vue = require('vue');

import loading from 'vue-full-loading';
import ToggleButton from 'vue-js-toggle-button'

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(Vuex)

Vue.use(ToggleButton)

Vue.component(
    'example-component', 
    require('./components/ExampleComponent.vue')
);

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component(
    'merchant-profile', 
    require('./components/MerchantProfile.vue')
);

const app = new Vue({
    store,
    el: '#app'
});

const store = new Vuex.Store({
    state: {
      counter: 0
    },
    getters: {
      counter: state => state.counter * 2
    },
    mutations: {
      increment: state => state.counter++,
      decrement: state => state.counter--
    }
  })

