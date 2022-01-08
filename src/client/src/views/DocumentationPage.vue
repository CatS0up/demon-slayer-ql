<template>
  <documentation-layout>
    <template v-slot:aside>
      <table-of-contents />
    </template>

    <template v-slot:content>
      <documentation-docs />
    </template>
  </documentation-layout>
</template>

<script>
import DocumentationLayout from "@/layout/DocumentationLayout.vue";
import DocumentationDocs from "@/layout/documentation/DocumentationDocs.vue";
import TableOfContents from "@/layout/documentation/TableOfContents.vue";

export default {
  name: "DocumentationPage",
  components: {
    DocumentationLayout,
    DocumentationDocs,
    TableOfContents,
  },
};
</script>


