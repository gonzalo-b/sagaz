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
    'bower_components/SplashScreen/Css/jquery.SplashScreen.css',
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
    'bower_components/SplashScreen/Scripts/jquery.SplashScreen.js',
    // 'bower_components/bubbles/sketch.min.js',
    // 'bower_components/bubbles/bubbles.js',
], 'public/js/all.js');


var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');
mix.webpackConfig({
    plugins: [
        new SWPrecacheWebpackPlugin({
            cacheId: 'pwa',
            filename: 'service-worker.js',
            staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
            minify: true,
            stripPrefix: 'public/',
            handleFetch: true,
            dynamicUrlToDependencies: { //you should add the path to your blade files here so they can be cached
                '/': ['resources/views/home.blade.php'],
            },
            staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
            navigateFallback: '/',
            runtimeCaching: [
                {
                    urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
                    handler: 'cacheFirst'
                },
                {
                    urlPattern: /^https:\/\/www\.escortscomodoro\.com\/img\/logo\/(\w+)\.png]/,
                    handler: 'cacheFirst'
                }
            ],
            // importScripts: ['./js/push_message.js']
        })
    ]
});