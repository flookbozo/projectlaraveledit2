<template>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <form v-on:submit.prevent="updatePost">
            
            <div class="form-group">
              <label>Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                v-model="post.email"
              />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                v-model="post.password"
              />
            </div>
            <div class="form-group">
              <label>Password Again</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password Again"
                v-model="post.passwordAgain"
              />
            </div>

            <div class="text-center">
              <button class="btn btn-success btn-lg btn-block">
                Reset Password
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "resetpasswordUser",
  props: ["app"],
  data() {
    return {
      users: [],
      post:null,
    };
  },
  created() {
    axios.get(`api/resetuser/${this.$route.params.id}`)
    .then((response) => {
      this.post = response.data;
      console.log(this.post);
    });
  },
  methods: {
    updatePost() {
      
      axios.post(`api/resetuser/${this.$route.params.id}`,this.post)
      .then((response) => {
        this.$router.push({ name: "login" });
      });

    },
  },
};
</script>