<template>
  <aside-section title="Slayers">
    <aside-list>
      <aside-list-item>
        <base-checkbox> All </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Ordinary Slayers </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Hashira </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Ubuyashiki Family </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Butterfly Mansion </base-checkbox>
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
  name: "SlayerFiltersSection",
  components: {
    AsideSection,
    AsideList,
    AsideListItem,
    BaseCheckbox,
  },
};
</script>