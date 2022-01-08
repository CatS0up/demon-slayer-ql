<template>
  <li class="base-list__item">
    <slot />
  </li>
</template>

<script>
export default {
  name: "BaseListItem",
};
</script>

<style lang="scss" scoped>
.base-list__item {
  margin-top: 0.7rem;

  line-height: 1.8;
}
</style>