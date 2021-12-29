<template>
  <div class="image-container">
    <img :src="img" :alt="alt" class="image-container__picture" />
  </div>
</template>

<script>
export default {
  name: "BasePicture",
  props: {
    image: {
      type: String,
      required: true,
    },
    alt: {
      type: String,
      required: true,
    },
  },
  computed: {
    img() {
      const images = require.context("@/assets/images", false);

      return images(`./${this.image}`);
    },
  },
};
</script>

<style lang="scss" scoped>
.image-container {
  width: 100%;

  &__picture {
    display: block;
    width: 100%;
    height: 100%;
  }
}
</style>