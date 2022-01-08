<template>
  <documentation-section id="affiliation" :type="sectionType">
    <template v-slot:title> Affiliation </template>

    <section-paragraph> Affiliation stuff... </section-paragraph>

    <documentation-section id="affiliation-schema" :type="subSectionType">
      <template v-slot:title> Affiliation Schema </template>

      <base-container>
        <base-table :items="items" />
      </base-container>
    </documentation-section>
    <documentation-section id="get-single-affiliation" :type="subSectionType">
      <template v-slot:title> Get Single Affiliation </template>

      <section-paragraph>
        If you want to get ID of concrete affiliation, you should use the
        <code-text>affiliations</code-text> query.
      </section-paragraph>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            affiliation(_id: "61d9f4c33a053121c708c1c8") {
              _id
              name
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
              "affiliation": {
                "_id": "61d9f4c33a053121c708c1c8",
                "name": "Hashira"
              }
            }
          }
        </pre
          >
        </code-container>
      </base-container>
    </documentation-section>

    <documentation-section id="get-all-affiliations" :type="subSectionType">
      <template v-slot:title> Get All Affiliations </template>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
        {
          affiliations(first: 3) {
            data {
              _id
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
                "affiliations": {
                  "data": [
                    {
                      "_id": "61d9f4c33a053121c708c1c1",
                      "name": "Demons"
                    },
                    {
                      "_id": "61d9f4c33a053121c708c1c2",
                      "name": "Twelve Kizuki"
                    },
                    {
                      "_id": "61d9f4c33a053121c708c1c3",
                      "name": "Spider Family"
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

    <documentation-section id="filter-affiliations" :type="subSectionType">
      <template v-slot:title> Filter Affiliation </template>

      <section-paragraph> Avaliable filters: </section-paragraph>

      <base-container>
        <base-list>
          <base-list-item>
            <code-text>name</code-text> - affiliations's name</base-list-item
          >
          <base-list-item>
            <code-text>mainAffiliation</code-text> - affiliation's parent style
            name.</base-list-item
          >
        </base-list>
      </base-container>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
        {
          affiliations(filter: { mainAffiliation: "Demons" }) {
            data {
              _id
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
              "affiliations": {
                "data": [
                  {
                    "_id": "61d9fa98a198a7234f0a7a62",
                    "name": "Twelve Kizuki"
                  },
                  {
                    "_id": "61d9fa98a198a7234f0a7a63",
                    "name": "Spider Family"
                  },
                  {
                    "_id": "61d9fa98a198a7234f0a7a64",
                    "name": "Ordinary Demons"
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
  </documentation-section>
</template>

<script>
import { section } from "@/helpers/mixins.js";

import DocumentationSection from "@/components/DocumentationSection.vue";
import SectionParagraph from "@/primitives/SectionParagraph.vue";
import BaseContainer from "@/primitives/BaseContainer.vue";
import BaseTable from "@/components/BaseTable.vue";
import CodeContainer from "@/components/CodeContainer.vue";
import CodeText from "@/primitives/CodeText.vue";
import BaseList from "@/primitives/BaseList.vue";
import BaseListItem from "@/primitives/BaseListItem.vue";

export default {
  name: "AffiliationSection",
  mixins: [section],
  components: {
    DocumentationSection,
    SectionParagraph,
    BaseContainer,
    BaseTable,
    CodeContainer,
    CodeText,
    BaseList,
    BaseListItem,
  },
  data() {
    return {
      items: [
        {
          field: "_id",
          type: "ID!",
          description:
            "Affiliation ID, which is use in query single affiliation.",
        },
        {
          field: "name",
          type: "String!",
          description: "Affiliations's name ex: Hashira.",
        },
        {
          field: "description",
          type: "String!",
          description: "Affiliations's short description.",
        },
        {
          field: "mainAffiliation",
          type: "Affiliation",
          description:
            "Parent affiliation ex: Demons is main affiliation of Twelve Kizuki.",
        },
        {
          field: "subAffiliations",
          type: "[Affiliation!]",
          description: "Child affiliations ex: Demon Slayer Corps -> Hashira.",
        },
        {
          field: "members",
          type: "[Character!]!",
          description: "All known members of affiliation.",
        },
      ],
    };
  },
};
</script>