<template>
  <transition name="fade">
    <aside class="aside" v-show="isActive">
      <slot />
    </aside>
  </transition>
</template>

<script>
export default {
  name: "AsidePanel",
  props: {
    isActive: Boolean,
  },
};
</script>

<style lang="scss" scoped>
.aside {
  z-index: 900;

  @include aside($position: "left");
  @include bgTransition;

  overflow-y: scroll;
  line-height: 1.8;

  scrollbar-color: var(--border-color) var(--bg-primary-color);
  border-right: 2px solid var(--border-color);

  @include media(medium) {
    width: 270px;
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