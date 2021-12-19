<template>
  <div id="app">
    <router-view />
  </div>
</template>

<script>
export default {
  name: "App",
};
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

#app {
  height: 100vh;

  font-family: "IBM Plex Mono", monospace;
}

a {
  color: inherit;
  text-decoration: none;
}

p {
  color: #475569;
}

.list {
  &--decorated {
    list-style-type: trad-chinese-informal;
    list-style-position: inside;
  }

  &__item {
    margin-top: 0.7rem;

    color: #475569;
  }
}
</style>