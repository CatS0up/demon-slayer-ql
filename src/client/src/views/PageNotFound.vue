<template>
  <full-page-layout>
    <div class="error-content">
      <p class="error-content__message">404 | Page Not Found</p>
    </div>
  </full-page-layout>
</template>

<script>
import FullPageLayout from "@/layout/FullPageLayout.vue";

export default {
  components: { FullPageLayout },
  name: "PageNotFound",
};
</script>

<style lang="scss" scoped>
.error-content {
  margin: auto;
}
</style>