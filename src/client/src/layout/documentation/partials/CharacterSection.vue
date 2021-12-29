<template>
  <documentation-section id="character" :type="sectionType">
    <template v-slot:title> Character </template>

    <section-paragraph>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
      pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
      nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
      Sequi eaque dolores veniam.
    </section-paragraph>

    <documentation-section id="character-schema" :type="subSectionType">
      <template v-slot:title> Character Schema </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <base-table :items="items" class="table--margin-y" />
    </documentation-section>

    <documentation-section id="get-single-character" :type="subSectionType">
      <template v-slot:title> Get Single Character </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>
    </documentation-section>

    <documentation-section id="get-all-characters" :type="subSectionType">
      <template v-slot:title> Get All Characters </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>
    </documentation-section>

    <documentation-section id="character-filtering" :type="subSectionType">
      <template v-slot:title> Character Filtering </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>
    </documentation-section>
  </documentation-section>
</template>

<script>
import { section } from "@/helpers/mixins.js";

import BaseTable from "@/components/BaseTable.vue";

export default {
  name: "CharacterSection",
  mixins: [section],
  components: { BaseTable },
  data() {
    return {
      items: [
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
          field: "shortDescription",
          type: "String!",
          description: "Character's short description.",
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
          field: "breathingStyles",
          type: "[BreathingStyle]!",
          description:
            "Character's breathing styles. Some characters has more than a single breathing style ex: Tanjiro Kamado.",
        },
        {
          field: "breathingTechniques",
          type: "[BreathingTechnique]!",
          description:
            "Character's breathing styles. Some characters has more than a single breathing style ex: Tanjiro Kamado.",
        },
        {
          field: "bloodDemonArts",
          type: "[BloodDemonArt]!",
          description:
            "Character's breathing styles. Some characters has more than a single breathing style ex: Tanjiro Kamado.",
        },
      ],
    };
  },
};
</script>
