@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
         <button onclick="goBack()">
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
@endsection
