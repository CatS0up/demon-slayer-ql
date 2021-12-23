<template>
  <div class="character-filters">
    <section class="character-filters__section">
      <input
        class="character-filters__search"
        type="search"
        placeholder="Search..."
      />
    </section>
    <section class="character-filters__section">
      <h2 class="character-filters__subtitle">Race:</h2>

      <ul class="character-filters__list character-filters__list">
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Human
          </label>
        </li>
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Demon
          </label>
        </li>
      </ul>
    </section>
    <section class="character-filters__section">
      <h2 class="character-filters__subtitle">Gender:</h2>

      <ul class="character-filters__list">
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Male
          </label>
        </li>
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Female
          </label>
        </li>
      </ul>
    </section>

    <section class="character-filters__section">
      <h2 class="character-filters__subtitle">Slayers:</h2>

      <ul class="character-filters__list">
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            All
          </label>
        </li>
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Ordinary Slayers
          </label>
        </li>
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Hashira
          </label>
        </li>
      </ul>
    </section>

    <section class="character-filters__section">
      <h2 class="character-filters__subtitle">Demons:</h2>

      <ul class="character-filters__list">
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            All
          </label>
        </li>
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Ordinary Demons
          </label>
        </li>
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Upper Moon
          </label>
        </li>
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Lower Moon
          </label>
        </li>
      </ul>
    </section>

    <section class="character-filters__section">
      <h2 class="character-filters__subtitle">Others:</h2>

      <ul class="character-filters__list">
        <li class="character-filters__item">
          <label>
            <input type="checkbox" />
            Other characters
          </label>
        </li>
      </ul>
    </section>
  </div>
</template>

<script>
export default {
  name: "CharacterFilters",
};
</script>

<style lang="scss" scoped>
.character-filters {
  &__search {
    padding: 0.5rem 0;

    border: none;
    border-bottom: 1px solid $border-color-gray;

    outline: none;
  }

  &__section {
    padding-top: 1rem;

    &:first-of-type {
      padding-top: 0;
    }
  }

  &__subtitle {
    font-size: 1.1rem;
  }

  &__list {
    padding-top: 0.5rem;

    list-style: none;
  }

  &__item {
    color: $text-color-gray;
  }
}
</style>