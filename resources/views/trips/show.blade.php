@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button onclick="goBack()">
           {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ $trip->destination }}</h2>
                <h3>{{ $trip->year }}</h3>
            </div>
                     
            <div class="panel-body">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 2</div>
                    <img src="\img\Kenia\Luco_Kenia.png" style="width:100%">
                    <div class="text">Luco</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <img src="\img\Kenia\Kenia_vuur.jpg" style="width:100%">
                    <div class="text">Vuurtje</div>
                </div>      
            </div>
        </div>
    </div>
@endsection
