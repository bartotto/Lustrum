@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h2>{{ trans('info.luco_descr') }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ trans('info.luco_descr2') }}</p>
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="img\Luco\Kenya.png" style="max-width:100%">
                <div class="text">Kenya</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="img\Luco\Oman.jpg" style="max-width:100%">
                <div class="text">Oman</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="img\Luco\Oman2.jpg" style="max-width:100%">
                <div class="text">Oman</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="img\Luco\Carpathians.png" style="max-width:100%">
                <div class="text">Carpathians</div>
            </div> 
            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="img\Luco\Carpathians1.jpg" style="max-width:100%">
                <div class="text">Carpathians</div>
            </div>    
            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="img\Luco\Dalarna.jpg" style="max-width:100%">
                <div class="text">Dalarna</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="img\Luco\Dalarna1.png" style="max-width:100%">
                <div class="text">Dalarna</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
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
