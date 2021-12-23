<template>
  <section
    class="section"
    :class="{
      'section--normal-section': !isSubsection,
      'section--sub-section': isSubsection,
    }"
  >
    <component :is="headerTypeFactory(type)" class="section__title">
      <slot name="title" />
    </component>

    <slot />
  </section>
</template>

<script>
import { SECTION_TYPE, SUB_SECTION_TYPE } from "@/helpers/constants.js";

export default {
  name: "DocuemntationSection",
  props: {
    type: String,
  },
  computed: {
    isSubsection() {
      return this.type === SUB_SECTION_TYPE;
    },
  },
  methods: {
    validate(val) {
      return this.availableTypes().includes(val);
    },
    availableTypes() {
      return [SECTION_TYPE, SUB_SECTION_TYPE];
    },
    headerTypeFactory(sectionType) {
      switch (sectionType) {
        case SECTION_TYPE:
          return "h2";
        case SUB_SECTION_TYPE:
          return "h3";
        default:
          throw new Error(`${sectionType} is invalid section type!`);
      }
    },
  },
  created() {
    if (!this.validate(this.type))
      throw new Error(`${this.type} is invalid section type!`);
  },
};
</script>

<style lang="scss" scoped>
.section {
  margin-top: 2rem;

  &--normal-section {
    &:first-of-type {
      margin-top: 0;
    }
  }

  &--sub-section {
    margin-top: 1.7rem;

    & > .section__paragraph {
      margin-top: 0.7rem;
    }
  }

  &__paragraph {
    margin-top: 1.4em;
    text-align: justify;
  }
}
</style>