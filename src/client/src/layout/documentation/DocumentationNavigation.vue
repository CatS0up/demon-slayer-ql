<template>
  <nav class="navbar">
    <div class="navbar__logo-container">
      <router-link :to="{ name: 'start' }">
        <img
          src="@/assets/images/navbar-logo.png"
          alt="Nezuko chibi sticker."
          class="navbar_logo"
        />
      </router-link>
    </div>

    <div class="navbar__right-side">
      <ul class="navbar__items">
        <li class="navbar__item">
          <router-link
            :to="{ name: 'documentation' }"
            class="navbar__link"
            active-class="navbar__link--active"
            >Docs</router-link
          >
        </li>
        <li class="navbar__item">
          <router-link
            :to="{ name: 'explore' }"
            class="navbar__link"
            active-class="navbar__link--active"
            >Explore</router-link
          >
        </li>
        <li class="navbar__item">
          <a :href="playgroundUrl" class="navbar__link" target="_blank"
            >Playground</a
          >
        </li>
        <li class="navbar__item">
          <router-link
            :to="{ name: 'references' }"
            class="navbar__link"
            active-class="navbar__link--active"
            >References</router-link
          >
        </li>
      </ul>

      <div class="navbar__options">
        <hamburger-toggler
          @update:isActive="$emit('update:isActive', $event)"
          class="navbar__hamburger"
        />
        <theme-toggler class="navbar__theme-toggler" />
      </div>
    </div>
  </nav>
</template>

<script>
import ThemeToggler from "@/components/ThemeToggler.vue";
import HamburgerToggler from "@/primitives/HamburgerToggler.vue";

export default {
  components: {
    ThemeToggler,
    HamburgerToggler,
  },
  name: "DocumentationNavigation",
  component: { ThemeToggler },
  computed: {
    playgroundUrl: () => process.env.VUE_APP_GRAPHQL_PLAYGROUND_HTTP,
  },
};
</script>

<style lang="scss" scoped>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  @include flex($justify-content: space-between, $align-items: center);
  z-index: 1000;

  height: 60px;
  padding: 0.3rem 1rem;
  font-size: 1.2rem;

  background-color: var(--bg-primary-color);
  border-bottom: 1px solid var(--border-color);

  @include bgTransition;

  &__logo-container {
    @include flex($justify-content: center, $align-items: center);

    border-radius: 50%;

    overflow: hidden;
  }

  &__right-side {
    @include flex($align-items: center);
  }

  &__items {
    display: none;

    @include media(medium) {
      @include flex;
    }

    list-style: none;
  }
  &__item:not(:first-of-type) {
    margin-left: 1rem;
  }

  &__link {
    font-weight: 500;

    color: var(--secondary-color);

    &--active {
      border-bottom: 2px solid var(--secondary-color);
    }
  }

  &__options {
    @include flex($align-items: flex-end);
  }

  &__hamburger {
    @include media(medium) {
      display: none;
    }
  }

  // Mixins
  &__theme-toggler {
    margin-left: 1rem;
  }
}
</style>