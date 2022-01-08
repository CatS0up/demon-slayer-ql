<template>
  <label class="base-checkbox">
    <input
      @change="handle"
      class="base-checkbox__input"
      type="checkbox"
      v-bind="$attrs"
    />
    <slot />
  </label>
</template>

<script>
import { customCheckbox } from "@/helpers/mixins";
export default {
  name: "BaseCheckbox",
  mixins: [customCheckbox],
};
</script>