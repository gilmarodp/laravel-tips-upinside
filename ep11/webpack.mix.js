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

	.sass('resources/views/scss/style.scss', 'public/site/style.css')

	.scripts('node_modules/jquery/dist/jquery.min.js', 'public/site/jquery.min.js')
	.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/site/bootstrap.min.js');