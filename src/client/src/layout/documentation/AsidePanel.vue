<template>
  <transition name="fade">
    <aside class="aside" v-if="isActive">
      <div class="aside__options">
        <hamburger-toggler
          @update:isActive="$emit('update:isActive', !isActive)"
        />
      </div>

      <slot />
    </aside>
  </transition>
</template>

<script>
import HamburgerToggler from "@/components/HamburgerToggler.vue";

export default {
  name: "AsidePanel",
  props: {
    isActive: Boolean,
  },
  components: { HamburgerToggler },
};
</script>

<style lang="scss" scoped>
.aside {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  max-height: calc(100vh - 61px - 0.15rem);
  margin-top: calc(61px + 0.15rem);
  padding: 1.5rem 1.8rem;
  z-index: 999;

  background-color: var(--background-color);
  border-right: 2px solid var(--border-color);
  line-height: 1.8;

  overflow-y: scroll;

  @include media(medium) {
    width: 250px;
  }

  &__options {
    @include flex($justify-content: flex-end);
    padding: 0 2rem;

    @include media(medium) {
      display: none;
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
  transform: translateX(-100%);
}
</style>