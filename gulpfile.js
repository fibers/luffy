var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {

    mix.copy('node_modules/bootstrap/dist/css/bootstrap.css', 'resources/assets/css/bootstrap.css')
        .copy('node_modules/bootstrap/dist/css/bootstrap-theme.css', 'resources/assets/css/bootstrap-theme.css')
        .copy('node_modules/bootstrap/dist/js/bootstrap.js', 'resources/assets/js/bootstrap.js')

        .styles([
            'bootstrap.css',
            'bootstrap-theme.css',
        ])

        .scripts([
            'bootstrap.js',
        ]);
});
