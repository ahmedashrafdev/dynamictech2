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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'));
mix.styles(
    [
        "resources/css/vendor/bootstrap.min.css",
        "resources/css/vendor/line-awesome.min.css",
        "resources/css/vendor/animate.min.css",
        "resources/css/vendor/owl.carousel.min.css",
        "resources/css/vendor/owl.theme.default.min.css",
        "resources/css/vendor/jquery.countdown.css",
        "resources/css/vendor/jquery.fancybox.css",
        "resources/css/vendor/progresscircle.css",
        "resources/css/styles.css",
        "resources/css/mine.css"
    ],
    "public/css/all.css"
).scripts(
    [
        "resources/js/vendor/jquery-1.10.2.min.js",
        "resources/js/vendor/popper.min.js",
        "resources/js/vendor/bootstrap.min.js",
        "resources/js/vendor/owl.carousel.min.js",
        "resources/js/vendor/waypoint.min.js",
        "resources/js/vendor/jquery.counterup.min.js",
        "resources/js/vendor/isotope.js",
        "resources/js/vendor/wow.js",
        "resources/js/vendor/jquery.fancybox.min.js",
        "resources/js/vendor/progresscircle.js",
        "resources/js/vendor/smooth-scrolling.js",
        "resources/js/vendor/daterangepicker.js",
        "resources/js/vendor/tilt.jquery.min.js",
        "resources/js/main.js"
    ],
    "public/js/all.js"
);