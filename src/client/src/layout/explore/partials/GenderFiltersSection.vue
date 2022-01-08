<template>
  <aside-section title="Gender">
    <aside-list type="desktop">
      <aside-list-item>
        <base-checkbox v-model="filters" value="Male"> Male </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Female"> Female </base-checkbox>
      </aside-list-item>
    </aside-list>

    <aside-list type="mobile">
      <aside-list-item>
        <custom-checkbox v-model="filters" value="Male" bgImageName="male.png">
          Male
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Female"
          bgImageName="female.png"
        >
          Female
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
  name: "GenderFiltersSection",
  mixins: [filterableSection],
  components: {
    AsideSection,
    AsideList,
    AsideListItem,
    BaseCheckbox,
    CustomCheckbox,
  },
};
</script>