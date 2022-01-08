<template>
  <documentation-section id="breathing-style" :type="sectionType">
    <template v-slot:title> Breathing Style </template>

    <section-paragraph> Breathing style info. </section-paragraph>

    <documentation-section id="breathing-style-schema" :type="subSectionType">
      <template v-slot:title> Breathing Style Schema </template>

      <base-container>
        <base-table :items="styles" />
      </base-container>
    </documentation-section>

    <documentation-section
      id="breathing-technique-schema"
      :type="subSectionType"
    >
      <template v-slot:title> Breathing Technique Schema </template>

      <section-paragraph>
        Every breathing style has techniques which are a nested models. That
        models doesn't exist outside breathing style model, so they can not be
        quering outside of breathing style.
      </section-paragraph>

      <section-paragraph>
        <strong class="h4"
          >Techniques are not paginated.
        </strong></section-paragraph
      >

      <base-container>
        <base-table :items="techniques" />
      </base-container>
    </documentation-section>

    <documentation-section
      id="get-single-breathing-style"
      :type="subSectionType"
    >
      <template v-slot:title> Get Single Breathing Style </template>

      <section-paragraph>
        If you want to get ID of concrete breathing style, you should use the
        <code-text>breathingStyles</code-text> query.
      </section-paragraph>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            breathingStyle(_id: "61d5fffa4471ab62981a8711") {
              name
              techniques {
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
              "breathingStyle": {
                "name": "Insect",
                "techniques": [
                  {
                    "name": "Butterfly Dance: Caprice"
                  },
                  {
                    "name": "Dance of the Bee Sting: True Flutter"
                  },
                  {
                    "name": "Dance of the Dragonfly: Compound Eye Hexagon"
                  },
                  {
                    "name": "Dance of the Centipede: Hundred-Legged Zigzag"
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

    <documentation-section id="get-all-breathing-styles" :type="subSectionType">
      <template v-slot:title> Get All Breathing Styles </template>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            breathingStyles(first: 3) {
              data {
                name
                description
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
            "breathingStyles": {
              "data": [
                {
                  "name": "Sun",
                  "description": "Hinokami Kagura is a Breathing Style only known and taught by the Kamado Family, later revealed to be the first Breathing Style, Sun Breathing."
                },
                {
                  "name": "Water",
                  "description": "Water Breathing is a Breathing Style that mimics water, specifically the flow, flexibility and adaptability of the liquid and replicates it with the user's movements, techniques and abilities."
                },
                {
                  "name": "Moon",
                  "description": "Moon Breathing is a Breathing Style that mimics the moon and replicates it with the user's movements, techniques and abilities. Most, if not all, known techniques and forms are standard yet varied swordsmanship techniques that focus on swift and powerful strikes that always follow the shape and pattern of a crescent moon."
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

    <documentation-section id="filter-breathing-styles" :type="subSectionType">
      <template v-slot:title> Breathing Style Filtering </template>

      <section-paragraph> Avaliable filters: </section-paragraph>

      <base-container>
        <base-list>
          <base-list-item>
            <code-text>name</code-text> - breathing style's name</base-list-item
          >
          <base-list-item>
            <code-text>parentStyle</code-text> - breathing style's parent style
            name.</base-list-item
          >
        </base-list>
      </base-container>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            breathingStyles(filter: { parentStyle: "Water" }) {
              data {
                _id
                name
              }
              paginatorInfo {
                total
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
              "breathingStyles": {
                "data": [
                  {
                    "_id": "61d5fffa4471ab62981a870b",
                    "name": "Flower"
                  },
                  {
                    "_id": "61d5fffa4471ab62981a870c",
                    "name": "Serpent"
                  }
                ],
                "paginatorInfo": {
                  "total": 2
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

import DocumentationSection from "@/components/DocumentationSection.vue";
import SectionParagraph from "@/primitives/SectionParagraph.vue";
import CodeText from "@/primitives/CodeText.vue";
import BaseContainer from "@/primitives/BaseContainer.vue";
import BaseTable from "@/components/BaseTable.vue";
import CodeContainer from "@/components/CodeContainer.vue";
import BaseList from "@/primitives/BaseList.vue";
import BaseListItem from "@/primitives/BaseListItem.vue";

export default {
  name: "BreathingStyleSection",
  mixins: [section],
  components: {
    DocumentationSection,
    SectionParagraph,
    CodeText,
    BaseContainer,
    BaseTable,
    CodeContainer,
    BaseList,
    BaseListItem,
  },
  data() {
    return {
      styles: [
        {
          field: "_id",
          type: "ID!",
          description:
            "Breathing Style ID, which is use in query single character.",
        },
        {
          field: "name",
          type: "String!",
          description: "Breathing style's name ex: Water.",
        },
        {
          field: "description",
          type: "String!",
          description: "Breathing style's short description.",
        },
        {
          field: "parentStyle",
          type: "BreathingStyle",
          description: "Breathing style's parent style ex: Sun <- Water.",
        },
        {
          field: "childStyles",
          type: "[BreathingStyle!]",
          description:
            "Breathing style's child styls ex: Water -> Flower, Serpent.",
        },
        {
          field: "techniques",
          type: "[BreathingTechnique!]!",
          description: "All breathing techniques belongs to style.",
        },
        {
          field: "knownUsers",
          type: "[Character!]!",
          description: "All known users of the breathing style.",
        },
      ],
      techniques: [
        {
          field: "_id",
          type: "ID!",
          description: "Breathing technique's ID.",
        },
        {
          field: "name",
          type: "String!",
          description: "Breathing techniques's name ex: Dance.",
        },
        {
          field: "description",
          type: "String!",
          description: "Breathing technique's short description.",
        },
      ],
    };
  },
};
</script>