<template>
  <label
    class="custom-checkbox"
    :class="{ 'custom-checkbox--active': isChecked }"
    :style="{ backgroundImage: `url(${bgImage})` }"
  >
    <input
      @change="handle"
      type="checkbox"
      class="custom-checkbox__input"
      v-bind="$attrs"
    />

    <span class="custom-checkbox__content">
      <slot />
    </span>
  </label>
</template>

<script>
import { customCheckbox } from "@/helpers/mixins";
export default {
  name: "CustomCheckbox",
  mixins: [customCheckbox],
  props: {
    bgImageName: {
      type: String,
      required: false,
    },
  },
  computed: {
    bgImage() {
      const images = require.context("@/assets/images/", false);
      return images(`./${this.bgImageName}`);
    },
  },
};
</script>

<style lang="scss" scoped>
.custom-checkbox {
  @include flex($justify-content: center, $align-items: center);
  flex-wrap: nowrap;
  background-size: 100% 150px;

  width: 100%;
  height: 100%;

  @include media(tiny) {
    background-size: 100%;
  }

  &--active {
    border: 2px solid var(--bg-primary-color);
    outline: 2px solid var(--secondary-color);
  }

  cursor: pointer;

  &__input {
    display: none;
  }

  &__content {
    display: block;
    padding: 0.2rem 0.4rem;
    word-break: break-word;

    color: white;
    background-color: rgba(0, 0, 0, 0.7);

    font-size: 1.2rem;
    font-weight: 500;
  }
}
</style>