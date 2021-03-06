@extends('layouts.app')
@section('subtitle', '| '.trans('info.luco'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                {{ trans('info.luco') }}
            </div>
            <div class="card-body">
                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-start-slideshow="true">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                <div id="links">
                    <a href="img/Luco/Kenya.png" title="Kenya"><img src="img/Luco/Thumbnails/Kenya.png" alt="Kenya"></a>
                    <a href="img/Luco/Oman.jpg" title="Oman"><img src="img/Luco/Thumbnails/Oman.jpg" alt="Oman"></a>
                    <a href="img/Luco/Oman1.jpg" title="Oman"><img src="img/Luco/Thumbnails/Oman1.jpg" alt="Oman1"></a>
                    <a href="img/Luco/Oman2.jpg" title="Oman"><img src="img/Luco/Thumbnails/Oman2.jpg" alt="Oman2"></a>
                    <a href="img/Luco/Carpathians.png" title="Carpathians"><img src="img/Luco/Thumbnails/Carpathians.png" alt="Carpathians"></a>
                    <a href="img/Luco/Carpathians1.jpg" title="Carpathians"><img src="img/Luco/Thumbnails/Carpathians1.jpg" alt="Carpathians"></a>
                    <a href="img/Luco/Dalarna.jpg" title="Dalarna"><img src="img/Luco/Thumbnails/Dalarna.jpg" alt="Dalarna"></a>
                    <a href="img/Luco/Dalarna1.png" title="Dalarna"><img src="img/Luco/Thumbnails/Dalarna1.png" alt="Dalarna1"></a>
                    <a href="img/Luco/Dalarna2.jpg" title="Dalarna"><img src="img/Luco/Thumbnails/Dalarna2.jpg" alt="Dalarna2"></a>
                    <a href="img/Luco/Georgia1.jpg" title="Georgia"><img src="img/Luco/Thumbnails/Georgia1.jpg" alt="Georgia1"></a>
                    <a href="img/Luco/Georgia2.jpg" title="Georgia"><img src="img/Luco/Thumbnails/Georgia2.jpg" alt="Georgia2"></a>
                    <a href="img/Luco/Leusden1.jpg" title="Leusden"><img src="img/Luco/Thumbnails/Leusden1.jpg" alt="Leusden1"></a>
                    <a href="img/Luco/Leusden2.jpg" title="Leusden"><img src="img/Luco/Thumbnails/Leusden2.jpg" alt="Leusden2"></a>
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
    </div>
@endsection
