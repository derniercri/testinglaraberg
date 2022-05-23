const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss'); /* Add this line at the top */

const LiveReloadPlugin = require('webpack-livereload-plugin');

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



mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css/app.css')
    .react()
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version();

// mix.browserSync({
//     proxy:'http://laraberg.test'
// })
