<template>
  <documentation-section id="character" :type="sectionType">
    <template v-slot:title> Character </template>

    <section-paragraph>
      All characters are sorted by name in alphabetical order.
    </section-paragraph>

    <documentation-section id="character-schema" :type="subSectionType">
      <template v-slot:title> Character Schema </template>

      <base-container>
        <base-table :items="characters" class="table--margin-y" />
      </base-container>
    </documentation-section>

    <documentation-section id="blood-demon-art-schema" :type="subSectionType">
      <template v-slot:title> Blood Demon Art Schema </template>

      <section-paragraph>
        Some character's has blood demon arts (ex: Nezuko) which are a nested
        models. That models doesn't exist outside character model, so they can
        not be quering outside of character.
      </section-paragraph>

      <section-paragraph>
        <strong class="h4"
          >Blood Demon Arts are not paginated.
        </strong></section-paragraph
      >

      <base-container>
        <base-table :items="techniques" />
      </base-container>
    </documentation-section>

    <documentation-section id="get-single-character" :type="subSectionType">
      <template v-slot:title> Get Single Character </template>

      <section-paragraph>
        If you want to get ID of concrete character, you should use the
        <code-text>characters</code-text> query.
      </section-paragraph>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            character(_id: "61d5b3111d7087280c30ec10") {
              name
              age
              gender
              race
              occupation
              abilities
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
              "character": {
                "name": "Giyu Tomioka",
                "age": 21,
                "gender": "Male",
                "race": "Human",
                "occupation": "Water Hashira",
                "abilities": [
                  "Overall Abilities",
                  "Demon Slayer Mark",
                  "Bright Red Nichirin Sword",
                  "Immense Speed",
                  "Immense Reflexes",
                  "Immense Stamina",
                  "Immense Endurance",
                  "Immense Strength",
                  "Indomitable Will"
                ]
              }
            }
          }
        </pre
          >
        </code-container>
      </base-container>
    </documentation-section>

    <documentation-section id="get-all-characters" :type="subSectionType">
      <template v-slot:title> Get All Characters </template>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            characters(first: 5, page: 2, filter: { affiliation: "Hashira" }) {
              data {
                name,
                age,
                occupation
              },
              paginatorInfo {
                perPage
                count
                currentPage
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
                    "name": "Mitsuri Kanroji",
                    "age": 19,
                    "occupation": "Love Hashira"
                  },
                  {
                    "name": "Muichiro Tokito",
                    "age": 14,
                    "occupation": "Mist Hashira"
                  },
                  {
                    "name": "Obanai Iguro",
                    "age": 21,
                    "occupation": "Serpent Hashira"
                  },
                  {
                    "name": "Sakonji Urokodaki",
                    "age": 52,
                    "occupation": "Former Water Hashira "
                  },
                  {
                    "name": "Sanemi Shinazugawa",
                    "age": 21,
                    "occupation": "Wind Hashira"
                  }
                ],
                "paginatorInfo": {
                  "perPage": 5,
                  "count": 5,
                  "currentPage": 2
                }
              }
            }
          }
        </pre
          >
        </code-container>
      </base-container>
    </documentation-section>

    <documentation-section id="filter-characters" :type="subSectionType">
      <template v-slot:title> Filter Characters </template>

      <section-paragraph> Avaliable filters: </section-paragraph>

      <base-container>
        <base-list>
          <base-list-item>
            <code-text>name</code-text> - character's name</base-list-item
          >
          <base-list-item>
            <code-text>race</code-text> - character's race. You can pass here
            single value or array</base-list-item
          >
          <base-list-item>
            <code-text>gender</code-text> - character's gender. You can pass
            here single value or array</base-list-item
          >
          <base-list-item>
            <code-text>abilities</code-text> - character's abilities. You can
            pass here single value or array</base-list-item
          >
          <base-list-item>
            <code-text>affiliation</code-text> - character's affiliation. You
            can pass here single value or array</base-list-item
          >
          <base-list-item>
            <code-text>breathingStyle</code-text> - character's breathing style.
            You can pass here single value or array</base-list-item
          >
          <base-list-item>
            <code-text>hasBloodDemonArt</code-text> - are characters a users of
            blood demon arts? You can pass here boolean value</base-list-item
          >
          <base-list-item>
            <code-text>hasBreathingStyle</code-text> - are characters a users of
            breathing styles? You can pass here boolean value</base-list-item
          >
        </base-list>
      </base-container>

      <base-container>
        <strong class="h4">Example Query</strong>
        <code-container lang="graphql">
          <pre>
          {
            characters(
              first:3
              filter: { 
                gender: "Female" 
                affiliation: ["Butterfly Mansion", "Swordsmith Village"] 
              }) {
              data {
                name
                gender
                affiliations {
                  name
                }
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
                    "name": "Aoi Kanzaki",
                    "gender": "Female",
                    "affiliations": [
                      {
                        "name": "Demon Slayer Corps"
                      },
                      {
                        "name": "Butterfly Mansion"
                      }
                    ]
                  },
                  {
                    "name": "Kiyo Terauchi",
                    "gender": "Female",
                    "affiliations": [
                      {
                        "name": "Demon Slayer Corps"
                      },
                      {
                        "name": "Butterfly Mansion"
                      }
                    ]
                  },
                  {
                    "name": "Naho Takada",
                    "gender": "Female",
                    "affiliations": [
                      {
                        "name": "Demon Slayer Corps"
                      },
                      {
                        "name": "Butterfly Mansion"
                      }
                    ]
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
import BaseTable from "@/components/BaseTable.vue";
import BaseContainer from "@/primitives/BaseContainer.vue";
import CodeText from "@/primitives/CodeText.vue";
import CodeContainer from "@/components/CodeContainer.vue";
import BaseList from "@/primitives/BaseList.vue";
import BaseListItem from "@/primitives/BaseListItem.vue";

export default {
  name: "CharacterSection",
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
      characters: [
        {
          field: "_id",
          type: "ID!",
          description: "Character ID, which is use in query single character.",
        },
        {
          field: "name",
          type: "String!",
          description: "Character's fullname ex: Giyu Tomioka.",
        },
        {
          field: "age",
          type: "Int!",
          description: "Character's Age.",
        },
        {
          field: "gender",
          type: "String!",
          description: "Character's gender.",
        },
        {
          field: "race",
          type: "String!",
          description: "Character's race.",
        },
        {
          field: "occupation",
          type: "String!",
          description: "Character's occupation.",
        },
        {
          field: "animeAvatar",
          type: "String",
          description: "Character's anime picture.",
        },
        {
          field: "mangaAvatar",
          type: "String",
          description: "Character's manga picture.",
        },
        {
          field: "firstAnimeAppearance",
          type: "String",
          description: "First anime appearance of character.",
        },
        {
          field: "firstMangaAppearance",
          type: "String",
          description: "First manga appearance of character.",
        },
        {
          field: "abilities",
          type: "[String!]!",
          description: "Character's abilities.",
        },
        {
          field: "shortDescription",
          type: "String!",
          description: "Character's short description.",
        },
        {
          field: "affiliations",
          type: "[Affiliation!]!",
          description: "Character's affiliation list.",
        },
        {
          field: "breathingStyles",
          type: "[BreathingStyle]!",
          description:
            "Character's breathing styles. Some characters has more than a single breathing style ex: Tanjiro Kamado.",
        },
        {
          field: "bloodDemonArts",
          type: "[BloodDemonArt]!",
          description: "Character's breathing blood demon arts list.",
        },
      ],
      techniques: [
        {
          field: "_id",
          type: "ID!",
          description: "Blood demon art's technique's ID.",
        },
        {
          field: "name",
          type: "String!",
          description: "Blood demon art's name ex: Pyrokinesis.",
        },
        {
          field: "description",
          type: "String!",
          description: "Blood demon art's short description.",
        },
      ],
    };
  },
};
</script>
