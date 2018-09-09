@extends('layouts.app')
@section('subtitle', '| '.trans('info.map'))
@section('content')
    <div id="map"></div>
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
