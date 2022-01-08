<template>
  <div class="full-page-layout">
    <documentation-navigation @update:isActive="toggleMobileMenu" />

    <div class="full-page-layout__content">
      <slot />
    </div>

    <mobile-navigation :isActive.sync="activeMobileMenu" />
  </div>
</template>

<script>
import { Breakpoint } from "@/helpers/enums";
import { toggleMobileMenu } from "@/helpers/mixins";

import DocumentationNavigation from "./documentation/DocumentationNavigation.vue";
import MobileNavigation from "./documentation/MobileNavigation.vue";

export default {
  name: "FullPageLayout",
  mixins: [toggleMobileMenu],
  components: {
    DocumentationNavigation,
    MobileNavigation,
  },
  created() {
    window.addEventListener("resize", () => {
      this.toggleMobileMenuWhenElementWidthIsGreatherThan(
        window,
        Breakpoint.SMALL
      );
    });
  },
};
</script>

<style lang="scss" scoped>
.full-page-layout {
  &__content {
    @include flex($direction: column);
    margin-top: calc(61px + 0.15rem);

    min-height: calc(100vh - 61px - 0.15rem);
  }
}
</style>