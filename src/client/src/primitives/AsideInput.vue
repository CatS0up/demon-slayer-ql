<template>
  <input @input="handle" class="aside__input" />
</template>

<script>
import { customInput } from "@/helpers/mixins";

export default {
  name: "AsideInput",
  mixins: [customInput],
};
</script>

<style lang="scss" scoped>
.aside__input {
  padding-bottom: 0.3rem;

  outline: none;
  border: none;
  border-bottom: 1px solid var(--border-color);

  background-color: transparent;

  color: var(--font-color);
  font-size: 1rem;
}
</style>