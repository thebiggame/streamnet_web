const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir(function(mix) {
    mix.sass('app.scss', 'public/assets/css')
    .webpack([
            'core.js',
        ], 'public/assets/js/core.js')
    .copy('node_modules/font-awesome/fonts', 'public/assets/fonts')
    .copy('node_modules/videojs-swf/dist/video-js.swf', 'public/assets/flash');

});
