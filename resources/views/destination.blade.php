@extends('layouts.app')
@section('subtitle', '| '.trans('info.slides'))
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <img class="card-img-top" src="img/Destination/Kaukasus.jpg" alt="Kaukasus">
                <div class="card-header">
                    {{ trans('info.caucasus') }}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/Destination/Kaukasus_2.jpg" alt="Kaukasus">
                <div class="card-header">
                    {{ trans('info.caucasus1') }}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/Destination/Kaukasus_3.jpg" alt="Kaukasus">
                <div class="card-header">
                    {{ trans('info.caucasus2') }}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/Destination/Kaukasus_4.jpg" alt="Kaukasus">
                <div class="card-header">
                    {{ trans('info.caucasus3') }}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/Destination/Klimaat.jpg" alt="Klimaat">
                <div class="card-header">
                    {{ trans('info.caucasus4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
