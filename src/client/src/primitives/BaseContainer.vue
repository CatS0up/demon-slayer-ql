<template>
  <div class="base-container">
    <slot />
  </div>
</template>

<script>
export default {
  name: "BaseContainer",
};
</script>

<style lang="scss" scoped>
.base-container {
  display: block;
  margin: 1rem 0;
}
</style>