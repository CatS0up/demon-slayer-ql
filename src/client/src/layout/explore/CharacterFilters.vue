<template>
  <div class="character-filters">
    <aside-section>
      <base-input
        v-model="filters.name"
        placeholder="Character's name..."
        class="character-filters__base-input"
      />
    </aside-section>

    <race-filter-section :filters.sync="filters.race" />

    <gender-filters-section :filters.sync="filters.gender" />

    <slayer-filters-section :filters.sync="affiliations.slayer" />

    <demon-filters-section :filters.sync="affiliations.demon" />

    <other-filters-section :filters.sync="affiliations.other" />
  </div>
</template>

<script>
import AsideSection from "@/primitives/AsideSection.vue";
import BaseInput from "@/primitives/BaseInput.vue";
import RaceFilterSection from "./partials/RaceFiltersSection.vue";
import GenderFiltersSection from "./partials/GenderFiltersSection.vue";
import SlayerFiltersSection from "./partials/SlayerFiltersSection.vue";
import DemonFiltersSection from "./partials/DemonFiltersSection.vue";
import OtherFiltersSection from "./partials/OtherFiltersSection.vue";

export default {
  name: "CharacterFilters",
  components: {
    AsideSection,
    BaseInput,
    RaceFilterSection,
    GenderFiltersSection,
    SlayerFiltersSection,
    DemonFiltersSection,
    OtherFiltersSection,
  },
  watch: {
    affiliations: {
      handler(val) {
        this.filters = Object.assign({}, this.filters, {
          affiliation: Object.values(val).flat(),
        });
      },
      deep: true,
    },
    filters: {
      handler() {
        this.removeEmptyFilters();

        this.$emit("update:filters", this.filters);
      },
      deep: true,
    },
  },
  data() {
    return {
      filters: {},
      affiliations: {},
    };
  },
  methods: {
    removeEmptyFilters() {
      Object.keys(this.filters).forEach(
        (k) =>
          (this.filters[k] == null || !this.filters[k].length) &&
          delete this.filters[k]
      );
    },
  },
};
</script>

<style lang="scss" scoped>
.character-filters {
  &__base-input {
    font-size: 1.3rem;
    padding-bottom: 0.6rem;

    @include media(medium) {
      font-size: 1rem;
      padding-bottom: 0.3rem;
    }
  }
}
</style>