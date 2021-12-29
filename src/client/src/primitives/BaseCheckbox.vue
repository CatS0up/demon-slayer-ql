<template>
  <label class="base-checkbox">
    <input
      @change="handle"
      class="base-checkbox__input"
      type="checkbox"
      :value="inputValue"
    />
    <slot />
  </label>
</template>

<script>
export default {
  name: "BaseCheckbox",
  props: {
    inputValue: String,
  },
  methods: {
    handle(e) {
      this.$emit("input", e.target.value);
    },
  },
};
</script>