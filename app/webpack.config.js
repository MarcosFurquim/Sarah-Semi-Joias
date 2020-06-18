const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
module.exports = {
  mode: 'production',
  watch: true,
  entry:  {
    main: ['./assets/src/js/base.js','./assets/src/style/base.scss']
},
  output: {
    filename: 'script.js',
    path: path.resolve(__dirname, 'assets/dist')
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: ['babel-loader']
      },
      {
        test: /\.scss$/,
        use: [{
          loader:  MiniCssExtractPlugin.loader,
            options: {
              publicPath: '/style/dist'
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