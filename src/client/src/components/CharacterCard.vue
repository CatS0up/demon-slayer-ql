<template>
  <article class="character-card">
    <header class="character-card__header">
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
  },
};
</script>

<style lang="scss" scoped>
.character-card {
  border-radius: 0.3rem;
  overflow: hidden;

  background-color: var(--card-bg);

  box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);

  &__header {
    position: relative;
    height: 150px;
    // TODO: change when avatars gonna be from api
    background-image: url(../assets/images/bg_slayer.png);
    background-size: cover;
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

    height: 100px;
    width: 100px;

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