<template>
  <documentation-layout>
    <template v-slot:aside>
      <character-filters :filters.sync="filters" />
    </template>

    <template v-slot:content>
      <character-list :filters="filters" />
    </template>
  </documentation-layout>
</template>

<script>
import DocumentationLayout from "@/layout/DocumentationLayout.vue";
import CharacterFilters from "@/layout/explore/CharacterFilters.vue";
import CharacterList from "@/layout/explore/CharacterList.vue";

export default {
  name: "ExplorePage",
  components: {
    DocumentationLayout,
    CharacterFilters,
    CharacterList,
  },
  data() {
    return {
      filters: {},
    };
  },
};
</script>