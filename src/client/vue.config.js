module.exports = {
  css: {
    loaderOptions: {
      scss: {
        additionalData: `@import "~@/assets/scss/_main.scss";`
      }
    },
    },
    pluginOptions: {
    apollo: {
        lintGQL: true
    }
},
}