
require('./bootstrap');

window.Vue = require('vue');

Vue.component('companybio',{
  template: `
  <form>
    <textarea name="" rows="1" cols="25">Company Name</textarea>
    <br><br>
    <textarea name="" rows="1" cols="25">Contact Name</textarea>
    <br><br>
    <textarea name="" rows="1" cols="25">Address</textarea>
    <br><br>
    <textarea name="" rows="1" cols="25">Phone</textarea>
    <br><br>
    <textarea name="" rows="1" cols="25">Fax</textarea>
    <br><br>
    <textarea name="" rows="1" cols="25">Email</textarea>
    <br><br>
    <button> Submit </button>
  </form>
  `
});
new Vue({
    el: '#app',

});
