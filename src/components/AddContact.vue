<template>
  <div>
    <div class="container">
      <h3>Add Vendor Contacts</h3>
      <form id="contatcForm" @submit.prevent="addContact">
        
          <div class="form-group">
            <label for="selectVendor">Search Vendor: </label>
            <select placeholder="select vendor" v-model="vendor" @change="getVendor()">
              <option value="0">Select Vendor</option>
              <option v-for="(vendor, index) in vendors" :value="index" :key="vendor.id">
                {{ vendor.Name }}
                {{vendor.id}}
              </option>
            </select>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input
              type="email"
              class="form-control"
              v-model="email"
              id="inputEmail"
              placeholder="Email"
            />
          </div>
          <div class="form-group col-md-6">
            <label for="inputName">Contact Name</label>
            <input
              type="text"
              v-model="contactName"
              class="form-control"
              id="inputcontact"
              placeholder="Name"
            />
          </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
          <label for="inputNumber">Phone Number</label>
          <input
            type="tel"
            class="form-control"
            v-model="number"
            id="inputNumber"
            placeholder="E.g. 01224 326753"
          />
        </div>
        <div class="form-group col-md-6">
            <label for="inputJob">Job Title</label>
            <input
              type="text"
              v-model="job"
              class="form-control"
              id="inputJob"
            />
          </div>
        </div>
        <button class="btn btn-primary">Submit</button>

      </form>
          
      
      
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
    data(){
        return{
            vendors: [],
            vendor: '',
            email: '',
            contactName: '',
            number: '',
            job: '',
            vendorID: '',
            selected:{
                vendor:''
            }
        }
    },
    mounted(){
        this.getVendor();
    },
    methods: {
        getVendor: function(){
            axios.get('http://localhost/test/getVendor.php')
            .then((response) =>{
                //console.log(response.data.vendors)
                this.vendors = response.data;
                console.log(JSON.stringify(this.vendors))
                console.log(this.vendors.Name)
                
                
            })
            .catch(function(error){
                console.log(error);
            });

        },
        addContact: function(){
          axios.post('http://localhost/test/addContact.php',{
            email: this.email,
            contactName:this.contactName,
            number: this.number,
            job: this.job,
            vendors: this.value,
            vendorID: this.value



          })
          .then(
            (response) => {
              console.log(response);
              this .email = '';
              this.name = '';
              this.number = '';
              this.job = '';
              
              alert("contact added")
            }
          )
        }
    }
};
</script>

<style scoped>
</style>