<template>
  <div id="app" class="app">
    <router-view />
  </div>
</template>

<script>
export default {
  name: "App",
};
</script>

<style lang="scss">
#app {
  overflow: hidden;
  font-family: "IBM Plex Mono", monospace;
  min-height: 100vh;
}
</style>