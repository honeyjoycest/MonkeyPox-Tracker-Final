import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import MonkeyPox from "../views/monkeypox/MonkeyPox.vue";
import ViewCovidTracker from "../views/monkeypox/ViewCovidTracker.vue";
import CreateNewCase from "../views/monkeypox/CreateNewCase.vue";
import Update from "../views/monkeypox/Update.vue";
import Delete from "../views/monkeypox/Delete.vue";
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
    },
    {
      path: "/about",
      name: "about",
      component: () => import("../views/AboutView.vue"),
    },

    {
      path: "/mp-tracker",
      component: MonkeyPox,
    },
    {
      path: "/mp-tracker/:id",
      name: "view-mp-tracker",
      component: ViewCovidTracker,
      props: true,
    },
    {
      path: "/mp-tracker-edit/:id",
      name: "view-mp-tracker-edit",
      component: Update,
      props: true,
    },
    {
      path: "/mp-tracker-delete/:id",
      name: "view-mp-tracker-delete",
      component: Delete,
      props: true,
    },
    {
      path: "/create-new-case",
      component: CreateNewCase,
    },
  ],
});

export default router;
