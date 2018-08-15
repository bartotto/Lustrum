@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-block">
                    <img class="card-img-top" src="img\KaukasischHilarisch.jpeg" alt="Aart" height="auto" width="48">
                    <div class="card-header">
                        <h2>VIIe Lustrumreis</h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif                 
                        <div class="content">
                            <p>{{ trans('info.home_descr') }}</p>
                            <p>{{ trans('info.home_descr2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-block">
                    <img class="card-img-top" src="img/Aart.jpg" alt="Aart" style="text-align:center">
                    <div class="card-header">
                        <h2>{{ trans('info.president') }}</h2>
                    </div>
                    <div class="card-body">                 
                        <p>Bla bla bla</p>
                        <p>Bla bla bla</p>
                        <p>Bla bla bla</p>
                        <p>Bla bla bla</p>
                        <p>Bla bla bla</p>
                        <p>Bla bla bla</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-block">
                    <br>
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 6</div>
                        <img src="img\Groep\Kenia.jpg" style="width:100%">
                        <div class="text">Kenia 1989</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 6</div>
                        <img src="img\Groep\Lappland.jpg" style="width:100%">
                        <div class="text">Lappland 1994</div>
                    </div>      
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 6</div>
                        <img src="img\Groep\Cameroun.jpg" style="width:100%">
                        <div class="text">Cameroun 1999</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 6</div>
                        <img src="img\Groep\Oman.jpg" style="width:100%">
                        <div class="text">Oman 2005</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                        <img src="img\Groep\Karpaten.jpg" style="width:100%">
                        <div class="text">Karpaten 2009</div>
                    </div>
                     <div class="mySlides fade">
                        <div class="numbertext">6 / 6</div>
                        <img src="img\Groep\Dalarna.jpg" style="width:100%">
                        <div class="text">Dalarna 2014</div>
                    </div>
                    <br>
                    <br>
                    <div class="card-header">
                        <h2>{{ trans('info.past_trips') }}</h2>
                    </div>
                    <div class="card-body"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
