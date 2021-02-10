export default [{
        path: "/dashboard",
        component: require("./components/Dashboard.vue").default
    },
    { path: "*", component: require("./components/NotFound.vue").default }
];