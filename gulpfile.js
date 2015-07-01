process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

elixir(function (mix) {

    mix.sass('app.scss');

    mix.scripts(["vendor/bower/modernizr/modernizr.js"], 'public/js/modernizr.js', './');
    mix.scripts([
        "vendor/bower/jquery/dist/jquery.js",
        "vendor/bower/fastclick/lib/fastclick.js",
        "vendor/bower/jquery.cookie/jquery.cookie.js",
        "vendor/bower/jquery-placeholder/jquery.placeholder.js",
        "vendor/bower/bootstrap-sass/assets/javascripts/bootstrap.min.js",
    ], 'public/js/vendor.js', './');

    mix.scripts([
        "resources/assets/js/**/*.js",
    ], 'public/js/app.js', './');

});
