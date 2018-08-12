@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ trans('info.members_list') }}</h2>
                {{ trans('info.members_descr') }}
            </div>
            <div class="panel-body">
                <div class="row">
                    <ol>
                        @foreach ($users as $user)
                            <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
                        @endforeach
                    </ol>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">1 / 8</div>
                    <img src="img\1_Jaarclub_Rdam.jpg" style="width:100%">
                    <div class="text">Rotterdam 1983</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 8</div>
                    <img src="img\2_Kenia_vuur.jpg" style="width:100%">
                    <div class="text">Kenia 1989</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 8</div>
                    <img src="img\3_Cameroun_voetbal.jpg" style="width:100%">
                    <div class="text">Cameroun 1999</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 8</div>
                    <img src="img\4_De_Herten.jpg" style="width:100%">
                    <div class="text">De Herten later</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 8</div>
                    <img src="img\5_Oman_kamelen.jpg" style="width:100%">
                    <div class="text">Oman 2005</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">6 / 8</div>
                    <img src="img\6_Karpaten_brug.jpg" style="width:100%">
                    <div class="text">Karpaten 2009</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">7 / 8</div>
                    <img src="img\7_Karpaten_bad.jpg" style="width:100%">
                    <div class="text">Karpaten 2009</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">8 / 8</div>
                    <img src="img\8_Karpaten_mevrouw.jpg" style="width:100%">
                    <div class="text">Karpaten 2009</div>
                </div>
            </div>
        </div>
    </div>
@endsection
