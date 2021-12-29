<template>
  <label class="switch">
    <input type="checkbox" class="switch__checkbox" @change="toggle" />

    <span class="switch__slider"> </span>
  </label>
</template>

<script>
import { toggle } from "@/helpers/mixins.js";

export default {
  name: "ToggleSwitch",
  mixins: [toggle],
};
</script>

<style lang="scss" scoped>
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 25px;

  cursor: pointer;

  &__checkbox {
    display: none;

    &:checked + {
      .switch__slider::before {
        transform: translate(100%, -50%);
      }
    }
  }

  &__slider {
    position: absolute;
    inset: 0;

    transition: 0.3s ease-in-out;

    background-color: var(--font-color);
    border-radius: 40px;

    &:before {
      content: "";
      position: absolute;
      top: 50%;
      left: 10%;
      transform: translateY(-50%);

      width: 20px;
      height: 20px;
      background: white;
      border-radius: 50%;

      transition: transform 0.3s ease-in-out;
    }
  }
}
</style>