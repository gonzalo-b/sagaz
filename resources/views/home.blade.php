<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{--@pwaManifest--}}
    @include('metas')

    <title>Sagaz - Estudio Creativo Digital</title>

    <!-- Fonts -->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Muli:400,300|Montserrat|Roboto:400,300,700,900,500,100|Roboto Condensed|Raleway:100,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/packages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('css/querys.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<div class="wrapper">
    @include('navigation')
    @include('header')
    @include('servicios')
    @include('jobs')
    @include('brands')
    @include('callToAction')
    @include('contacto')
    @include('footer')
</div>

<!-- JavaScripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')

</body>
</html>
