<template>
  <code class="code-text">
    <slot />
  </code>
</template>

<script>
export default {
  name: "CodeText",
};
</script>

<style lang="scss" scoped>
.code-text {
  padding: 0.2rem;
  border-radius: 5px;

  font-size: 0.9rem;

  background-color: #272822;
  color: #f8f8f2;
}
</style>