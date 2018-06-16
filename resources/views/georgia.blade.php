@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    {{ trans('info.caucasus') }}
                </h2>
                <a href="{{ route('georgia_map') }}">
                    {{ trans('info.map') }}
                </a>
            </div>
            <div class="panel-body">
                <h3>{{ trans('info.caucasus1') }}</h3>
                <img src="img\Kaukasus.jpg" style="width:100%">
                <h3>{{ trans('info.caucasus2') }}</h3>
                <img src="img\Kaukasus_2.jpg" style="width:100%">
                <h3>{{ trans('info.caucasus3') }}</h3>
                <img src="img\Kaukasus_3.jpg" style="width:100%">
                <h3>{{ trans('info.caucasus4') }}</h3>
                <img src="img\Kaukasus_4.jpg" style="width:100%">
                <h3>{{ trans('info.caucasus5') }}</h3>
                <img src="img\Klimaat.jpg" style="width:100%">
            </div>
        </div>
    </div>
@endsection
