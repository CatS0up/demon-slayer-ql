<template>
  <li class="aside__list-item">
    <slot />
  </li>
</template>

<script>
export default {
  name: "AsideListItem",
};
</script>

<style lang="scss" scoped>
.aside__list-item {
  color: var(--primary-color);

  &:not(:first-of-type) {
    margin-top: 0.5rem;
  }
}
</style>