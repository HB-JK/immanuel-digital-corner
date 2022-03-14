import router from "@/router";

import { USER_DATA_KEY } from "@/constant/constants";

router.beforeEach((to, from, next) => {
  const user = JSON.parse(localStorage.getItem(USER_DATA_KEY));

  if (to.meta.requiresAuth) {
    if (user) next();
    else next({ name: "login" });
  }

  next();
});
