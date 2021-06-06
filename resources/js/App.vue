<template>
  <div>
    <navbar :app="this" class="mb-2"></navbar>

    <router-view :app="this" class="mt-5"> </router-view>

    <Footer class="mt-5"> </Footer>
  </div>
</template>

<script>
import Navbar from "./components/Navbar";
import Footer from "./components/Footer";
export default {
  name: "app",
  components: {
    Navbar,
    Footer,
  },

  data() {
    return {
      user: null,
      hospital: null,
      giveblood: null,
      loading: false,
      initiated: false,
      req: axios.create({
        baseUrl: BASE_URL,
      }),
    };
  },
  mounted() {
    console.log(localStorage.getItem("User"));
    if (localStorage.getItem("User") == "User") {
      this.initUser();
    } else {
      this.initHospital();
    }
  },
  methods: {
    initUser() {
      this.loading = true;

      this.req.get("auth/init").then((response) => {
        this.user = response.data.user;
        this.loading = false;
        this.initiated = true;
      });
    },
    initHospital() {
      this.loading = true;

      this.req.get("auth/hospital/init").then((response) => {
        this.user = response.data.hospital;
        this.loading = false;
        this.initiated = true;
      });
    },
  },
};
</script>

<style>
</style>