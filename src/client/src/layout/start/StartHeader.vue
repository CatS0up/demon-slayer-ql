<template>
  <header class="header">
    <section class="header__body">
      <h1 class="header__title">Kimetsu no Yaiba QL</h1>
      <p class="header__subtitle">Open API based on GraphQl</p>
    </section>

    <section class="header__options">
      <theme-toggler />
    </section>
  </header>
</template>

<script>
import ThemeToggler from "@/components/ThemeToggler.vue";

export default {
  name: "StartHeader",
  components: { ThemeToggler },
};
</script>

<style lang="scss" scoped>
.header {
  @include flex($justify-content: space-between);
  grid-column: 1/-1;
  padding: 5rem 3rem;

  text-align: center;

  @include media(tiny) {
    text-align: left;
  }

  &__subtitle {
    padding-top: 1rem;
  }

  &__options {
    position: fixed;
    top: 5%;
    right: 5%;

    @include media(tiny) {
      position: static;
    }
  }
}
</style>