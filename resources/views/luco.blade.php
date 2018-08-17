@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h2>{{ trans('info.luco_descr') }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ trans('info.luco_descr2') }}</p>
            <div class="mySlides fade">
                <div class="numbertext">1 / 7</div>
                <img src="img\Luco\Kenya.png" style="max-width:100%">
                <div class="text">Kenya</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 7</div>
                <img src="img\Luco\Oman.jpg" style="max-width:100%">
                <div class="text">Oman</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 7</div>
                <img src="img\Luco\Oman2.jpg" style="max-width:100%">
                <div class="text">Oman</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 7</div>
                <img src="img\Luco\Carpathians.png" style="max-width:100%">
                <div class="text">Carpathians</div>
            </div> 
            <div class="mySlides fade">
                <div class="numbertext">5 / 7</div>
                <img src="img\Luco\Carpathians.jpg" style="max-width:100%">
                <div class="text">Carpathians</div>
            </div>    
            <div class="mySlides fade">
                <div class="numbertext">6 / 7</div>
                <img src="img\Luco\Dalarna.jpg" style="max-width:100%">
                <div class="text">Dalarna</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">7 / 7</div>
                <img src="img\Luco\Dalarna2.png" style="max-width:100%">
                <div class="text">Dalarna</div>
            </div>
        </div>
        <div class="card-footer text-muted">
            Zijn ze er klaar voor om dit nog een keer waar te maken?
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
