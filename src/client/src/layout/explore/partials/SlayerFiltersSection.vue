<template>
  <aside-section title="Slayers">
    <aside-list type="desktop">
      <aside-list-item>
        <base-checkbox v-model="filters" value="Ordinary Demon Slayers">
          Ordinary Slayers
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Hashira">
          Hashira
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Ubuyashiki Family">
          Ubuyashiki Family
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Butterfly Mansion">
          Butterfly Mansion
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Swordsmith Village">
          Swordsmith Village
        </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox v-model="filters" value="Other/Associations">
          Other/Associations
        </base-checkbox>
      </aside-list-item>
    </aside-list>

    <aside-list type="mobile">
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Ordinary Demon Slayers"
          bgImageName="ordinary-demon-slayers.png"
        >
          Ordinary Slayers
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Hashira"
          bgImageName="hashira.png"
        >
          Hashira
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Ubuyashiki Family"
          bgImageName="ubuyashiki-family.png"
        >
          Ubuyashiki Family
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Butterfly Mansion"
          bgImageName="butterfly-mansion.png"
        >
          Butterfly Mansion
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Swordsmith Village"
          bgImageName="swordsmith-village.png"
        >
          Swordsmith Village
        </custom-checkbox>
      </aside-list-item>
      <aside-list-item>
        <custom-checkbox
          v-model="filters"
          value="Other/Associations"
          bgImageName="other-associations.png"
        >
          Other/Associations
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
  name: "SlayerFiltersSection",
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