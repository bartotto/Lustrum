@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="card card-block">
                    <img class="card-img-top" src="img\Kaukasus.jpg" alt="Kaukasus" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.caucasus') }}</h2>
                    </div>
                    <div class="card-body">                      
                        <h3>{{ trans('info.caucasus1') }}</h3>
                        <img src="img\Kaukasus_2.jpg" style="width:100%">
                        <h3>{{ trans('info.caucasus2') }}</h3>
                        <img src="img\Kaukasus_3.jpg" style="width:100%">
                        <h3>{{ trans('info.caucasus3') }}</h3>
                        <img src="img\Kaukasus_4.jpg" style="width:100%">
                        <h3>{{ trans('info.caucasus4') }}</h3>
                        <img src="img\Klimaat.jpg" style="width:100%">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="card card-block">
                    <img class="card-img-top" src="img\Caucasus-map.png" alt="Kaukasus map" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.map') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="map" style="width:240px;height:240px"></div>                    
                    </div>
                </div>
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
