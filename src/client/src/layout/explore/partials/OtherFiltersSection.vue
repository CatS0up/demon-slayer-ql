<template>
  <aside-section title="Others">
    <aside-list>
      <aside-list-item>
        <base-checkbox> Other characters </base-checkbox>
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
  name: "OtherFiltersSection",
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