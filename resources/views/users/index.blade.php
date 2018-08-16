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
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="img\Club\1_Jaarclub_Rdam.jpg" style="width:100%">
                <div class="text">Rotterdam 1983</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="img\Club\2_Kenia_vuur.jpg" style="width:100%">
                <div class="text">Kenya 1989</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="img\Club\3_Cameroun_voetbal.jpg" style="width:100%">
                <div class="text">Cameroun 1999</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="img\Club\4_De_Herten.jpg" style="width:100%">
                <div class="text">De Herten later</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="img\Club\5_Oman_kamelen.jpg" style="width:100%">
                <div class="text">Oman 2005</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="img\Club\6_Karpaten_brug.jpg" style="width:100%">
                <div class="text">Carpathians 2009</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="img\Club\7_Karpaten_bad.jpg" style="width:100%">
                <div class="text">Carpathians 2009</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="img\Club\8_Karpaten_mevrouw.jpg" style="width:100%">
                <div class="text">Carpathians 2009</div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
