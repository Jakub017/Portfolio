let mix = require('laravel-mix');

mix.sass('resources/scss/app.scss', 'public/css/app.css')
    .options({
        processCssUrls: false
    });
