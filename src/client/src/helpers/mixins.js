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
        this.currentPage += this.hasMorePages ? direction : 0;
      else
        throw new Error('Direction can be equals only 1 or -1!');
    },
    setLastPage(index) {
      this.lastPage = Math.abs(index);
    },
    hasMorePages() {
      return this.currentPage < this.lastPage;
    },
    changePageValidaiton(direction) {
      return [1, -1].includes(direction);
    }
  }
}

export const customInput = {
  methods: {
    handle(e) {
      this.$emit('input', e.target.value);
    }
 }
}

export const customCheckbox = {
    model: {
    prop: "modelValue",
    event: "change",
  },
  props: {
    value: String,
    modelValue: {
      default: "",
    },
  },
  computed: {
    isChecked() {
      if (this.modelValue instanceof Array)
        return this.modelValue.includes(this.value);

      return this.modelValue === this.trueValue;
    },
  },
  methods: {
    handle(e) {
      const isChecked = e.target.checked;

      if (this.modelValue instanceof Array) {
        const newValue = [...this.modelValue];

        if (isChecked) newValue.push(this.value);
        else newValue.splice(newValue.indexOf(this.value), 1);

        this.$emit("change", newValue);
      } else {
        this.$emit("change", isChecked ? this.value : this.falseValue);
      }
    },
  },
}

import { DocSectionType } from "@/helpers/enums";

export const section = {
  computed: {
    sectionType() {
      return DocSectionType.SECTION;
    },
    subSectionType() {
      return DocSectionType.SUBSECTION;
    },
  },
}

export const filterableSection = {
   watch: {
    filters() {
      this.$emit("update:filters", this.filters);
    },
  },
  data() {
    return {
      filters: [],
    };
  },
}

export const toggleMobileMenu = {
  data() {
    return {
      activeMobileMenu: false,
    }
  },
  methods: {
    toggleMobileMenu() {
      // Because initial value of this.activeMobileMenu is True and value emmited by event is true
      this.activeMobileMenu = !this.activeMobileMenu;
    },
    toggleMobileMenuWhenElementWidthIsGreatherThan(element, width) {
      if(element.innerWidth > width)
       this.activeMobileMenu = false;
    }
  }
}