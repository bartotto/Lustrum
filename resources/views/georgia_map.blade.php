@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
         <button class="btn btn-primary" onclick="goBack()">
           {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    {{ trans('info.caucasus') }}
                </h2>
            </div>
            <div class="panel-body">
                <div id="map" style="width:720px;height:720px;background:yellow"></div>
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
