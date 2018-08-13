@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('packlist') }}">{{ trans('info.pack_list') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('prep_other') }} ">{{ trans('info.prep_other') }}</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">In ieder geval meenemen</h5>
            <p class="card-text">De gids zorgt voor tenten en matrassen</p>
            <ul style="list-style-type:none">
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
            </ul>
        </div>
        <div class="card-footer text-muted">
            <img id="Mamuko_son" src="img/Mamuko_son.jpg" width="30%" height="auto">
            <h5>Mamuko's son</h5>
        </div>
    </div>
@endsection
