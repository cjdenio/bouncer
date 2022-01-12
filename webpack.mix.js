const mix = require("laravel-mix");

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

mix.coffee("resources/js/app.coffee", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .sourceMaps(true)
    .disableNotifications();

if (mix.inProduction()) {
    mix.version();
}
