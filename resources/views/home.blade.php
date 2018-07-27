@extends('layouts.app')

<!-- Styles-->
<link href="{{ asset('css/style.css') }}" rel="stylesheet"> 

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ trans('info.home_descr') }}</h2>
                {{ trans('info.home_descr2') }}
            </div>
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif                 
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 5</div>
                    <img src="img\KaukasischHilarisch.jpeg" style="width:100%">
                    <div class="text">Georgie</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 5</div>
                    <img src="img\Groep\Kenia.jpg" style="width:100%">
                    <div class="text">Kenia</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 5</div>
                    <img src="img\Groep\Lappland.jpg" style="width:100%">
                    <div class="text">Oman</div>
                </div>      
                <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="img\Groep\Cameroun.jpg" style="width:100%">
                    <div class="text">Karpaten</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="img\Groep\Oman.jpg" style="width:100%">
                    <div class="text">Zweden</div>
                </div>
                <hr>
                <div class="content">
                    <h3>{{ trans('info.home_descr3') }}</h3>
                </div> 
            </div>
        </div>
    </div>
@endsection
