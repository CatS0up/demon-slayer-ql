<template>
  <documentation-section id="pagination" :type="sectionType">
    <template v-slot:title> Pagination </template>

    <section-paragraph>
      All queires which returns many results are paginated.
    </section-paragraph>

    <documentation-section id="pagination-info" :type="subSectionType">
      <template v-slot:title>Info </template>

      <section-paragraph>
        To navigation among the pages you can use the following values:
      </section-paragraph>

      <base-container>
        <base-list>
          <base-list-item>
            <code-text>first</code-text> - elements per page</base-list-item
          >
          <base-list-item>
            <code-text>page</code-text> - current page</base-list-item
          >
        </base-list>
      </base-container>

      <section-paragraph>
        <code-text>first</code-text> param has assigned a default value which is
        equal to <code-text>10</code-text>, so you can skip this value in your
        queries.
      </section-paragraph>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            characters(first: 2, page: 2) {
              data {
                name
              }
            }
          }
        </pre
          >
        </code-container>
      </base-container>

      <base-container>
        <strong class="h4">Response</strong>
        <code-container lang="json">
          <pre>
          {
            "data": {
              "characters": {
                "data": [
                  {
                    "name": "Aoba Hashibira"
                  },
                  {
                    "name": "Aoi Kanzaki"
                  }
                ]
              }
            }
          }
        </pre
          >
        </code-container>
      </base-container>
    </documentation-section>

    <documentation-section id="pagination-schema" :type="subSectionType">
      <template v-slot:title> PaginatorInfo Schema </template>

      <section-paragraph>
        <code-text>paginatorInfo</code-text> query provides you info about
        pagination, like a total item number, current page etc.
      </section-paragraph>

      <base-container>
        <base-table :items="items" />
      </base-container>
    </documentation-section>

    <base-container>
      <strong class="h4">Example Query</strong>
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
        </pre>
      </code-container>
    </base-container>

    <base-container>
      <strong class="h4">Response</strong>
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
        </pre>
      </code-container>
    </base-container>
  </documentation-section>
</template>

<script>
import { section } from "@/helpers/mixins.js";

import DocumentationSection from "@/components/DocumentationSection.vue";
import SectionParagraph from "@/primitives/SectionParagraph.vue";
import BaseTable from "@/components/BaseTable.vue";
import BaseContainer from "@/primitives/BaseContainer.vue";
import CodeText from "@/primitives/CodeText.vue";
import CodeContainer from "@/components/CodeContainer.vue";
import BaseList from "@/primitives/BaseList.vue";
import BaseListItem from "@/primitives/BaseListItem.vue";

export default {
  name: "PaginationSection",
  mixins: [section],
  components: {
    DocumentationSection,
    SectionParagraph,
    BaseContainer,
    BaseTable,
    CodeText,
    CodeContainer,
    BaseList,
    BaseListItem,
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