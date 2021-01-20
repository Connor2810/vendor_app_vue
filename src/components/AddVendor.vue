<template>
  <div>
    <div class="container">
      <h3>Add Vendor</h3>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input
              type="email"
              class="form-control"
              v-model= "email"
              id="inputEmail4"
              placeholder="Email"
            />
          </div>
          <div class="form-group col-md-6">
            <label for="inputName">Vendor Name</label>
            <input
              type="text"
              v-model= "name"
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
            v-model= "number"
            id="inputNumber"
            placeholder="E.g. 01224 326753"
          />
        </div>
        <button @click="addVendor" type="submit" class="btn btn-primary">
          Submit
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "AddVendor",
  data() {
    return {
      email: "",
      name: "",
      number: "",
    };
  },
  methods: {
    addVendor: function () {
      if (this.name != "" && this.email != "" && this.number != "") {
        axios.post("//localhost/test/post.php",JSON.stringify( {
            request: 2,
            email: this.email,
            name: this.name,
            number: this.number,
          }))
          .then(function (response) {
            console.log(response);
            if (response.data[0].status == 1) {
              alert("Data saved");
            }
          })
          .catch(function (error) {
            console.log(error);
          });
      } else {
        alert("Please fill in all fields");
      }
    },
  },
};
</script>

<style scoped>
.container h3 {
  text-align: center;
}

.container {
  margin-top: 30px;
}
</style>