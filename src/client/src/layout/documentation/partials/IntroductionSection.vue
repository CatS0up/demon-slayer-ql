<template>
  <documentation-section id="introduction" :type="sectionType">
    <template v-slot:title> Introduction </template>

    <section-paragraph>
      This API is inspired by
      <base-link
        destination="https://www.narutoql.com"
        :isDecorated="true"
        target="_blank"
        >Naruto Ql</base-link
      >. All data using in the models is come from
      <base-link
        destination="https://kimetsu-no-yaiba.fandom.com/wiki/Kimetsu_no_Yaiba_Wiki"
        :isDecorated="true"
        target="_blank"
        >Kimetsu no Yaiba fandom</base-link
      >
      , if you want to get more details, you should go to the
      <router-link :to="{ name: 'explore' }" class="link link--decorated"
        >References</router-link
      >
      page.
    </section-paragraph>

    <section-paragraph>
      You can query the api at <code-text>{{ apiUrl }}</code-text
      >.
    </section-paragraph>

    <section-paragraph>
      <strong class="h4"
        >All names are case sensitive ex: "Hashira" != "hashira"!</strong
      >
    </section-paragraph>
  </documentation-section>
</template>

<script>
import { section } from "@/helpers/mixins.js";

import DocumentationSection from "@/components/DocumentationSection.vue";
import SectionParagraph from "@/primitives/SectionParagraph.vue";
import CodeText from "@/primitives/CodeText.vue";
import BaseLink from "@/primitives/BaseLink.vue";

export default {
  name: "AffiliationSection",
  mixins: [section],
  components: {
    DocumentationSection,
    SectionParagraph,
    CodeText,
    BaseLink,
  },
  computed: {
    apiUrl: () => process.env.VUE_APP_GRAPHQL_HTTP,
  },
  data() {
    return {
      items: [
        {
          field: "count",
          type: "Int!",
          description: "Number of items in the current page.",
        },
        {
          field: "currentPage",
          type: "Int!",
          description: "Index of the current page.",
        },
        {
          field: "firstItem",
          type: "Int",
          description: "Index of the first item in the current page.",
        },
        {
          field: "hasMorePages",
          type: "Boolean!",
          description: "Are there more pages after this one?",
        },
        {
          field: "lastItem",
          type: "Int",
          description: "Index of the last item in the current page.",
        },
        {
          field: "lastPage",
          type: "Int!",
          description: "Index of the last available page.",
        },
        {
          field: "perPage",
          type: "Int!",
          description: "Number of items per page.",
        },
        {
          field: "total",
          type: "Int!",
          description: "Number of total available items.",
        },
      ],
    };
  },
};
</script>