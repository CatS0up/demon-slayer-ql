<template>
  <section class="hello-section">
    <div class="hello-section__image-container">
      <base-picture
        image="giyu.png"
        alt="Giyu Tomioka chibi art."
        class="hello-section__image-container"
      />
    </div>

    <code-container lang="json" class="hello-section__code-container">
      <pre>
          {
              "name": "Giyu Tomioka",
              "race": "Human",
              "gender": "Male",
              "age": 21,
              "occupation": "Water Hashira",
          }
          </pre
      >
    </code-container>
  </section>
</template>

<script>
import BasePicture from "@/primitives/BasePicture.vue";
import CodeContainer from "@/components/CodeContainer.vue";

export default {
  name: "StartHelloSection",
  components: {
    CodeContainer,
    BasePicture,
  },
};
</script>

<style lang="scss" scoped>
.hello-section {
  display: flex;
  flex-direction: column;
  align-items: center;

  padding-bottom: 4rem;

  @include media(medium) {
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    order: 1;
  }

  @include media(large) {
    align-items: center;
    padding-bottom: 0;
  }

  &__image-container {
    max-width: 140px;

    margin-top: 2rem;
  }

  &__code-container {
    max-width: 500px;

    margin-top: 2rem;

    @include media(medium) {
      padding-left: 3rem;
    }
  }
}
</style>