var webpack = require('webpack');
module.exports = {
    resolve: {
        alias: {
            'webworkify$': 'webworkify-webpack-dropin',
            'video.js$': 'video.js/dist/video.cjs.js',
            'videojs-contrib-hls': 'videojs-contrib-hls/dist/videojs-contrib-hls',
        },
    },
    plugins: [
    // Make videojs global
    new webpack.ProvidePlugin({
      videojs: 'video.js',
      'window.videojs': 'video.js',
    }),

    // Fix UglifyJsPlugin global
    new webpack.DefinePlugin({
      'typeof global': JSON.stringify('undefined'),
    }),
  ],
}