<template>
  <input @input="handle" class="base-input" />
</template>

<script>
import { customInput } from "@/helpers/mixins";

export default {
  name: "BaseInput",
  mixins: [customInput],
};
</script>

<style lang="scss" scoped>
.base-input {
  width: 100%;
  padding-bottom: 0.3rem;

  outline: none;
  border: none;
  border-bottom: 1px solid var(--border-color);

  background-color: transparent;

  color: var(--primary-color);
  font-size: 1rem;
}
</style>