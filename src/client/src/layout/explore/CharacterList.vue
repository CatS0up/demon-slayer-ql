<template>
  <div class="character-list">
    <div class="character-list__items" v-if="hasLoadedCharacters">
      <character-card
        v-for="character in characters"
        :key="character._id"
        :character="character"
      />
    </div>

    <p
      class="character-list__filter-result"
      v-else-if="activeFiltering && !hasLoadedCharacters"
    >
      Not found...
    </p>

    <div v-else class="character-list__loader-container">
      <pulse-loader class="character-list__pulse-loader" />
    </div>

    <div class="character-list__filter-info">{{ filtersCount }}</div>
  </div>
</template>

<script>
import { pagination } from "@/helpers/mixins.js";

import CHARACTERS_QUERY from "@/graphql/Characters.gql";
import CharacterCard from "@/components/CharacterCard.vue";
import PulseLoader from "@/primitives/PulseLoader.vue";

export default {
  name: "CharacterList",
  mixins: [pagination],
  props: {
    filters: Object,
  },
  components: {
    CharacterCard,
    PulseLoader,
  },
  watch: {
    filters: {
      handler() {
        this.$apollo.queries.characters.refetch({ filter: this.filters });
      },
      deep: true,
    },
  },
  computed: {
    filtersCount() {
      return Object.values(this.filters).flat().length;
    },
    hasLoadedCharacters() {
      return !!this.characters.length;
    },
    activeFiltering() {
      return Object.keys(this.filters).length;
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
      const { scrollTop, scrollHeight, clientHeight } =
        document.documentElement;

      if (scrollTop + clientHeight >= scrollHeight)
        if (this.hasMorePages()) this.showMore();
    },
    handleResize() {
      const lastCard = document.querySelector(".character-card:last-of-type");

      if (
        lastCard &&
        lastCard.offsetTop < document.documentElement.offsetHeight
      )
        this.showMore();
    },
    fillCardScreen() {
      const lastCard = document.querySelector(".character-card:last-of-type");

      if (lastCard && lastCard.offsetTop <= window.innerHeight) this.showMore();
    },
  },
  created() {
    this.$apollo.queries.characters.setVariables({ ...this.variables });
    this.$apollo.queries.characters.skip = false;
  },

  mounted() {
    window.addEventListener("scroll", this.handleScroll);
    window.addEventListener("resize", this.handleResize);
  },

  updated() {
    this.fillCardScreen();
  },

  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
    window.removeEventListener("resize", this.handleResize);

    this.characters.length = 10;
  },
};
</script>

<style lang="scss" scoped>
.character-list {
  flex-grow: 1;
  @include flex($direction: column);
  margin: 1.3rem 1rem;

  @include media(tiny) {
    padding: 1rem 3rem;
  }

  @include media(small) {
    padding: 0;
  }

  &__items {
    display: grid;
    justify-content: center;
    gap: 2rem;

    @include media(small) {
      grid-template-columns: repeat(auto-fill, minmax(auto, 325px));
    }
  }

  &__filter-info {
    position: fixed;
    right: 25px;
    bottom: 100px;
    width: 100%;
    height: 100%;
    max-width: 60px;
    max-height: 60px;
    line-height: 60px;
    padding: 0 1rem;

    text-align: center;
    font-weight: 500;
    color: white;
    background-color: black;
    border-radius: 50%;

    user-select: none;

    cursor: pointer;

    &:hover,
    &:active {
      &::after {
        transform: translateX(calc(-100% + 30px)) scaleY(1);
      }
    }

    &::after {
      content: "Active filters";
      position: absolute;
      top: 0;
      left: 0;
      transform: translateX(calc(-100% + 30px)) scaleX(0);
      transform-origin: center right;
      height: 100%;
      width: 200px;

      border-radius: 25px 0 0 25px;

      background-color: rgba(0, 0, 0, 0.7);

      overflow: hidden;

      transition: 0.3s ease-in-out;

      z-index: -1;
    }
  }

  &__filter-result {
    margin: auto 0;

    font-size: 1.4rem;
    text-align: center;
  }

  &__loader-container {
    margin: auto 0;
  }
}
</style>