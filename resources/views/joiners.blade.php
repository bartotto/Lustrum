@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h2>{{ trans('info.who_joins') }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($users as $user)
                    @if($user->joins)
                        <div style="float: left; width: 50%;">
                            <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="mySlides fade">
                <div class="numbertext">1 / 6</div>
                <img src="img\Groep\Kenia.jpg" style="max-width:100%">
                <div class="text">Kenia</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="img\Groep\Lappland.jpg" style="max-width:100%">
                <div class="text">Lappland</div>
            </div>      
            <div class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="img\Groep\Cameroun.jpg" style="max-width:100%">
                <div class="text">Cameroun</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="img\Groep\Oman.jpg" style="max-width:100%">
                <div class="text">Oman</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 6</div>
                <img src="img\Groep\Karpaten.jpg" style="max-width:100%">
                <div class="text">Karpaten</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="img\Groep\Dalarna.jpg" style="max-width:100%">
                <div class="text">Dalarna</div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
