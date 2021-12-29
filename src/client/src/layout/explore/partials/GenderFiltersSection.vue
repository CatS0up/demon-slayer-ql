<template>
  <aside-section title="Gender">
    <aside-list>
      <aside-list-item>
        <base-checkbox> Male </base-checkbox>
      </aside-list-item>
      <aside-list-item>
        <base-checkbox> Female </base-checkbox>
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
  name: "GenderFiltersSection",
  components: {
    AsideSection,
    AsideList,
    AsideListItem,
    BaseCheckbox,
  },
};
</script>