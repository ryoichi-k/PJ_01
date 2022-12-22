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
// var HardSourceWebpackPlugin = require("hard-source-webpack-plugin");

// module.exports = {
//     plugins: [new HardSourceWebpackPlugin()],
// };
// mix.webpackConfig({
//     watchOptions: {
//         ignored: /node_modules/
//     },
// });

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        //
    ])
    .vue();
// .sass("resources/sass/app.scss", "public/css");
