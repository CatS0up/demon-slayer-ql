<template>
  <article class="documentation">
    <documentation-section id="introduction" :type="sectionType">
      <template v-slot:title> Introduction </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <documentation-section id="introduction" :type="subSectionType">
        <template v-slot:title> Subsection </template>

        <section-paragraph>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
          pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
          nihil modi incidunt, aperiam illum ea dolore tempora corrupti
          provident! Sequi eaque dolores veniam.
        </section-paragraph>
      </documentation-section>
    </documentation-section>

    <documentation-section id="introduction" :type="sectionType">
      <template v-slot:title> Introduction </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <documentation-section id="introduction" :type="subSectionType">
        <template v-slot:title> Subsection </template>

        <section-paragraph>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
          pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
          nihil modi incidunt, aperiam illum ea dolore tempora corrupti
          provident! Sequi eaque dolores veniam.
        </section-paragraph>
      </documentation-section>
    </documentation-section>

    <documentation-section id="introduction" :type="sectionType">
      <template v-slot:title> Introduction </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <documentation-section id="introduction" :type="subSectionType">
        <template v-slot:title> Subsection </template>

        <section-paragraph>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
          pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
          nihil modi incidunt, aperiam illum ea dolore tempora corrupti
          provident! Sequi eaque dolores veniam.
        </section-paragraph>
      </documentation-section>
    </documentation-section>

    <documentation-section id="introduction" :type="sectionType">
      <template v-slot:title> Introduction </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <documentation-section id="introduction" :type="subSectionType">
        <template v-slot:title> Subsection </template>

        <section-paragraph>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
          pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
          nihil modi incidunt, aperiam illum ea dolore tempora corrupti
          provident! Sequi eaque dolores veniam.
        </section-paragraph>
      </documentation-section>
    </documentation-section>

    <documentation-section id="introduction" :type="sectionType">
      <template v-slot:title> Introduction </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <documentation-section id="introduction" :type="subSectionType">
        <template v-slot:title> Subsection </template>

        <section-paragraph>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
          pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
          nihil modi incidunt, aperiam illum ea dolore tempora corrupti
          provident! Sequi eaque dolores veniam.
        </section-paragraph>
      </documentation-section>
    </documentation-section>

    <documentation-section id="introduction" :type="sectionType">
      <template v-slot:title> Introduction </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <documentation-section id="introduction" :type="subSectionType">
        <template v-slot:title> Subsection </template>

        <section-paragraph>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
          pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
          nihil modi incidunt, aperiam illum ea dolore tempora corrupti
          provident! Sequi eaque dolores veniam.
        </section-paragraph>
      </documentation-section>
    </documentation-section>

    <documentation-section id="introduction" :type="sectionType">
      <template v-slot:title> Introduction </template>

      <section-paragraph>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
        pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
        nihil modi incidunt, aperiam illum ea dolore tempora corrupti provident!
        Sequi eaque dolores veniam.
      </section-paragraph>

      <documentation-section id="introduction" :type="subSectionType">
        <template v-slot:title> Subsection </template>

        <section-paragraph>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
          pariatur esse perspiciatis exercitationem, quibusdam aliquam delectus
          nihil modi incidunt, aperiam illum ea dolore tempora corrupti
          provident! Sequi eaque dolores veniam.
        </section-paragraph>
      </documentation-section>
    </documentation-section>
  </article>
</template>

<script>
import { SECTION_TYPE, SUB_SECTION_TYPE } from "@/helpers/constants.js";

import DocumentationSection from "@/components/DocumentationSection.vue";
import SectionParagraph from "@/primitives/SectionParagraph.vue";

export default {
  name: "DocumentationArticle",
  components: {
    DocumentationSection,
    SectionParagraph,
  },
  computed: {
    sectionType() {
      return SECTION_TYPE;
    },
    subSectionType() {
      return SUB_SECTION_TYPE;
    },
  },
};
</script>

<style lang="scss" scoped>
.documentation {
  max-width: 900px;

  padding: 2rem 1rem;
  margin: 0 auto;
}
</style>