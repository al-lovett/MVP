/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

Vue.component('companybio',{
  template: `
  <form>
    <ul>
      <li>1-Company Name <textarea name="" rows="1" cols="25"></textarea>
      </li><br>
      <li>2-Contact Name <textarea name="" rows="1" cols="25"></textarea>
      </li><br>
      <li>3-Address <textarea name="" rows="1" cols="25"></textarea>
      </li><br>
      <li>4-Phone <textarea name="" rows="1" cols="25"></textarea>
      </li><br>
      <li>5-Fax <textarea name="" rows="1" cols="25"></textarea>
      </li><br>
      <li>6-Email <textarea name="" rows="1" cols="25"></textarea>
      </li><br>

      <button> Submit </button>
    </ul>
  </form>
  `
})
