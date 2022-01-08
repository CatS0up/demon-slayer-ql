<template>
  <article class="character-card">
    <header
      class="character-card__header"
      :style="{ backgroundImage: `url(${bgImage})` }"
    >
      <div class="character-card__avatar-container">
        <img :src="avatar" alt="Test" class="character-card__avatar" />
      </div>
    </header>

    <section class="character-card__body">
      <div class="character-card__avatar-switch">
        <span class="character-card__label">Anime</span>

        <toggle-switch :isActive.sync="hasMangaAvatar" />

        <span class="character-card__label">Manga</span>
      </div>
      <p class="character-card__meta">
        <span class="character-card__label">Name:</span>
        {{ character.name }}
      </p>
      <p class="character-card__meta">
        <span class="character-card__label">Age:</span>
        {{ character.age || "?" }}
      </p>
      <p class="character-card__meta">
        <span class="character-card__label">Race:</span>
        {{ character.race }}
      </p>
      <p class="character-card__meta">
        <span class="character-card__label">Gender:</span>
        {{ character.gender }}
      </p>
      <p class="character-card__meta">
        <span class="character-card__label">Occupation:</span>
        {{ character.occupation }}
      </p>
      <p class="character-card__meta">
        <span class="character-card__label">Description:</span>
        {{ character.shortDescription }}
      </p>
    </section>
  </article>
</template>

<script>
import { Fractions } from "@/helpers/enums";
import { stringToSlug } from "@/helpers/helpers";
import ToggleSwitch from "@/primitives/ToggleSwitch.vue";

export default {
  name: "CharacterCard",
  props: {
    character: Object,
  },
  components: { ToggleSwitch },
  data() {
    return {
      hasMangaAvatar: false,
    };
  },
  computed: {
    avatar() {
      // TODO: change when avatars gonna be from api
      const images = require.context("@/assets/", false, /\.png$/);

      return images(`./shinobu_${this.hasMangaAvatar ? "manga" : "anime"}.png`);
    },
    bgImage() {
      const images = require.context("@/assets/images/", false);

      const affiliationNames = this.character.affiliations.map(
        (affiliation) => affiliation.name
      );

      return images(`./${this.assignImageToCharacter(affiliationNames)}.png`);
    },
  },
  methods: {
    assignImageToCharacter(affiliationNames) {
      const availableAffiliations = Fractions.values();

      for (const affiliation of availableAffiliations) {
        if (affiliationNames.includes(affiliation))
          return stringToSlug(affiliation);
      }

      return stringToSlug(Fractions.OTHERS);
    },
  },
};
</script>

<style lang="scss" scoped>
.character-card {
  border-radius: 0.3rem;
  overflow: hidden;

  background-color: var(--bg-secondary-color);

  box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);

  &__header {
    position: relative;
    height: 200px;

    // TODO: change when avatars gonna be from api
    background-size: cover;
    background-repeat: no-repeat;

    @include media(tiny) {
      background-size: 100% 200px;
    }

    @include media(small) {
      height: 150px;
      background-size: 100% 150px;
    }
  }

  &__avatar-switch {
    @include flex($justify-content: space-between, $align-items: center);
  }

  &__avatar-container {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 50%);
    border-radius: 50%;
    overflow: hidden;

    width: 100%;
    height: 100%;
    max-height: 100px;
    max-width: 100px;

    border: 2px solid white;

    outline: 1px solid black;
  }

  // TODO: change when avatars gonna be from api
  &__avatar {
    width: 100%;
    height: 100%;
  }

  &__body {
    // 50 px avatar_height / 2 + 10 px
    padding: 60px 1rem 1rem 1rem;
    min-height: fit-content;
  }

  &__meta {
    display: block;
    margin-top: 0.2rem;

    font-size: 0.9rem;
  }

  &__label {
    font-weight: 500;
    color: var(--secondary-color);
  }
}
</style>