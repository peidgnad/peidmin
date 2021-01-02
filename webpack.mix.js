const mix = require('laravel-mix')

require('laravel-mix-purgecss')

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

mix.options({
    terser: {
        extractComments: false,
        terserOptions: {
            compress: {
                drop_console: true,
            },
        },
    },
})
    .setPublicPath('public')
    .setResourceRoot('/vendor/peidmin')
    .js('resources/js/app.js', 'public')
    .extract(['lodash', 'popper.js', 'jquery', 'bootstrap', 'admin-lte'])
    .sass('resources/scss/app.scss', 'public')
    .version()
    .sourceMaps(!mix.inProduction())
    .webpackConfig({
        module: {
            rules: [
                {
                    enforce: 'pre',
                    test: /\.(js)$/,
                    loader: 'eslint-loader',
                    exclude: /node_modules/,
                    options: {
                        fix: true,
                    },
                },
            ],
        },
    })
    .purgeCss()
