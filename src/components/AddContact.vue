<template>
  <div>
    <div class="container">
      <h3>Add Vendor Contacts</h3>
      <table>
        <tr>
          <td>Search Vendor</td>
          <td>
            <select v-model="vendors_name" @change="getVendor()">
              <option value="0">Select Vendor</option>
              <option v-for="vendor in vendors" :value="vendor.Name" :key="vendor.id">
                {{ vendor.Name }}
              </option>
            </select>
          </td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
    data(){
        return{
            vendors: [],
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
            axios.get('http://localhost/test/addContact.php')
            .then((response) =>{
                console.log(response.data)
                this.vendors = response.data;
            })
            .catch(function(error){
                console.log(error);
            });

        },
    }
};
</script>

<style scoped>
</style>