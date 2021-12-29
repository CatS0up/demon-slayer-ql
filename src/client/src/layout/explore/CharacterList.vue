<template>
  <div class="character-list" v-if="hasLoadedCharacters">
    <character-card
      v-for="character in characters"
      :key="character._id"
      :character="character"
    />
  </div>
  <pulse-loader v-else />
</template>

<script>
import { pagination } from "@/helpers/mixins.js";

import CHARACTERS_QUERY from "@/graphql/Characters.gql";
import CharacterCard from "@/components/CharacterCard.vue";
import PulseLoader from "@/primitives/PulseLoader.vue";

export default {
  name: "CharacterList",
  mixins: [pagination],
  components: {
    CharacterCard,
    PulseLoader,
  },
  computed: {
    hasLoadedCharacters() {
      return !!this.characters.length;
    },
    variables() {
      return {
        perPage: this.perPage,
        page: this.currentPage,
      };
    },
  },
  data() {
    return {
      characters: [],
      isLoadingNext: false,
    };
  },
  apollo: {
    characters: {
      query: CHARACTERS_QUERY,
      skip: true,
      debounce: 250,
      prefetch: true,
      update({ characters }) {
        const { data, paginatorInfo } = characters;

        this.setLastPage(paginatorInfo.lastPage);

        return data;
      },
    },
  },
  methods: {
    async showMore() {
      this.skipPage(1);

      this.$apollo.queries.characters.fetchMore({
        variables: this.variables,
        updateQuery({ characters }, { fetchMoreResult }) {
          return {
            characters: {
              __typename: characters.__typename,
              data: [...characters.data, ...fetchMoreResult.characters.data],
              paginatorInfo: fetchMoreResult.characters.paginatorInfo,
            },
          };
        },
      });
    },
    handleScroll() {
      if (
        document.documentElement.scrollTop + window.innerHeight ===
        document.documentElement.offsetHeight
      )
        this.showMore();
    },
  },
  created() {
    this.$apollo.queries.characters.setVariables({ ...this.variables });
    this.$apollo.queries.characters.skip = false;
  },

  mounted() {
    window.addEventListener("scroll", this.handleScroll);
  },

  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);

    this.characters.length = 10;
  },
};
</script>

<style lang="scss" scoped>
.character-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(auto, 325px));
  justify-content: center;
  margin: 1rem;
  gap: 2rem;
}
</style>