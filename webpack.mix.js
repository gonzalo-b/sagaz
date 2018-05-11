let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


// CSS
mix.styles([
    'bower_components/font-awesome/css/font-awesome.min.css',
    'bower_components/paper-bootstrapTemplate/clean.css',
    'bower_components/inspiration/bluefountainmedia.css',
    'bower_components/material/css/perfect.css',
    // 'bower_components/inspiration/litebreeze.css',
], 'public/css/packages.css');

//Scripts
mix.scripts([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/material/js/perfect-scrollbar.jquery.min.js',
    'bower_components/canvas-video-player/videoPlayer.js',
    'bower_components/canvas-video-player/videoPlayer.js',
    'bower_components/hover3d-master/dist/js/jquery.hover3d.min.js',
    'bower_components/ParticleEffectsButtons/js/anime.min.js',
    'bower_components/ParticleEffectsButtons/js/particles.js',
], 'public/js/all.js');
