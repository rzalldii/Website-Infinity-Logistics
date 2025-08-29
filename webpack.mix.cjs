let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .css('resources/css/app.css', 'public/css')
   .minify('public/js/app.js')
   .minify('public/css/app.css');

mix.version();