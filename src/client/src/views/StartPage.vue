<template>
  <div class="start-page">
    <start-header />

    <start-hello-section />

    <start-navigation />
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
  grid-template-columns: 3fr 1fr;

  height: 100%;
}
</style>