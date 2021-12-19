<template functional>
  <nav class="start-nav">
    <h2 class="start-nav__title">Go to</h2>
    <ul class="list list--decorated">
      <li class="list__item">
        <router-link :to="{ name: 'start' }"
          >Explore</router-link
        >
      </li>
      <li class="list__item">
        <router-link :to="{ name: 'documentation' }"
          >Docs</router-link
        >
      </li>
      <li class="list__item">
        <router-link to="#">Playground</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "StartNavigation",
};
</script>

<style lang="scss" scoped>
.start-nav {
  &__title {
    font-size: 1.2rem;
  }
}
</style>