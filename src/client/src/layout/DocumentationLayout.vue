<template>
  <div class="documentation-layout">
    <documentation-navigation />

    <aside-panel :isActive.sync="activeSidebar">
      <slot name="aside" />
    </aside-panel>

    <div
      class="documentation-layout__wrapper"
      :class="{
        'documentation-layout__wrapper--active-sidebar': activeSidebar,
      }"
    >
      <div class="documentation-layout__options">
        <hamburger-toggler @update:isActive="toggleSidebar()" />
      </div>

      <article class="documentatio-layout__content">
        <slot name="content" />
      </article>
    </div>
  </div>
</template>

<script>
import DocumentationNavigation from "@/layout/documentation/DocumentationNavigation.vue";
import AsidePanel from "@/layout/documentation/AsidePanel.vue";
import HamburgerToggler from "@/components/HamburgerToggler.vue";

export default {
  name: "DocumentationLayout",
  components: {
    DocumentationNavigation,
    AsidePanel,
    HamburgerToggler,
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
    const MAX_ELEMENT_WIDTH = 1024;

    this.toggleSidebarWhenElementWidthIsLessThan(window, MAX_ELEMENT_WIDTH);

    window.addEventListener("resize", (e) =>
      this.toggleSidebarWhenElementWidthIsLessThan(e.target, MAX_ELEMENT_WIDTH)
    );
  },
};
</script>

<style lang="scss" scoped>
.documentation-layout {
  min-height: calc(100vh - 61px - 0.15rem);

  &__wrapper {
    display: grid;
    margin-top: calc(61px + 0.15rem);

    transition: margin-left 0.3s linear;

    &--active-sidebar {
      @include media(medium) {
        margin-left: 250px;
      }
    }
  }

  &__options {
    padding: 1rem;
  }
}
</style>