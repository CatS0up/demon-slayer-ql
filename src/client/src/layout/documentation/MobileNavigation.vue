<template>
  <transition name="fade">
    <nav class="mobile-menu" v-show="isActive">
      <ul class="mobile-menu__items">
        <li class="mobile-menu__item">
          <router-link
            :to="{ name: 'documentation' }"
            class="mobile-menu__link"
            active-class="mobile-menu__link--active"
            >Docs</router-link
          >
        </li>
        <li class="mobile-menu__item">
          <router-link
            :to="{ name: 'explore' }"
            class="mobile-menu__link"
            active-class="mobile-menu__link--active"
            >Explore</router-link
          >
        </li>
        <li class="mobile-menu__item">
          <a :href="playgroundUrl" class="mobile-menu__link" target="_blank"
            >Playground</a
          >
        </li>
        <li class="mobile-menu__item">
          <router-link
            :to="{ name: 'references' }"
            class="mobile-menu__link"
            active-class="mobile-menu__link--active"
            >References</router-link
          >
        </li>
      </ul>
    </nav>
  </transition>
</template>

<script>
export default {
  name: "MobileNavigation",
  props: {
    isActive: {
      type: Boolean,
      default: false,
    },
  },
  computed: {
    playgroundUrl: () => process.env.VUE_APP_GRAPHQL_PLAYGROUND_HTTP,
  },
};
</script>

<style lang="scss" scoped>
.mobile-menu {
  @include flex($justify-content: center);
  @include aside($position: "right");
  @include bgTransition;

  transform: translate(0);

  z-index: 1000;

  &__items {
    list-style-type: none;
  }

  &__item:not(:first-of-type) {
    margin-top: 1.2rem;
  }

  &__link {
    font-weight: 500;
    font-size: 1.4rem;
    color: var(--secondary-color);

    &--active {
      border-bottom: 2px solid var(--secondary-color);
    }
  }
}

// Animations
.fade-enter-active,
.fade-leave-active {
  transition: transform 0.3s linear;
}
.fade-enter,
.fade-leave-to {
  transform: translateX(100%);
}
</style>