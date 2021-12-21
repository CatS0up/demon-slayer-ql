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
  chainWebpack: config => {
    config
      .plugin('html')
      .tap(args => {
          args[0].title = "Kimetsu no Yaiba Ql";
            return args;
      })
    }
}