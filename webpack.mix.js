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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
    'resources/views/empresas/css/style.css',
], 'public/site/css/style.css')

    .scripts(['resources/views/empresas/js/script.js'], 'public/site/js/script.js')

    .scripts(['resources/views/empresas/js/mask.js'], 'public/site/js/mask.js')

    .version();
