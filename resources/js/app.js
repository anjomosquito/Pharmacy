import './bootstrap';

// resources/js/app.js
import Vue from 'vue';
import Dashboard from './components/dashboard.vue';
import Account from './components/account.vue';

new Vue({
  el: '#app',
  components: {
    Dashboard,
    Account,
  },
});
