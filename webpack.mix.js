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
    .scripts('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bootstrap-bundle.js')

    .js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/menu_lateral.js', 'public/js/menu_lateral.js')
    .js('resources/views/admin/js/admin_role.js', 'public/js/admin_role.js')
    .js('resources/views/admin/js/admin_produto.js', 'public/js/admin_produto.js')

    .sass('resources/sass/app.scss', 'public/css/bootstrap-sass.css')

    .css('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css/bootstrap.css')
    .css('resources/css/app.css', 'public/css/app.css')
    .css('resources/css/header.css', 'public/css/header.css')
    .css('resources/css/login.css', 'public/css/login.css')
    .css('resources/css/menu.css', 'public/css/menu.css')
    .css('resources/views/admin/css/admin_role.css', 'public/css/admin_role.css')
    .css('resources/views/admin/css/admin_home.css', 'public/css/admin_home.css')
    .css('resources/views/admin/css/admin_produto.css', 'public/css/admin_produto.css')
    .sourceMaps()

    .browserSync('localhost:8000');
