<template>
  <article class="documentation-article">
    <slot />
  </article>
</template>

<script>
export default {
  name: "DocumentationArticle",
};
</script>

<style lang="scss" scoped >
.documentation-article {
  width: 100%;
  max-width: 900px;

  padding: 2rem 1rem;
  margin: 0 auto;
}
</style>