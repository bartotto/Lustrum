@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button class="btn btn-primary" onclick="goBack()">
            {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ $trip->destination }} ({{ $trip->year }})</h2>
            </div>
            <div class="panel-body">
                @php
                    $aantal = 1;
                @endphp
                @for($i = 1;$i <= $aantal; $i++)
                    @if(file_exists('img/'.$trip->destination.'/'.$i.'.jpg'))
                        @php 
                            $aantal++;
                        @endphp
                        <div class="mySlides fade">
                            <img src="<?php echo '/img/'.$trip->destination.'/'.$i.'.jpg';?>" style="width:100%">
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </div>
@endsection