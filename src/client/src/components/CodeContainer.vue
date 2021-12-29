<template>
  <code-highlight :language="lang">
    <slot />
  </code-highlight>
</template>
<script>
import CodeHighlight from "vue-code-highlight/src/CodeHighlight.vue";
import "vue-code-highlight/themes/prism-okaidia.css";
import "vue-code-highlight/themes/window.css";
import "prism-es6/components/prism-markup-templating";
import "prism-es6/components/prism-json";
import "prism-es6/components/prism-graphql";

export default {
  name: "CodeContainer",
  props: {
    lang: {
      type: String,
      required: true,
    },
  },
  components: {
    CodeHighlight,
  },
};
</script>