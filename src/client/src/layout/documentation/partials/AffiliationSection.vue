<template>
  <documentation-section id="affiliation" :type="sectionType">
    <template v-slot:title> Affiliation </template>

    <section-paragraph>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
      pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
      nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
      Sequi eaque dolores veniam.
    </section-paragraph>

    <documentation-section id="affiliation-schema" :type="subSectionType">
      <template v-slot:title> Affiliation Schema </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <base-table :items="items" />
    </documentation-section>

    <documentation-section id="get-single-affiliation" :type="subSectionType">
      <template v-slot:title> Get Single Affiliation </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>
    </documentation-section>

    <documentation-section id="get-all-affiliations" :type="subSectionType">
      <template v-slot:title> Get All Affiliations </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>
    </documentation-section>

    <documentation-section id="affiliation-filtering" :type="subSectionType">
      <template v-slot:title> Affiliation Filtering </template>

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
  name: "AffiliationSection",
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
          field: "knownMembers",
          type: "[Character!]!",
          description: "All known members of breathing style.",
        },
      ],
    };
  },
};
</script>