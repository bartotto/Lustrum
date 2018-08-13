@extends('layouts.app')

@section('content')
    <div class="card w-75 text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kenia') }}">Kenia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lappland') }} ">Lappland</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cameroun') }} ">Cameroun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('oman') }} ">Oman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('karpaten') }} ">Karpaten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dalarna') }} ">Dalarna</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            @php
                $aantal = 1;
            @endphp
            @for($i = 1;$i <= $aantal; $i++)
                @if(file_exists('img/Karpaten/'.$i.'.jpg'))
                    @php 
                        $aantal++;
                    @endphp
                    <div class="mySlides fade">
                        <img src="<?php echo '/img/Karpaten/'.$i.'.jpg';?>" style="width:100%">
                        <div class="numbertext">{{ $i }}</div>
                    </div>
                @endif
            @endfor
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection