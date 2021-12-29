<template>
  <documentation-section id="affiliation" :type="sectionType">
    <template v-slot:title> Introduction </template>

    <section-paragraph>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit
      repellat at. Commodi earum voluptate voluptatum vero aperiam quidem
      pariatur unde, quo tempora. <code-text>PaginatorInfo</code-text> Impedit
      cum deleniti quasi autem! Veritatis, officiis?
    </section-paragraph>

    <documentation-section id="affiliation-schema" :type="subSectionType">
      <template v-slot:title> PaginatorInfo Schema </template>

      <section-paragraph>
        <code-text>paginatorInfo</code-text> query provides you info about
        pagination, like a total item number, current page etc.
      </section-paragraph>

      <base-container>
        <base-table :items="items" />
      </base-container>
    </documentation-section>

    <documentation-section id="pagination-examples" :type="subSectionType">
      <template v-slot:title> Examples </template>

      <base-container>
        <strong class="h2">Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            characters {
              paginatorInfo {
                count
                currentPage
                hasMorePages
                lastPage
                perPage
                total
              }
            }
          }
        </pre
          >
        </code-container>
      </base-container>

      <base-container>
        <strong class="h2">Response</strong>
        <code-container lang="json">
          <pre>
        {
          "data": {
            "characters": {
              "paginatorInfo": {
                "count": 10,
                "currentPage": 1,
                "hasMorePages": true,
                "lastPage": 11,
                "perPage": 10,
                "total": 110
              }
            }
          }
        }
        </pre
          >
        </code-container>
      </base-container>
    </documentation-section>
  </documentation-section>
</template>

<script>
import { section } from "@/helpers/mixins.js";

import CodeText from "@/primitives/CodeText.vue";
import CodeContainer from "@/components/CodeContainer.vue";
import BaseContainer from "@/primitives/BaseContainer.vue";
import BaseTable from "@/components/BaseTable.vue";

export default {
  name: "AffiliationSection",
  mixins: [section],
  components: {
    CodeText,
    CodeContainer,
    BaseContainer,
    BaseTable,
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