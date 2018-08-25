@extends('layouts.app')
@section('subtitle', '| '.trans('info.luco'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Luco/Kenya.png" alt="Luco Kenya" style="width: 284px">
            <div class="card-header">
                <h2>Kenya</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{ trans('info.luco_descr2') }}</p>
            </div>
            <div class="card-footer text-muted">
                Zijn ze er klaar voor om dit nog een keer waar te maken?
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Luco/Oman.jpg" alt="Luco Oman" style="width: 284px">
            <div class="card-header">
                <h2>Oman</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{ trans('info.luco_descr3') }}</p>
            </div>
            <div class="card-footer text-muted">
                Zijn ze er klaar voor om dit nog een keer waar te maken?
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Luco/Carpathians.png" alt="Luco Carpathians" style="width: 284px">
            <div class="card-header">
                <h2>Carpathians</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{ trans('info.luco_descr4') }}</p>
            </div>
            <div class="card-footer text-muted">
                Zijn ze er klaar voor om dit nog een keer waar te maken?
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Luco/Dalarna.jpg" alt="Luco Dalarna" style="width: 284px">
            <div class="card-header">
                <h2>Dalarna</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{ trans('info.luco_descr5') }}</p>
            </div>
            <div class="card-footer text-muted">
                Zijn ze er klaar voor om dit nog een keer waar te maken?
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
