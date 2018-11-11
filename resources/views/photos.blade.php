@extends('layouts.app')
@section('subtitle', '| '.trans('info.trips'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                Kenya 1989
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-Kenya" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                <div id="links_Kenya">
                    @php
                        $aantal = 1;
                    @endphp
                    @for($i = 1;$i <= $aantal; $i++)
                        @if(file_exists('img/Trips/Kenya/'.$i.'.jpg'))
                            @php 
                                $aantal++;
                            @endphp
                            <a href="<?php echo 'img/Trips/Kenya/'.$i.'.jpg';?>" title="{{ $i }}" data-gallery="#blueimp-gallery-Kenya"><img src="<?php echo 'img/Trips/Kenya/Thumbnails/'.$i.'.jpg';?>" alt="{{ $i }}"></a>
                       @endif
                    @endfor
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Lappland 1994
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-Lappland" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                <div id="links">
                    @php
                        $aantal = 1;
                    @endphp
                    @for($i = 1;$i <= $aantal; $i++)
                        @if(file_exists('img/Trips/Lappland/'.$i.'.jpg'))
                            @php 
                                $aantal++;
                            @endphp
                            <a href="<?php echo 'img/Trips/Lappland/'.$i.'.jpg';?>" title="{{ $i }}" data-gallery="#blueimp-gallery-Lappland"><img src="<?php echo 'img/Trips/Lappland/Thumbnails/'.$i.'.jpg';?>" alt="{{ $i }}"></a>
                       @endif
                    @endfor
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Cameroun 1999
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-Cameroun" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

                <div id="links">
                    @php
                        $aantal = 1;
                    @endphp
                    @for($i = 1;$i <= $aantal; $i++)
                        @if(file_exists('img/Trips/Cameroun/'.$i.'.jpg'))
                            @php 
                                $aantal++;
                            @endphp
                            <a href="<?php echo 'img/Trips/Cameroun/'.$i.'.jpg';?>" title="{{ $i }}" data-gallery="#blueimp-gallery-Cameroun"><img src="<?php echo 'img/Trips/Cameroun/Thumbnails/'.$i.'.jpg';?>" alt="{{ $i }}"></a>
                       @endif
                    @endfor
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Oman 2005
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-Oman" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

                <div id="links">
                    @php
                        $aantal = 1;
                    @endphp
                    @for($i = 1;$i <= $aantal; $i++)
                        @if(file_exists('img/Trips/Oman/'.$i.'.jpg'))
                            @php 
                                $aantal++;
                            @endphp
                            <a href="<?php echo 'img/Trips/Oman/'.$i.'.jpg';?>" title="{{ $i }}" data-gallery="#blueimp-gallery-Oman"><img src="<?php echo 'img/Trips/Oman/Thumbnails/'.$i.'.jpg';?>" alt="{{ $i }}"></a>
                       @endif
                    @endfor
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Carpathians 2009
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-Carpathians" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

                <div id="links">
                    @php
                        $aantal = 1;
                    @endphp
                    @for($i = 1;$i <= $aantal; $i++)
                        @if(file_exists('img/Trips/Carpathians/'.$i.'.jpg'))
                            @php 
                                $aantal++;
                            @endphp
                            <a href="<?php echo '/img/Trips/Carpathians/'.$i.'.jpg';?>" title="{{ $i }}" data-gallery="#blueimp-gallery-Carpathians"><img src="<?php echo 'img/Trips/Carpathians/Thumbnails/'.$i.'.jpg';?>" alt="{{ $i }}"></a>
                       @endif
                    @endfor
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Dalarna 2014
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-Dalarna" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

                <div id="links">
                    @php
                        $aantal = 1;
                    @endphp
                    @for($i = 1;$i <= $aantal; $i++)
                        @if(file_exists('img/Trips/Dalarna/'.$i.'.jpg'))
                            @php 
                                $aantal++;
                            @endphp
                            <a href="<?php echo 'img/Trips/Dalarna/'.$i.'.jpg';?>" title="{{ $i }}" data-gallery="#blueimp-gallery-Dalarna"><img src="<?php echo 'img/Trips/Dalarna/Thumbnails/'.$i.'.jpg';?>" alt="{{ $i }}"></a>
                       @endif
                    @endfor
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Georgia 2018
            </div>
            <div class="card-body">
                <div id="blueimp-gallery-Georgia" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

                <div id="links">
                    @php
                        $aantal = 1;
                    @endphp
                    @for($i = 1;$i <= $aantal; $i++)
                        @if(file_exists('img/Trips/Georgia/'.$i.'.jpg'))
                            @php 
                                $aantal++;
                            @endphp
                            <a href="<?php echo 'img/Trips/Georgia/'.$i.'.jpg';?>" title="{{ $i }}" data-gallery="#blueimp-gallery-Georgia"><img src="<?php echo 'img/Trips/Georgia/Thumbnails/'.$i.'.jpg';?>" alt="{{ $i }}"></a>
                       @endif
                    @endfor
                </div>
            </div>
            <div class="card-footer text-muted">
                {{ trans('info.click_picture') }}
            </div>
        </div>
    </div>
@endsection