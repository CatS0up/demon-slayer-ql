<template>
  <a :href="destination" class="link">
    <slot />
  </a>
</template>

<script>
export default {
  name: "BaseLink",
  props: {
    destination: String,
  },
};
</script>