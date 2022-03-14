<template>
  <div>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito&family=Poppins&display=swap');

:root {
  --header-height: 60px;
  --footer-height: 60px;
}

body {
  background-color: #f7f7f7;
}

.content-page {
  height: calc(100vh + 60px) !important;
  margin-top: 0 !important;
}

main.content-page {
  position: relative;
  max-width: 480px;
  width: 100%;
  margin: 0 auto;
  margin-top: 50px;
  background-color: #ffffff;
  top: var(--header-height);
  min-height: calc(100vh - var(--header-height));
  padding-bottom: calc(var(--footer-height) + 80px);
}

</style>