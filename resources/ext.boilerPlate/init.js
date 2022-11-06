// eslint-disable no-implicit-globals
const Vue = require("vue").default || require("vue"),
	App = require("./App.vue");

Vue.createMwApp(App).mount(document.getElementById("my-test-component"));