<template>
  <p class="section__paragraph">
    <slot />
  </p>
</template>

<script>
export default {
  name: "SectionParagraph",
};
</script>

<style lang="scss" scoped>
.section__paragraph {
  font-size: 1.15rem;
}
</style>