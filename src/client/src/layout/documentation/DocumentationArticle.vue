<template>
  <article class="documentation">
    <introduction-section />
    <character-section />
    <breathing-style-section />
    <affiliation-section />
  </article>
</template>

<script>
import IntroductionSection from "./partials/IntroductionSection.vue";
import CharacterSection from "./partials/CharacterSection.vue";
import BreathingStyleSection from "./partials/BreathingStyleSection.vue";
import AffiliationSection from "./partials/AffiliationSection";

export default {
  name: "DocumentationArticle",
  components: {
    IntroductionSection,
    CharacterSection,
    BreathingStyleSection,
    AffiliationSection,
  },
};
</script>

<style lang="scss" scoped>
.documentation {
  max-width: 900px;

  padding: 2rem 1rem;
  margin: 0 auto;
}
</style>