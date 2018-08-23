@extends('layouts.app')
@section('subtitle', '| '.trans('info.joiners'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-block">
                    <div class="card-header">
                        <h2>{{ trans('info.who_joins') }}</h2>
                    </div>
                    <div class="card-body">
                        @foreach ($users as $user)
                            @if($user->joins)
                                <div>
                                    @if(!Auth::user()->user_role = 'Guide')
                                        <a href="/users/{{ $user->id }}">{{ $user->first_name }} {{ $user->name }}</a>
                                    @else
                                        {{ $user->first_name }} {{ $user->name }}
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-footer text-muted">
                        <p class="card-text">{{ trans('info.members_descr') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="card card-block">
                    <div class="card-header">
                        <h2>De beroemde Matrix</h2>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <img src="img/Other/Matrix.png" style="max-width:100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="card card-block">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="mySlides fade">
                                <div class="numbertext">1 / 6</div>
                                <img src="img/Groep/Kenya.jpg" style="max-width:100%">
                                <div class="text">Kenya 1989</div>
                            </div>
                            <div class="mySlides fade">
                                <div class="numbertext">2 / 6</div>
                                <img src="img/Groep/Lappland.jpg" style="max-width:100%">
                                <div class="text">Lappland 2004</div>
                            </div>      
                            <div class="mySlides fade">
                                <div class="numbertext">3 / 6</div>
                                <img src="img/Groep/Cameroun.jpg" style="max-width:100%">
                                <div class="text">Cameroun 2009</div>
                            </div>
                            <div class="mySlides fade">
                                <div class="numbertext">4 / 6</div>
                                <img src="img/Groep/Oman.jpg" style="max-width:100%">
                                <div class="text">Oman 2005</div>
                            </div>
                            <div class="mySlides fade">
                                <div class="numbertext">5 / 6</div>
                                <img src="img/Groep/Carpathians.jpg" style="max-width:100%">
                                <div class="text">Carpathians 2009</div>
                            </div>
                            <div class="mySlides fade">
                                <div class="numbertext">6 / 6</div>
                                <img src="img/Groep/Dalarna.jpg" style="max-width:100%">
                                <div class="text">Dalarna 2014</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
