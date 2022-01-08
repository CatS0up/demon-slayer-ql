<template>
  <aside-section title="Race">
    <aside-list type="desktop">
      <aside-list-item>
        <base-checkbox v-model="filters" value="Human"> Human </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Demon"> Demon </base-checkbox>
      </aside-list-item>
    </aside-list>

    <aside-list type="mobile">
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Human"
          bgImageName="human.png"
        >
          Human
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Demon"
          bgImageName="demon.png"
        >
          Demon
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
  name: "RaceFiltersSection",
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