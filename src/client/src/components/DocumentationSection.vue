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
import { DocSectionType } from "@/helpers/enums";

export default {
  name: "DocuemntationSection",
  props: {
    type: String,
  },
  computed: {
    isSubsection() {
      return this.type === DocSectionType.SUBSECTION;
    },
  },
  methods: {
    validate(val) {
      return DocSectionType.values().includes(val);
    },
    headerTypeFactory(sectionType) {
      switch (sectionType) {
        case DocSectionType.SECTION:
          return "h2";
        case DocSectionType.SUBSECTION:
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
  &:not(:first-of-type) {
    margin-top: 2rem;
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