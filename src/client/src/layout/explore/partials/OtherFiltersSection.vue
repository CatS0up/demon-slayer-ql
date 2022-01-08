<template>
  <aside-section title="Others">
    <aside-list type="desktop">
      <aside-list-item>
        <base-checkbox v-model="filters" value="Others">
          Other characters
        </base-checkbox>
      </aside-list-item>
    </aside-list>

    <aside-list type="mobile">
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Others"
          bgImageName="others.png"
        >
          Other characters
        </custom-checkbox>
      </aside-list-item>
    </aside-list>
  </aside-section>
</template>

<script>
import { filterableSection } from "@/helpers/mixins";

import AsideSection from "@/primitives/AsideSection.vue";
import AsideList from "@/primitives/AsideList.vue";
import AsideListItem from "@/primitives/AsideListItem.vue";
import BaseCheckbox from "@/primitives/BaseCheckbox.vue";
import CustomCheckbox from "@/primitives/CustomCheckbox.vue";

export default {
  name: "OtherFiltersSection",
  mixins: [filterableSection],
  components: {
    AsideSection,
    AsideList,
    AsideListItem,
    BaseCheckbox,
    CustomCheckbox,
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