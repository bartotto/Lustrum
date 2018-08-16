@extends('layouts.app')

@section('content')
    <div class="card w-75 text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kenya') }}">Kenya<br>1989</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lappland') }} ">Lappland<br>1994</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cameroun') }} ">Cameroun<br>1999</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('oman') }} ">Oman<br>2005</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('carpathians') }} ">Carpathians<br>2009</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dalarna') }} ">Dalarna<br>2014</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('georgia') }} ">Georgia<br>2018</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            @php
                $aantal = 1;
            @endphp
            @for($i = 1;$i <= $aantal; $i++)
                @if(file_exists('img/Georgie/'.$i.'.jpg'))
                    @php 
                        $aantal++;
                    @endphp
                    <div class="mySlides fade">
                        <img src="<?php echo '/img/Georgie/'.$i.'.jpg';?>" style="width:80%">
                        <div class="numbertext">{{ $i }}</div>
                    </div>
                @endif
            @endfor
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection