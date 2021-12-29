<template functional>
  <div class="pulse-loader">
    <img
      src="@/assets/images/sabito.png"
      alt="Sabito mask."
      class="pulse-loader__icon"
    />

    <p class="pulse-loader__text">Loading</p>
  </div>
</template>

<script>
export default {
  name: "PulseLoader",
};
</script>

<style lang="scss" scoped>
.pulse-loader {
  @include flex(
    $direction: column,
    $justify-content: center,
    $align-items: center
  );

  &__icon {
    animation: pulse 0.7s ease-in-out infinite both;
  }
}

// Animations
@keyframes pulse {
  0% {
    transform: scale(0.9);
  }

  70% {
    transform: scale(1);
  }

  100% {
    transform: scale(0.9);
  }
}
</style>