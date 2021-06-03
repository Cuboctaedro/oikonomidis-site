const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.setPublicPath("assets");

mix.js('src/js/app.js', 'assets/').sass("src/scss/app.scss", "assets/")
.options({
    postCss: [ tailwindcss('./tailwind.config.js') ],
})
.version();
