@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h2>{{ trans('info.luco_descr') }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ trans('info.luco_descr2') }}</p>
            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="img\Luco_Kenia.png" style="width:100%">
                <div class="text">Kenia</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="img\Luco_Oman.jpg" style="width:100%">
                <div class="text">Oman</div>
            </div>      
            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="img\Luco_Karpaten.png" style="width:100%">
                <div class="text">Karpaten</div>
            </div> 
            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="img\Luco_Karpaten2.JPG" style="width:100%">
                <div class="text">Karpaten</div>
            </div>    
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                 <img src="img\Luco_Zweden.png" style="width:100%">
                <div class="text">Zweden</div>
            </div>
        </div>
        <div class="card-footer text-muted">
            Zijn ze er klaar voor om dit nog een keer waar te maken?
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
