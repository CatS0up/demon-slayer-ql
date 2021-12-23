<template functional>
  <nav class="start-nav">
    <h2 class="start-nav__title">Go to</h2>
    <ul class="list list--decorated start-nav__list">
      <li class="list__item">
        <router-link :to="{ name: 'explore' }">Explore</router-link>
      </li>
      <li class="list__item">
        <router-link :to="{ name: 'documentation' }">Docs</router-link>
      </li>
      <li class="list__item">
        <router-link to="#">Playground</router-link>
      </li>
      <li class="list__item">
        <router-link to="#">References</router-link>
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
  margin: 0 auto;

  @include media(medium) {
    order: 2;
  }

  &__title {
    font-size: 1.2rem;
    text-align: center;

    @include media(medium) {
      text-align: left;
    }
  }

  &__list {
    display: flex;
    gap: 1rem;

    @include media(medium) {
      display: block;
      gap: 0;
    }
  }
}
</style>