const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
var LiveReloadPlugin = require('webpack-livereload-plugin');


mix.js('resources/js/app.js', 'public/js').sass('resources/scss/app.scss', 'public/css');

// mix.browserSync({
//     proxy:'http://laraberg.test'
// })
