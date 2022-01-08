<template>
  <documentation-article>
    <introduction-section />
    <pagination-section />
    <character-section />
    <breathing-style-section />
    <affiliation-section />
  </documentation-article>
</template>

<script>
import DocumentationArticle from "@/primitives/DocumentationArticle.vue";

import IntroductionSection from "./partials/IntroductionSection.vue";
import PaginationSection from "./partials/PaginationSection.vue";
import CharacterSection from "./partials/CharacterSection.vue";
import BreathingStyleSection from "./partials/BreathingStyleSection.vue";
import AffiliationSection from "./partials/AffiliationSection";

export default {
  name: "DocumentationDocs",
  components: {
    DocumentationArticle,
    IntroductionSection,
    PaginationSection,
    CharacterSection,
    BreathingStyleSection,
    AffiliationSection,
  },
};
</script>