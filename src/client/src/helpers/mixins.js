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