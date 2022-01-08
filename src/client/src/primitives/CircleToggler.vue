<template>
  <button @click="toggle" class="circle-toggler">
    <img
      src="@/assets/images/toggler-icon.png"
      alt="Toggler icon."
      class="circle-toggler__icon"
    />
  </button>
</template>

<script>
import { toggle } from "@/helpers/mixins";

export default {
  name: "CircleToggler",
  mixins: [toggle],
};
</script>

<style lang="scss" scoped>
.circle-toggler {
  width: 100%;
  height: 100%;
  max-width: 60px;
  max-height: 60px;

  border-radius: 50%;
  border: none;
  outline: none;

  cursor: pointer;
}
</style>