<template>
  <div class="home">
    <h1>Welcome to Vendor Finder</h1>
    <b-container class="home-row">
      <b-row>
        <b-col>Welcome to the Vednor Finder app, with this app finding vendors contact information has <strong>hopefully</strong> been made a little bit easier</b-col>
        <b-col>With Vendor finder you're able to view the contact info of all vendors as well as add new vendors to be viewed at anytime</b-col>
        <b-col>To use these fectures simply click on one of the options on the navbar</b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
// @ is an alias to /src

export default {
  name: "Home",
  components: {},
};
</script>

<style scoped>
.home h1{
  text-align: center !important;
  padding-top:30px !important;
}
.home-row{
  padding-top: 30px;
  margin-top: 20px ;
  font-size: 30px;
}
</style>
