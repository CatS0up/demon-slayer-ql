<template>
  <section class="hello-section">
    <div class="hello-section_image-container">
      <img src="@/assets/images/giyu.png" alt="Giyu Tomioka chibi art." />
    </div>

    <code-container class="hello-section__code-container">
      <pre>
          {
              "name": "Giyu Tomioka",
              "race": "human",
              "gender": "male",
              "occupation": "water hashira",
              "breathingStyle": "water"
              "affiliations": [
                0: "Demon Slayer Corps",
                1: "Hashira"
              ]
          }
          </pre
      >
    </code-container>
  </section>
</template>

<script>
import CodeContainer from "@/components/CodeContainer.vue";

export default {
  name: "StartHelloSection",
  components: {
    CodeContainer,
  },
};
</script>

<style lang="scss" scoped>
.hello-section {
  display: flex;
  flex-direction: column;
  align-items: center;

  @include media(medium) {
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    order: 1;
  }

  &__code-container {
    max-width: 500px;

    @include media(medium) {
      padding-left: 3rem;
    }
  }
}
</style>