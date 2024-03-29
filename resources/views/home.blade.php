<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @pwaManifest
    {{--<link rel="manifest" href="https://www.sagaz.com/pwa-manifest.json">--}}

    @include('metas')

    <title>Sagaz - Estudio Creativo Digital</title>

    <!-- Fonts -->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Muli:400,300|Montserrat|Roboto:400,300,700,900,500,100|Roboto Condensed|Raleway:100,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/packages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('css/querys.css') }}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    @stack('styles')
</head>
<body>
<div id="splashscreen">
    <img class="splashGif fixedCenter" src="/img/splash.gif" alt="Sagaz Studio - Logo Splash">
</div>
@include('mobileNav')

<div class="wrapper">
    @include('navigation')
    @include('header')
    @include('servicios')
    @include('jobs')
    @include('brands')
    @include('callToAction')
    @include('wazup')
    @include('contacto')
    @include('footer')

</div>

<!-- JavaScripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
@stack('scripts')
<script>
    if ('serviceWorker' in navigator ) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }
</script>
</body>
</html>
