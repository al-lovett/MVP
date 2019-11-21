
require('./bootstrap');

window.Vue = require('vue');

Vue.component('companybio',{
  template: `
  <form >
    <textarea name="company_name" rows="1" cols="25" v-model="newService.company_name" placeholder="Company Name"></textarea>
    <br><br>
    <textarea name="contact_name" rows="1" cols="25" v-model="newService.contact_name" placeholder="Contact Name"></textarea>
    <br><br>
    <textarea name="address" rows="1" cols="25" v-model="newService.address" placeholder="address"></textarea>
    <br><br>
    <textarea name="phone" rows="1" cols="25" v-model="newService.phone" placeholder="phone"></textarea>
    <br><br>
    <textarea name="fax" rows="1" cols="25" v-model="newService.fax" placeholder="Fax"></textarea>
    <br><br>
    <textarea name="email" rows="1" cols="25" v-model="newService.email" placeholder="Email"></textarea>
    <br><br>
    <div data-toggle="buttons">
      <label for="one">
        <input class="package-radios" type="radio" name="package" id="one" value="1"  v-model="newService.package" > Package 1
          </label>
      <label for="two">
        <input class="package-radios" type="radio" name="package" id="two" value="2" v-model="newService.package" > Package 2
          </label>
      <label for="three">
        <input class="package-radios" type="radio" name="package" id="three" value="3"  v-model="newService.package" > Package 3
          </label>
    </div>
    <a href="/add" @click="$emit('serviceAdded', newService)" class="btn btn-primary btn-lg" tabindex="-1" role="button">Submit</a>

  </form>
  `,
  data(){
    return {
        newService: {
            company_name: "",
            contact_name: "",
            address: "",
            phone: "",
            fax: "",
            email: "",
            package: "1",
        }
    }
},

  methods: {
    addService(service){
      var service = this;
      axios({
        method: 'post',
        url: '/add',
        data: service,
      }).then(function(response){
        var_dump($methods);
        die();
      })
    }
  }
});

new Vue({
    el: '#app',

});
