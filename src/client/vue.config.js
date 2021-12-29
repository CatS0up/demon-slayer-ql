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
      lintGQL: false
    }
  },
  chainWebpack: config => {
    config
      .plugin('html')
      .tap(args => {
          args[0].title = process.env.APP_NAME;
            return args;
      })
    }
}