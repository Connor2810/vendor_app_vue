<template>
  <div id="view">
    <input type="button" @click="allVendors()" value="Select All vendors" />
    <br /><br />
    <table border="1" width="80%" style="border-collapse: collapse">
      <tr>
        <th>Username</th>
        <th>Name</th>
        <th>Email</th>
      </tr>

      <tr v-for="vendor in vendors" v-bind:key="vendor">
        <td>{{ vendor.email }}</td>
        <td>{{ vendor.name }}</td>
        <td>{{ vendor.number }}</td>
      </tr>
    </table>
  </div>
</template>

<script>
import axios from 'axios';
export default {
    el: '#view',
    data(){
        return{
        vendors: this.vendors,
        vendorid: 0
        }
    },
    methods:{
        allVendors: function(){
            axios.get('//localhost/test/get.php')
            .then(function response(){
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