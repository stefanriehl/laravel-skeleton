const mix = require('laravel-mix');

require('mix-tailwindcss');
require('laravel-mix-purgecss');

mix
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
    mix
        .purgeCss()
        .version();
}
