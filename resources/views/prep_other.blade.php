@extends('layouts.app')

@section('content')
    <div class="card" style="width: 20rem;">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('packlist') }}">{{ trans('info.pack_list') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('prep_other') }} ">{{ trans('info.prep_other') }}</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Zorg dat je goed voorbereid op reis gaat.</h5>
            <p class="card-text">Regel daarom de volgende zaken asap alsjeblieft:</p>
            <ol>
                <li>Zorg dat jouw paspoort (bij aankomst) nog 3 maanden geldig is. Voor Georgië is geen visum nodig voor een verblijf van maximaal 1 jaar.</li>
                <li>Zorg voor een passende reisverzekering. Als je geen doorlopende reisverzekering hebt, sluit er dan nu 1 af.</li>
            </ol>
        </div>
        <div class="card-footer text-muted">
            <img id="Mamuko_son" src="img/Mamuko_son.jpg" width="30%" height="auto">
            <h5>Mamuko's son</h5>
        </div>
    </div>
@endsection
