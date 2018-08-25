@extends('layouts.app')
@section('subtitle', '| '.trans('info.club'))
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <div class="card-header">
                    <h2>{{ trans('info.members_list') }}</h2>
                </div>
                <div class="card-body">
                    @foreach ($users as $user)
                        <div>
                            @if(Auth::user()->user_role != 'Guide')
                                <a href="/users/{{ $user->id }}">{{ $user->first_name }} {{ $user->name }}</a>
                            @else
                                {{ $user->first_name }} {{ $user->name }}
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="card-footer text-muted">
                    @if(Auth::user()->user_role != 'Guide')
                        <p class="card-text">{{ trans('info.members_descr') }}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="card">
                <div class="card-header">
                    <h2>{{ trans('info.pictures_club') }}</h2>
                </div>
                <div class="card-body">
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
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
