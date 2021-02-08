require("./bootstrap");

window.Vue = require("vue/dist/vue");

import VueRouter from "vue-router";
import Axios from "axios";

Vue.use(VueRouter, Axios);

import App from "./components/App.vue";
import Home from "./components/Home.vue";
import Login from "./components/admin/Login";
import Dashboard from "./components/admin/Dashboard";

const routes = [
    {
        name: "Home",
        path: "/",
        component: Home,
    },
    {
        path: "/admin",
        component: Dashboard,
        meta: {
            requiresAuth: true,
        },
    },
    {
        path: "/login",
        component: Login,
    },
];

const router = new VueRouter({mode: "history", routes});

let token = localStorage.getItem("token");

Vue.prototype.$http = Axios;
if (token)
    Vue.prototype.$http.defaults.headers.common["Authorization"] = token;

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (token) {
            next();
            return;
        } else if (localStorage.getItem("token")) {
            token = localStorage.getItem("token");
            Vue.prototype.$http.defaults.headers.common["Authorization"] = token;
        }
        next("/login");
    } else next();
});

new Vue(Vue.util.extend({router,}, App)).$mount("#app");
