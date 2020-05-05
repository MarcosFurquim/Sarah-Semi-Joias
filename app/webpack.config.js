const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
module.exports = {
  entry:  {
    main: ['./js/src/base.js','./style/scss/base.scss']
},
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'js/dist')
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [{
          loader:  MiniCssExtractPlugin.loader,
            options: {
              publicPath: path.resolve(__dirname, 'style/dist')
            }
          }
           ,
            'css-loader', 
            'sass-loader',
        ],
      },
    ],
  },
  plugins: [
      new MiniCssExtractPlugin({
          filename: 'style.css',
          chunkFilename: '[id].css'
        })
  ]
};