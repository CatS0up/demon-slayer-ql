<template>
  <div class="table-of-contents">
    <aside-section>
      <base-link destination="#introduction" class="h4 aside__h4">
        Introduction
      </base-link>
    </aside-section>

    <aside-section>
      <base-link destination="#pagination" class="h4 aside__h4">
        Pagination
      </base-link>

      <aside-list>
        <aside-list-item>
          <base-link destination="#pagination-info" class="aside__link">
            Info
          </base-link>
        </aside-list-item>

        <aside-list-item>
          <base-link destination="#pagination-schema" class="aside__link">
            PaginatorInfo Schema
          </base-link>
        </aside-list-item>
      </aside-list>
    </aside-section>

    <aside-section>
      <base-link destination="#character" class="h4 aside__h4">
        Character
      </base-link>

      <aside-list>
        <aside-list-item>
          <base-link destination="#character-schema" class="aside__link">
            Character Schema
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#blood-demon-art-schema" class="aside__link">
            Blood Demon Art Schema
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#get-single-character" class="aside__link">
            Get Single Character
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#get-all-characters" class="aside__link">
            Get All Characters
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#filter-characters" class="aside__link">
            Filter Characters
          </base-link>
        </aside-list-item>
      </aside-list>
    </aside-section>

    <aside-section>
      <base-link destination="#breathing-style" class="h4 aside__h4">
        Breathing Style
      </base-link>

      <aside-list>
        <aside-list-item>
          <base-link destination="#breathing-style-schema" class="aside__link">
            Breathing Style Schema
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link
            destination="#breathing-technique-schema"
            class="aside__link"
          >
            Breathing Technique Schema
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link
            destination="#get-single-breathing-style"
            class="aside__link"
          >
            Get Single Breathing Style
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link
            destination="#get-all-breathing-styles"
            class="aside__link"
          >
            Get All Breathing Styles
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#filter-breathing-styles" class="aside__link">
            Filter Breathing Styles
          </base-link>
        </aside-list-item>
      </aside-list>
    </aside-section>

    <aside-section>
      <base-link destination="#affiliation" class="h4 aside__h4">
        Affiliation
      </base-link>

      <aside-list>
        <aside-list-item>
          <base-link destination="#affiliation-schema" class="aside__link">
            Affiliation Schema
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#get-single-affiliation" class="aside__link">
            Get Single Affiliation
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#get-all-affiliations" class="aside__link">
            Get All Affiliations
          </base-link>
        </aside-list-item>
        <aside-list-item>
          <base-link destination="#filter-affiliations" class="aside__link">
            Filter Affiliations
          </base-link>
        </aside-list-item>
      </aside-list>
    </aside-section>
  </div>
</template>

<script>
import AsideSection from "@/primitives/AsideSection.vue";
import AsideList from "@/primitives/AsideList.vue";
import AsideListItem from "@/primitives/AsideListItem.vue";
import BaseLink from "@/primitives/BaseLink.vue";

export default {
  name: "TableOfcontents",
  components: {
    AsideSection,
    AsideList,
    AsideListItem,
    BaseLink,
  },
};
</script>

<style lang="scss" scoped>
.aside {
  &__h4 {
    font-size: 1.6rem;

    @include media(medium) {
      font-size: 1.2rem;
    }
  }

  &__link {
    font-size: 1.3rem;

    @include media(medium) {
      font-size: inherit;
    }
  }
}
</style>