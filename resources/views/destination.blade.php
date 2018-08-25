@extends('layouts.app')
@section('subtitle', '| '.trans('info.destination'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Destination/Kaukasus.jpg" alt="Kaukasus" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.caucasus') }}</h2>
            </div>
            <div class="card-body">

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Destination/Kaukasus_2.jpg" alt="Kaukasus" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.caucasus1') }}</h2>
            </div>
            <div class="card-body">                      
              
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Destination/Kaukasus_3.jpg" alt="Kaukasus" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.caucasus2') }}</h2>
            </div>
            <div class="card-body">                      
               
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Destination/Kaukasus_4.jpg" alt="Kaukasus" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.caucasus3') }}</h2>
            </div>
            <div class="card-body">                      
              
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Destination/Klimaat.jpg" alt="Klimaat" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.caucasus4') }}</h2>
            </div>
            <div class="card-body">                      
              
            </div>
        </div>
        <div class="card">
            <div id="map"></div>
            <div class="card-header">
                <h2>{{ trans('info.map') }}</h2>
            </div>
            <div class="card-body">
                                    
            </div>
        </div>
    </div>
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
@endsection
