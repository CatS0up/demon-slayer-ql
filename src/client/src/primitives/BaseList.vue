<template>
  <ul class="base-list">
    <slot />
  </ul>
</template>

<script>
export default {
  name: "BaseList",
};
</script>

<style lang="scss" scoped>
.base-list {
  list-style-type: square;
  list-style-position: inside;
  color: $secondary-color-light-mode;

  font-size: 1rem;
}

@include darkMode {
  .base-list {
    color: $primary-color-dark-mode;
  }
}
</style>