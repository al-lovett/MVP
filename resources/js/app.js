
require('./bootstrap');

window.Vue = require('vue');

Vue.component('companybio',{
  template: `
  <form>
    <textarea name="company_name" rows="1" cols="25" v-model="company_name" placeholder="Company Name"></textarea>
    <br><br>
    <textarea name="contact_name" rows="1" cols="25" v-model="contact_name" placeholder="Contact Name"></textarea>
    <br><br>
    <textarea name="address" rows="1" cols="25"v-model="address"placeholder="address"></textarea>
    <br><br>
    <textarea name="phone" rows="1" cols="25"v-model="phone"placeholder="phone"></textarea>
    <br><br>
    <textarea name="fax" rows="1" cols="25" v-model="fax" placeholder="Fax"></textarea>
    <br><br>
    <textarea name="email" rows="1" cols="25" v-model="email" placeholder="Email"></textarea>
    <br><br>
    <div class="btn-group btn-group-toggle" data-toggle="buttons" v-model="package">
      <label class="btn btn-secondary active">
        <input type="radio" name="package" id="1" autocomplete="off" checked> Package 1
          </label>
      <label class="btn btn-secondary">
        <input type="radio" name="package" id="2" autocomplete="off"> Package 2
          </label>
      <label class="btn btn-secondary">
        <input type="radio" name="package" id="3" autocomplete="off"> Package 3
          </label>
    </div>
    <a href="@click="$emit('serviceAdded', newService)"#" class="btn btn-primary btn-lg" tabindex="-1" role="button">Submit</a>

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
            package: 1,
        }
    }
}
})
  methods: {
    addService(service);{
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


new Vue({
    el: '#app',

});
