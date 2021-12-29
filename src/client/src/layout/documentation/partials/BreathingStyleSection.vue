<template>
  <documentation-section id="breathing-style" :type="sectionType">
    <template v-slot:title> Breathing Style </template>

    <section-paragraph>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
      pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
      nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
      Sequi eaque dolores veniam.
    </section-paragraph>

    <documentation-section id="breathing-style-schema" :type="subSectionType">
      <template v-slot:title> Breathing Style Schema </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <base-table :items="items" />
    </documentation-section>

    <documentation-section
      id="get-single-breathing-style"
      :type="subSectionType"
    >
      <template v-slot:title> Get Single Breathing Style </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>
    </documentation-section>

    <documentation-section id="get-all-breathing-styles" :type="subSectionType">
      <template v-slot:title> Get All Breathing Styles </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>
    </documentation-section>

    <documentation-section
      id="breathing-style-filtering"
      :type="subSectionType"
    >
      <template v-slot:title> Breathing Style Filtering </template>

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
  name: "BreathingStyleSection",
  mixins: [section],
  components: { BaseTable },
  data() {
    return {
      items: [
        {
          field: "_id",
          type: "ID!",
          description:
            "Breathing Style ID, which is use in query single character.",
        },
        {
          field: "name",
          type: "String!",
          description: "Breathing Style's name ex: Water.",
        },
        {
          field: "description",
          type: "String!",
          description: "Breathing style's short description.",
        },
        {
          field: "techniques",
          type: "[BreathingTechnique!]!",
          description: "All breathing techniques belongs to style.",
        },
        {
          field: "knownUsers",
          type: "[Character!]!",
          description: "All known users of breathing style.",
        },
      ],
    };
  },
};
</script>