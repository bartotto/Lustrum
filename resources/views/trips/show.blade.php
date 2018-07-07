@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ $trip->destination }}</h2>
                <h3>{{ $trip->year }}</h3>
            </div>
            <button onclick="goBack()">
                {{ trans('info.back') }}
            </button>
            <div class="panel-body">
                <div class="mySlides fade">
                    <img src="\img\{{ $trip->destination }}\1.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="\img\{{ $trip->destination }}\2.jpg" style="width:100%">
                </div>      
                <div class="mySlides fade">
                    <img src="\img\{{ $trip->destination }}\3.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="\img\{{ $trip->destination }}\4.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="\img\{{ $trip->destination }}\5.jpg" style="width:100%">
                </div>  
            </div>
        </div>
    </div>
@endsection
