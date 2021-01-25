<template>
  <div>
    <input type="button" @click="allVendors()" value="Select All vendors" />
    <br /><br />
    <table border="1" width="100%" style="border-collapse: collapse">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
      </tr>

      <tr v-for="vendor in vendors" :key="vendor.id">
        <td>{{ vendor.Name }}</td>
        <td>{{ vendor.Email }}</td>
        <td>{{ vendor.Phone }}</td>
      </tr>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
    data(){
        return{
        vendors: [],
        };
    },
    methods:{
        allVendors: function(){
          //const self = this;
            axios.get('http://localhost/test/get.php')
            .then((response) =>{
                console.log(response.data)
                this.vendors = response.data;
                
            })
            .catch(function (error){
                console.log(error);
            });
        }
    }
};
</script>

<style scoped>
</style>