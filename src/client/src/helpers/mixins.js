export const toggle = {
  data() {
    return {
      isActive: false,
    };
    },
  methods: {
    toggle() {
      this.isActive = !this.isActive;
      this.$emit("update:isActive", this.isActive);
    },
  },
}

export const pagination = {
  data() {
    return {
      currentPage: 1,
      perPage: 10,
      lastPage: 0
    }
  },
  methods: {
    skipPage(direction) {
      if(this.changePageValidaiton(direction))
        this.currentPage += this.currentPage < this.lastPage ? direction : 0;
      else
        throw new Error('Direction can be equals only 1 or -1!');
    },
    setLastPage(index) {
      this.lastPage = Math.abs(index);
    },
    changePageValidaiton(direction) {
      return [1, -1].includes(direction);
    }
  }
}

export const customInput = {
  props: {
    value: String
  },
  methods: {
     handle() {
      this.$emit("input", this.value);
    },
  }
}

import { SECTION_TYPE, SUB_SECTION_TYPE } from "@/helpers/constants.js";
import DocumentationSection from "@/components/DocumentationSection.vue";
import SectionParagraph from "@/primitives/SectionParagraph.vue";

export const section = {
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
}