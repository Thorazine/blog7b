const mix = require('laravel-mix');

mix.scripts([
	'resources/js/main.js',
	'node_modules/jquery/dist/jquery.min.js',
	'node_modules/bootstrap/dist/js/bootstrap.min.js'
], 'public/js/app.js')

   .sass('resources/sass/app.scss', 'public/css')
   .browserSync('localhost');



