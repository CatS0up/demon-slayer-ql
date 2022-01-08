<template>
  <div class="documentation-layout">
    <documentation-navigation @update:isActive="toggleMobileMenu" />

    <aside-panel :isActive.sync="activeSidebar">
      <slot name="aside" />
    </aside-panel>

    <div
      class="documentation-layout__wrapper"
      :class="{
        'documentation-layout__wrapper--active-sidebar': activeSidebar,
      }"
    >
      <div class="documentation-layout__content">
        <slot name="content" />
      </div>
    </div>

    <mobile-navigation :isActive.sync="activeMobileMenu" />

    <circle-toggler
      @update:isActive="toggleSidebar"
      class="documentation-layout__circle-toggler"
    />
  </div>
</template>

<script>
import { Breakpoint } from "@/helpers/enums";
import { toggleMobileMenu } from "@/helpers/mixins";

import DocumentationNavigation from "@/layout/documentation/DocumentationNavigation.vue";
import AsidePanel from "@/layout/documentation/AsidePanel.vue";
import CircleToggler from "@/primitives/CircleToggler.vue";
import MobileNavigation from "./documentation/MobileNavigation.vue";

export default {
  name: "DocumentationLayout",
  mixins: [toggleMobileMenu],
  components: {
    DocumentationNavigation,
    AsidePanel,
    CircleToggler,
    MobileNavigation,
  },
  data() {
    return {
      activeSidebar: true,
    };
  },
  methods: {
    toggleSidebar() {
      // Because initial value of this.activeSidebar is True and value emmited by event is true
      this.activeSidebar = !this.activeSidebar;
    },
    toggleSidebarWhenElementWidthIsLessThan(element, width) {
      this.activeSidebar = !(element.innerWidth < width);
    },
  },

  created() {
    this.toggleSidebarWhenElementWidthIsLessThan(window, Breakpoint.LARGE);
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
.documentation-layout {
  min-height: calc(100vh - 61px - 0.15rem);

  overflow: hidden;

  &__wrapper {
    @include flex($direction: column);
    margin-top: calc(61px + 0.15rem);

    min-height: calc(100vh - 61px - 0.15rem);

    transition: margin-left 0.3s linear;

    &--active-sidebar {
      @include media(medium) {
        margin-left: 270px;
      }
    }
  }

  &__options {
    padding: 1rem;
  }

  &__content {
    @include flex($direction: column);
    flex-grow: 1;
  }

  // Mixins
  &__circle-toggler {
    position: fixed;
    bottom: 20px;
    right: 25px;

    z-index: 900;
  }
}
</style>