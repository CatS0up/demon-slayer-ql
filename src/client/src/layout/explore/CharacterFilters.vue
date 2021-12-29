<template>
  <div class="character-filters">
    <aside-section>
      <aside-input v-model="filters.search" placeholder="Search..." />
    </aside-section>

    <race-filter-section :filters.sync="filters.race" />

    <gender-filters-section :filters.sync="filters.gender" />

    <slayer-filters-section />

    <demon-filters-section />

    <other-filters-section />
  </div>
</template>

<script>
import AsideSection from "@/primitives/AsideSection.vue";
import AsideInput from "@/primitives/AsideInput.vue";
import RaceFilterSection from "./partials/RaceFiltersSection.vue";
import GenderFiltersSection from "./partials/GenderFiltersSection.vue";
import SlayerFiltersSection from "./partials/SlayerFiltersSection.vue";
import DemonFiltersSection from "./partials/DemonFiltersSection.vue";
import OtherFiltersSection from "./partials/OtherFiltersSection.vue";

export default {
  name: "CharacterFilters",
  components: {
    AsideSection,
    AsideInput,
    RaceFilterSection,
    GenderFiltersSection,
    SlayerFiltersSection,
    DemonFiltersSection,
    OtherFiltersSection,
  },
  data() {
    return {
      filters: {
        search: "",
        race: "",
        gender: "",
      },
    };
  },
};
</script>