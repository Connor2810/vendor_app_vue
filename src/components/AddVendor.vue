<template>
  <div>
    <div class="container">
      <h3>Add Vendor</h3>
      <form id="vendorForm" @submit.prevent="addVendor">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input
              type="email"
              class="form-control"
              v-model="email"
              id="inputEmail4"
              placeholder="Email"
            />
          </div>
          <div class="form-group col-md-6">
            <label for="inputName">Vendor Name</label>
            <input
              type="text"
              v-model="name"
              class="form-control"
              id="inputname"
              placeholder="Name"
            />
          </div>
        </div>
        <div class="form-group">
          <label for="inputNumber">Phone Number</label>
          <input
            type="number"
            class="form-control"
            v-model="number"
            id="inputNumber"
            placeholder="E.g. 01224 326753"
          />
        </div>
        <button class="btn btn-primary">
          Submit
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {

  data() {
    return {
      email: "",
      name: "",
      number: "",
    }
  },
  methods: {
    addVendor: function () {
     // const headers ={
       // 'Content-Type': 'application/json, text/plain, */*',
      //}
     axios.post('http://localhost/test/post.php',{
       email: this.email,
       name: this.name,
       number: this.number,
       

     })
     .then((response) =>{
       console.log(response);
       console.log(this.email);
       console.log(this.name);
       console.log(this.number);
     }, (error)=>{
       console.log(error);
     })
    }
  }
}
</script>

<style scoped>
.container h3 {
  text-align: center;
}

.container {
  margin-top: 30px;
}
</style>