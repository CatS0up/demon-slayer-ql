<template>
  <nav class="start-nav">
    <h2 class="start-nav__title">Go to</h2>
    <ul class="start-nav__items">
      <li class="start-nav__item">
        <router-link :to="{ name: 'documentation' }">Docs</router-link>
      </li>
      <li class="start-nav__item">
        <router-link :to="{ name: 'explore' }">Explore</router-link>
      </li>
      <li class="start-nav__item">
        <a :href="playgroundUrl" target="_blank">Playground</a>
      </li>
      <li class="start-nav__item">
        <router-link :to="{ name: 'references' }">References</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "StartNavigation",
  computed: {
    playgroundUrl: () => process.env.VUE_APP_GRAPHQL_PLAYGROUND_HTTP,
  },
};
</script>

<style lang="scss" scoped>
.start-nav {
  margin: 0 auto;

  @include media(medium) {
    order: 2;
  }

  &__title {
    font-size: 1.6rem;
    text-align: center;

    @include media(medium) {
      font-size: 1.2rem;
      text-align: left;
    }
  }

  &__items {
    @include flex($justify-content: center);
    flex-wrap: wrap;
    gap: 1rem;

    list-style-type: trad-chinese-informal;
    list-style-position: inside;

    @include media(medium) {
      display: block;
      gap: 0;
    }
  }

  &__item {
    margin-top: 0.7rem;

    font-size: 1.4rem;

    @include media(medium) {
      font-size: inherit;
    }

    color: var(--primary-color);
  }
}
</style>