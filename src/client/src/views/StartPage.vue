<template>
  <div class="start-page">
    <start-header />

    <start-navigation />

    <start-hello-section />

    <start-footer />
  </div>
</template>

<script>
import StartHeader from "@/layout/start/StartHeader.vue";
import StartNavigation from "@/layout/start/StartNavigation.vue";
import StartHelloSection from "@/layout/start/StartHelloSection.vue";
import StartFooter from "@/layout/start/StartFooter.vue";

export default {
  name: "StartPage",
  components: {
    StartHeader,
    StartNavigation,
    StartHelloSection,
    StartFooter,
  },
};
</script>

<style lang="scss" scoped>
.start-page {
  min-height: 100vh;
  grid-auto-rows: auto;

  @include media(medium) {
    display: grid;
    grid-template-columns: 3fr 1fr;
    grid-auto-rows: 360px;
  }

  @include media(large) {
    grid-auto-rows: auto;
    align-items: start;
  }
}
</style>