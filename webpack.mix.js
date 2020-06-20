const mix = require('laravel-mix');

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

mix
    .js('resources/js/custom-front.js', 'public/js')
    .js('resources/js/custom-admin.js', 'public/js')
    .js('resources/js/custom-user.js', 'public/js')
    .sass('resources/sass/custom-front.scss', 'public/css')
    .sass('resources/sass/custom-user.scss', 'public/css')
    .sass('resources/sass/custom-admin.scss', 'public/css');
