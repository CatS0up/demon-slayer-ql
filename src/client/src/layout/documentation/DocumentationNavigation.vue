<template>
  <nav class="navbar">
    <div class="navbar__logo-container">
      <router-link :to="{ name: 'start' }">
        <img
          src="@/assets/images/navbar-logo.png"
          alt="Nezuko chibi sticker."
          class="navbar_logo"
        />
      </router-link>
    </div>
    <ul class="navbar__items">
      <li class="navbar__item">
        <router-link
          :to="{ name: 'explore' }"
          class="navbar__link"
          active-class="navbar__link--active"
          >Explore</router-link
        >
      </li>
      <li class="navbar__item">
        <router-link
          :to="{ name: 'documentation' }"
          class="navbar__link"
          active-class="navbar__link--active"
          >Docs</router-link
        >
      </li>
      <li class="navbar__item">
        <router-link
          to="#"
          class="navbar__link"
          active-class="navbar__link--active"
          >Playground</router-link
        >
      </li>
      <li class="navbar__item">
        <router-link
          to="#"
          class="navbar__link"
          active-class="navbar__link--active"
          >References</router-link
        >
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "DocumentationNavigation",
};
</script>

<style lang="scss" scoped>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 999;

  height: 60px;
  padding: 0.3rem 1rem;
  font-size: 1.2rem;

  background-color: #fff;
  border-bottom: 1px solid $border-color-gray;

  &__logo-container {
    display: flex;
    justify-content: center;
    align-items: center;

    border-radius: 50%;

    overflow: hidden;
  }

  &__items {
    display: flex;

    list-style: none;
  }
  &__item:not(:first-of-type) {
    margin-left: 1rem;
  }

  &__link {
    font-weight: 500;

    &--active {
      border-bottom: 2px solid black;
    }
  }
}
</style>