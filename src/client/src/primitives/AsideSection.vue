<template>
  <section class="aside__section">
    <h2 v-if="title" class="h2">{{ `${title}:` }}</h2>

    <slot />
  </section>
</template>

<script>
export default {
  name: "AsideSection",
  props: {
    title: {
      type: String,
      required: false,
    },
  },
};
</script>

<style lang="scss" scoped>
.aside {
  &__section:not(:first-of-type) {
    padding-top: 1rem;
  }

  &__subtitle {
    font-weight: 700;
    font-size: 1.1rem;
  }
}
</style>