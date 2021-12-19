<template functional>
  <header class="header">
    <h1 class="header__title">Kimetsu no Yaiba QL</h1>
    <p class="header__subtitle">Open API based on GraphQl</p>
  </header>
</template>

<script>
export default {
  name: "StartHeader",
};
</script>

<style lang="scss" scoped>
.header {
  grid-column: 1/-1;
  padding: 5rem 3rem;

  &__subtitle {
    padding-top: 1rem;
  }
}
</style>