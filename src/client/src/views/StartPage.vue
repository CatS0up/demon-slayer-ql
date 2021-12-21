<template>
  <div class="start-page">
    <start-header />

    <start-navigation />

    <start-hello-section />
  </div>
</template>

<script>
import StartHeader from "@/layout/start/StartHeader.vue";
import StartNavigation from "@/layout/start/StartNavigation.vue";
import StartHelloSection from "@/layout/start/StartHelloSection.vue";

export default {
  name: "StartPage",
  components: {
    StartHeader,
    StartNavigation,
    StartHelloSection,
  },
};
</script>

<style lang="scss" scoped>
.start-page {
  display: grid;
  min-height: 100vh;

  @include media(medium) {
    grid-template-columns: 3fr 1fr;
    grid-auto-rows: 360px;
  }

  @include media(large) {
    grid-auto-rows: auto;
  }
}
</style>