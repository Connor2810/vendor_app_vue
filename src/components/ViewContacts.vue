<template>
    <div>
        <h3> View Contacts</h3>
        <div class="container">
            <label for="selectvendor">Select Vendor: </label>
            <select placeholder="Click dropdown" v-model="vendorID" @change="getContacts()">
                <option v-for="vendor in vendors" :value="vendor.id" :key="vendor.id">
                    {{vendor.Name}}
                </option>
            </select>
            <table id="table" border="1" width="100%" style="border-collapse: collapse">
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Title</th>
                </tr>
                <tr v-for="contact in vendor_contacts" :key="contact">
                    <td>{{vendor_contact.Name}}</td>
                    <td>{{vendor_conatct.Phone}}</td>
                    <td>{{vendor_conatct.Email}}</td>
                    <td>{{vendor_conatct.Job_title}}</td>
                </tr>

            </table>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return{
            vendors: [],
            contacts: [],
            vendorID: '',


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
                console.log(this.vendorID)
                
                
            })
            .catch(function(error){
                console.log(error);
            });

        },
        getContacts: function(){
            axios.get('http://localhost/test/getContacts.php')
            .then((response) => {
                this.contacts = response.data;

            })
            .catch(function(error){
                console.log(error);
            })
        }
    }
    
}
</script>

<style scoped>

</style>