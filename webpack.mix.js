let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


// CSS
mix.styles([
    'bower_components/font-awesome/css/font-awesome.min.css',
    'bower_components/FullscreenOverlayStyles/css/normalize.css',
    'bower_components/paper-bootstrapTemplate/clean.css',
    'bower_components/inspiration/bluefountainmedia.css',
    'bower_components/material/css/perfect.css',
    'bower_components/s/css/perfect.css',
    'bower_components/sweetalert2/dist/sweetalert2.css',
    'bower_components/sweetalert2/dist/materialTheme.css',
    'bower_components/FullscreenOverlayStyles/css/style1.css',
    'bower_components/coolHamburger/hamb.css',
    // 'bower_components/inspiration/litebreeze.css',
], 'public/css/packages.css');

//Scripts
mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/FullscreenOverlayStyles/js/modernizr.custom.js',
    'bower_components/FullscreenOverlayStyles/js/classie.js',
    'bower_components/FullscreenOverlayStyles/js/demo1.js',
    'bower_components/material/js/perfect-scrollbar.jquery.min.js',
    'bower_components/canvas-video-player/videoPlayer.js',
    'bower_components/hover3d-master/dist/js/jquery.hover3d.min.js',
    'bower_components/ParticleEffectsButtons/js/anime.min.js',
    'bower_components/ParticleEffectsButtons/js/particles.js',
    'bower_components/sweetalert2/dist/sweetalert2.min.js',
    // 'bower_components/bubbles/sketch.min.js',
    // 'bower_components/bubbles/bubbles.js',
], 'public/js/all.js');
