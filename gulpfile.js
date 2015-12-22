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
        .copy('node_modules/font-awesome/css/font-awesome.css', 'resources/assets/css/font-awesome.css')
        .copy('node_modules/bootstrap/dist/js/bootstrap.js', 'resources/assets/js/bootstrap.js')
        .copy('node_modules/jquery/dist/jquery.js', 'resources/assets/js/jquery.js')
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts');

    mix.sass('main.scss').
        styles([
            'bootstrap.css',
            'font-awesome.css'
        ])
        .scripts(['jquery.js', 'bootstrap.js', 'main.js']);

    mix.version([
        'css/all.css',
        'css/main.css',
        'js/all.js'
    ]);

    mix.browserSync({
        proxy: 'localhost:8000'
    });
});
