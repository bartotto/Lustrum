@extends('layouts.app')
@section('subtitle', '| '.trans('info.club'))
@section('content')
    <div class="card-columns">
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
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.pictures_club') }}</h2>
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-club" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                <div id="links">
                    <a href="img\Club\Jaarclub_Rdam.jpg" title="Rotterdam 1983" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Jaarclub_Rdam.jpg" alt="Rotterdam 1983"></a>
                    <a href="img\Club\Kenya_vuur.jpg" title="Kenya 1989" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Kenya_vuur.jpg" alt="Kenya 1989"></a>
                    <a href="img\Club\Cameroun_voetbal.jpg" title="Cameroun 1999" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Cameroun_voetbal.jpg" alt="Cameroun 1999"></a>
                    <a href="img\Club\De_Herten.jpg" title="De Herten later" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\De_Herten.jpg" alt="De Herten later"></a>
                    <a href="img\Club\Oman_kamelen.jpg" title="Oman 2005" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Oman_kamelen.jpg" alt="Oman 2005"></a>
                    <a href="img\Club\Carpathians_brug.jpg" title="Carpathians 2009" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Carpathians_brug.jpg" alt="Carpathians 2009"></a>
                    <a href="img\Club\Carpathians_bad.jpg" title="Carpathians 2009" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Carpathians_bad.jpg" alt="Carpathians 2009"></a>
                    <a href="img\Club\Hangbrug.jpg" title="16 april 2011" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Hangbrug.jpg" alt="16 april 2011"></a>
                    <a href="img\Club\Carpathians_mevrouw.jpg" title="Carpathians 2009" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Carpathians_mevrouw.jpg" alt="Carpathians 2009"></a>
                    <a href="img\Club\Dalarna_trek.jpg" title="Dalarna 2014" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Dalarna_trek.jpg" alt="Dalarna 2014"></a>
                    <a href="img\Club\Dalarna_camp.jpg" title="Dalarna 2014" data-gallery="#blueimp-gallery-club"><img src="img\Club\Thumbnails\Dalarna_camp.jpg" alt="Dalarna 2014"></a>
                </div>
            </div>
        </div>
    </div>
@endsection
