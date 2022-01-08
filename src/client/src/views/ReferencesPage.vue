<template>
  <full-page-layout>
    <references-register />
  </full-page-layout>
</template>

<script>
import FullPageLayout from "@/layout/FullPageLayout.vue";
import ReferencesRegister from "@/layout/references/ReferencesRegister.vue";

export default {
  name: "ReferencesPage",
  components: {
    FullPageLayout,
    ReferencesRegister,
  },
};
</script>