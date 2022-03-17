import { createWebHistory, createRouter } from "vue-router";
import Home from "../components/home/Home.vue";
import Add from "../components/add/Add.vue";
import Update from "../components/update/Update.vue";
const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/add",
    name: "Add",
    component: Add,
  },
  {
    path: "/update",
    name: "Update",
    component: Update
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
