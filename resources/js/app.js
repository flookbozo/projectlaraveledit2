require("./bootstrap");
window.Vue = require("vue");
window.axios=require("axios");
import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);
import "popper.js";
import "bootstrap";

import routes from "./routes";
const router = new VueRouter({
    routes
});

import App from "./App.vue";

new Vue({
    router,
    render: h => h(App)
}).$mount("#app");
