<template>
  <div class="character-list">
    <character-card v-for="n in 20" :key="n" />
  </div>
</template>

<script>
import CharacterCard from "@/components/CharacterCard.vue";

export default {
  name: "CharacterList",
  components: { CharacterCard },
};
</script>

<style lang="scss" scoped>
.character-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(auto, 325px));
  grid-auto-rows: 500px;
  justify-content: center;
  margin: 1rem;
  gap: 2rem;

  min-height: auto;
}
</style>