import axios from "axios";

import { USER_DATA_KEY } from "@/constant/constants";

axios.interceptors.request.use((config) => {
  const user = JSON.parse(localStorage.getItem(USER_DATA_KEY));

  if (user) config.headers.Authorization = "Bearer " + user.token;

  config.params = { ...config.params };

  return config;
});

const notAuthenticatedStatuses = [
  { status: "not_authenticated", route: "login" },
];

axios.interceptors.response.use(
  (response) => response,
  (error) => {
    if (
      error.response.status === 401 &&
      notAuthenticatedStatuses
        .map(({ status }) => status)
        .includes(error.response.data.status)
    ) {

      window.location.href = notAuthenticatedStatuses.find(
        (item) => item.status === error.response.data.status
      ).route;
    }

    return Promise.reject(error);
  }
);
