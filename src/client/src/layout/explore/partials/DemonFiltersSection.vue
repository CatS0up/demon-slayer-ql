<template>
  <aside-section title="Demons">
    <aside-list>
      <aside-list-item>
        <base-checkbox> All</base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Ordinary Demons </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Upper Moon </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Lower Moon </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Others</base-checkbox>
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
  name: "DemonFiltersSection",
  components: {
    AsideSection,
    AsideList,
    AsideListItem,
    BaseCheckbox,
  },
  data() {
    return {
      filters: [],
    };
  },
};
</script>