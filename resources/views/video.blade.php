@extends('layouts.app')
@section('subtitle', '| '.trans('info.trips'))
@section('content')
    <div id="blueimp-gallery-Video" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <div>
        <a href="img/Videos/Lustrumreis_clip1.mp4" title="" data-gallery="#blueimp-gallery-Video"><img src="img/Videos/Lustrumreis_clip1.mp4" alt=""></a>
    </div>
@endsection