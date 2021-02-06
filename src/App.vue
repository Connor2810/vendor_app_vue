<template>
  <div id="app">
    <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Vendor App</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item active>
          <router-link to ="/">Home</router-link>
        </b-nav-item>
        <b-nav-item>
          <router-link to ="/AddVendor">Add Vendor</router-link>
        </b-nav-item>
        <b-nav-item>
          <router-link to ="/ViewVendor">View Vendor</router-link>
        </b-nav-item>
        <b-nav-item>
          <router-link to ="/AddContact">Add Contact</router-link>
        </b-nav-item>
      </b-navbar-nav>
    </b-collapse>
    </b-navbar>
    
    <router-view></router-view>
  </div>
</template>
<script>

export default {
  name: "app",
  components:{
    

  }
  
}
</script>

<style scoped>
#nav-collapse a {
  color: black !important;
}

#nav-collapse  a:hover{
  background-color: darkblue !important;
  color: white !important; 

}

#nav-collapse  a:active, a:target{
  color: greenyellow !important;


}


</style>
