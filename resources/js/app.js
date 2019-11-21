
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
    <textarea name="package" rows="1" cols="25" v-model="newService.package" placeholder="Package"></textarea>
    <br><br>
    <textarea name="additionalNotes" rows="2" cols="25" v-model="newService.additionalNotes" placeholder="Additional Notes"></textarea>
    <br><br>
    <button type="button" class="btn btn-primary" @click="addService(newService)">Submit</button>
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
            package: "",
        }
    }
},

  methods: {
    addService(service){
      axios({
        method: 'post',
        url: '/add',
        data: service,
      }).then(function(response){
        console.log(response)

      })
    }
  }
});

new Vue({
    el: '#app',

});
