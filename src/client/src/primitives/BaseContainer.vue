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
  margin-top: 1rem;
}
</style>