let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/admin/app.js', 'public/js/admin/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css/style.css');
   // .sass('resources/assets/sass/admin.scss', 'public/css');

mix.less('resources/assets/less/common.less', 'public/css/vendor/admin-lte.css')
    .options({
        processCssUrls: false
    });

mix.styles([
    'public/css/vendor/admin-lte.css',
    'public/css/style.css',
],  'public/css/app.css');