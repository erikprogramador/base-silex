let mix = require('laravel-mix')

mix.js('resources/js/app.js', 'public/js/')
   .sass('resources/sass/app.sass', 'public/css/')
   .copy('node_modules/font-awesome/fonts/**', 'public/fonts/')

