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
                            <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
                        @endforeach
                    </ol>
                </div>
                <div class="panel-body">            
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 4</div>
                    <img src="img\Groep\Kenia.jpg" style="width:100%">
                    <div class="text">Kenia</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <img src="img\Groep\Lappland.jpg" style="width:100%">
                    <div class="text">Oman</div>
                </div>      

                <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="img\Groep\Cameroun.jpg" style="width:100%">
                    <div class="text">Karpaten</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="img\Groep\Oman.jpg" style="width:100%">
                    <div class="text">Zweden</div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
