<template>
  <aside-section title="Race">
    <aside-list>
      <aside-list-item>
        <base-checkbox v-model="filters" inputValue="human">
          Human
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" inputValue="demon">
          Demon
        </base-checkbox>
      </aside-list-item>
    </aside-list>
  </aside-section>
</template>

<script>
import AsideSection from "@/primitives/AsideSection.vue";
import AsideList from "@/primitives/AsideList.vue";
import AsideListItem from "@/primitives/AsideListItem.vue";
import BaseCheckbox from "@/primitives/BaseCheckbox.vue";

export default {
  name: "RaceFiltersSection",
  components: {
    AsideSection,
    AsideList,
    AsideListItem,
    BaseCheckbox,
  },
  watch: {
    filters() {
      this.$emit("update:filters", this.filters);
    },
  },
  data() {
    return {
      filters: [],
    };
  },
};
</script>