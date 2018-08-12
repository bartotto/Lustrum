@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ trans('info.who_joins') }}</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <ol>
                        @foreach ($users as $user)
                            @if($user->joins)
                                <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
                            @endif
                        @endforeach
                    </ol>
                </div>
                <div class="panel-body">            
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img src="img\Groep\Kenia.jpg" style="width:100%">
                    <div class="text">Kenia</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img src="img\Groep\Lappland.jpg" style="width:100%">
                    <div class="text">Lappland</div>
                </div>      
                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img src="img\Groep\Cameroun.jpg" style="width:100%">
                    <div class="text">Cameroun</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img src="img\Groep\Oman.jpg" style="width:100%">
                    <div class="text">Oman</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img src="img\Groep\Karpaten.jpg" style="width:100%">
                    <div class="text">Karpaten</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <img src="img\Groep\Dalarna.jpg" style="width:100%">
                    <div class="text">Dalarna</div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
