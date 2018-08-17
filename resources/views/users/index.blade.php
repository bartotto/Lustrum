@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <h2>{{ trans('info.members_list') }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ trans('info.members_descr') }}</p>
            <div class="row">
                @foreach ($users as $user)
                    <div style="float: left; width: 50%;">
                        <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                    </div>
                @endforeach
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 11</div>
                    <img src="img\Club\Jaarclub_Rdam.jpg" style="width:100%">
                    <div class="text">Rotterdam 1983</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 11</div>
                    <img src="img\Club\Kenya_vuur.jpg" style="width:100%">
                    <div class="text">Kenya 1989</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 11</div>
                    <img src="img\Club\Cameroun_voetbal.jpg" style="width:100%">
                    <div class="text">Cameroun 1999</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 11</div>
                    <img src="img\Club\De_Herten.jpg" style="width:100%">
                    <div class="text">De Herten later</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 11</div>
                    <img src="img\Club\Oman_kamelen.jpg" style="width:100%">
                    <div class="text">Oman 2005</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">6 / 11</div>
                    <img src="img\Club\Carpathians_brug.jpg" style="width:100%">
                    <div class="text">Carpathians 2009</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">7 / 11</div>
                    <img src="img\Club\Carpathians_bad.jpg" style="width:100%">
                    <div class="text">Carpathians 2009</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">8 / 11</div>
                    <img src="img\Club\Hangbrug.jpg" style="width:100%">
                    <div class="text">16 april 2011</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">9 / 11</div>
                    <img src="img\Club\Carpathians_mevrouw.jpg" style="width:100%">
                    <div class="text">Carpathians 2009</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">10 / 11</div>
                    <img src="img\Club\Dalarna_trek.jpg" style="width:100%">
                    <div class="text">Dalarna 2014</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">11 / 11</div>
                    <img src="img\Club\Dalarna_camp.jpg" style="width:100%">
                    <div class="text">Dalarna 2014</div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
