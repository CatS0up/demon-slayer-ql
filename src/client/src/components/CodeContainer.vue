<template>
  <code-highlight language="json">
   
      <slot/>
  
  </code-highlight>
</template>
<script>
import CodeHighlight from "vue-code-highlight/src/CodeHighlight.vue";
import "vue-code-highlight/themes/duotone-sea.css";
import "vue-code-highlight/themes/window.css";
import "prism-es6/components/prism-markup-templating";
import "prism-es6/components/prism-json";

export default {
  name: "CodeContainer",
  components: {
    CodeHighlight,
  },
};
</script>