<template>
  <a
    :href="destination"
    class="link"
    :class="{ 'link--decorated': isDecorated }"
  >
    <slot />
  </a>
</template>

<script>
export default {
  name: "BaseLink",
  props: {
    destination: String,
    isDecorated: {
      type: Boolean,
      default: false,
      required: false,
    },
  },
};
</script>