<template>
  <ul class="aside__list" :class="classes">
    <slot />
  </ul>
</template>

<script>
export default {
  name: "AsideList",
  props: {
    type: {
      type: String,
      required: false,
    },
  },
  computed: {
    classes() {
      return {
        "aside__list--desktop-grid": this.type === "desktop",
        "aside__list--mobile-grid": this.type === "mobile",
      };
    },
  },
};
</script>

<style lang="scss" scoped>
.aside__list {
  padding-top: 0.5rem;

  list-style: none;

  &--desktop-grid {
    display: none;

    @include media(medium) {
      display: block;
    }
  }

  &--mobile-grid {
    display: grid;
    grid-template-columns: 1fr;
    grid-auto-rows: 100px;
    gap: 1rem;

    & > li:not(:first-of-type) {
      margin-top: 0;
    }

    @include media(tiny) {
      grid-template-columns: repeat(2, 1fr);
    }

    @include media(small) {
      grid-template-columns: repeat(3, 1fr);
    }

    @include media(medium) {
      display: none;
    }
  }
}
</style>