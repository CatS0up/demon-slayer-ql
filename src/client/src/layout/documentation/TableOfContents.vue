<template>
  <div class="table-of-contents">
    <section class="table-of-contents__section" v-for="num in 30" :key="num">
      <base-link
        destination="#introduction"
        class="table-of-contents__subtitle"
      >
        Introduction
      </base-link>

      <ul class="table-of-contents__list">
        <li class="table-of-contents__item">
          <base-link
            destination="#introduction"
            class="table-of-contents__link"
          >
            Introduction
          </base-link>
        </li>
        <li class="table-of-contents__item">
          <base-link
            destination="#introduction"
            class="table-of-contents__link"
          >
            Introduction
          </base-link>
        </li>
        <li class="table-of-contents__item">
          <base-link
            destination="#introduction"
            class="table-of-contents__link"
          >
            Introduction
          </base-link>
        </li>
        <li class="table-of-contents__item">
          <base-link
            destination="#introduction"
            class="table-of-contents__link"
          >
            Introduction
          </base-link>
        </li>
      </ul>
    </section>
  </div>
</template>

<script>
import BaseLink from "@/primitives/BaseLink.vue";

export default {
  name: "TableOfcontents",
  components: { BaseLink },
};
</script>

<style lang="scss" scoped>
.table-of-contents {
  &__subtitle {
    font-size: 1.25rem;
    font-weight: 700;

    color: black;
  }

  &__section {
    padding-top: 1.4rem;

    &:first-of-type {
      padding-top: 0;
    }
  }

  &__list {
    list-style: none;
    padding-top: 1.2rem;
  }

  &__item {
    margin-top: 0.9rem;

    &:first-of-type {
      margin-top: 0;
    }
  }

  // Mixins
  &__link {
    font-size: 1.1rem;
  }
}
</style>