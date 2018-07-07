<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>
            #map {
                height: 400px;
                width: 100%;
                }
        </style>
    </head>
    <body>
        <h1 class="bart-kop">
            <a href="{{ route('home') }}">
                VIIe Lustrumreis Caligula
            </a>
        </h1>  
        <div id="app">
            <header>
                @include('layouts.nav')
            </header>
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.footer')
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/photo.js') }}"></script>
        <script>
            function goBack() {
            window.history.back()
            }
        </script>
        <script>
            function myMap() {
                var tbilisi = {lat: 41.717, lng: 44.827};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 6,
                    center: tbilisi,
                    mapTypeId: google.maps.MapTypeId.roadmap
                    });
                var marker = new google.maps.Marker({
                    position: tbilisi,
                    map: map
                    });
                }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3PveB9htkol0a_N0hBEEzfEzUM4B9xUY&callback=myMap">
        </script> 
    </body>
</html>
