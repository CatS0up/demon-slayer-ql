<template>
  <div class="theme-toggler">
    <base-picture
      v-if="theme === 'dark'"
      @click.native="toggle"
      image="moon.png"
      alt="Theme mode moon icon picture."
      class="theme-toggler__icon"
    />
    <base-picture
      v-else
      @click.native="toggle"
      image="sun.png"
      alt="Theme mode sun icon picture."
      class="theme-toggler__icon"
    />
  </div>
</template>

<script>
import BasePicture from "@/primitives/BasePicture.vue";

export default {
  components: { BasePicture },
  name: "ThemeToggler",
  data() {
    return {
      theme: "",
    };
  },
  methods: {
    toggle() {
      this.theme = this.theme === "dark" ? "" : "dark";

      document.documentElement.setAttribute("data-theme", this.theme);

      localStorage.setItem("theme", this.theme);
    },
  },
  mounted() {
    this.theme = localStorage.getItem("theme");

    document.documentElement.setAttribute("data-theme", this.theme);
  },
};
</script>

<style lang="scss" scoped>
.theme-toggler {
  &__icon {
    max-width: 30px;

    cursor: pointer;
  }
}
</style>