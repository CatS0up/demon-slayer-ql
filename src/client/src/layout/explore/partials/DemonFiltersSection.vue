<template>
  <aside-section title="Demons">
    <aside-list type="desktop">
      <aside-list-item>
        <base-checkbox v-model="filters" value="Ordinary Demons">
          Ordinary Demons
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Twelve Kizuki">
          Twelve Kizuki
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Spider Family">
          Spider Family
        </base-checkbox>
      </aside-list-item>
    </aside-list>

    <aside-list type="mobile">
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Ordinary Demons"
          bgImageName="ordinary-demons.png"
        >
          Ordinary Demons
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Twelve Kizuki"
          bgImageName="twelve-kizuki.png"
        >
          Twelve Kizuki
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Spider Family"
          bgImageName="spider-family.png"
        >
          Spider Family
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
  name: "DemonFiltersSection",
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