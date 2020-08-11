const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/publicHome.js', 'public/js/publicHome.js')
    .js('resources/js/personalInfo.js', 'public/js/personalInfo.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/publicHome.scss', 'public/css/publicHome.css')
    .js('node_modules/popper.js/dist/popper.js', 'public/js')
    .sourceMaps()
    .purgeCss();

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');