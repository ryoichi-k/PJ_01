// require('./bootstrap');
import "./bootstrap";
import Vue from "vue";
import Test from "./components/Test.vue";

const app = new Vue({
    el: "#app",
    components: {
        Test,
    },
});
