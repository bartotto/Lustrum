@extends('layouts.app')
@section('subtitle', '| '.trans('info.welcome'))
@section('content')
    <div class="card-columns">
        <div class="card card">
            <img class="card-img-top" src="img/Other/Hilarisch.jpg" alt="Kaukasisch Hilarisch" height="auto" width="58">
            <div class="card-header">
                <h2>{{ trans('info.welcome') }}</h2>
            </div>
            <div class="card-body">
                <p>{{ trans('info.suggestions') }}<a href="mailto:info@bartotto.com?SUBJECT=Wachtwoord probleem">luco@lustrumcaligula.com</a></p>
            </div>
            <div class="card-footer text-muted">
                <a class="btn btn-primary" href="{{ route('home') }}">
                    {{ trans('info.go-to-home') }}
                </a>
            </div>
        </div>
        <div class="card border-success">
            <img class="card-img-top" src="img/Other/Login.png" alt="Login safely" height="auto" width="58">
            <div class="card-header">
                <h2>Safety first!</h2>
            </div>
            @if(Auth::user()->previous_last_login < Auth::user()->last_login)
                <div class="card-body text-success">
                    <p>U was voor het laatst ingelogd op: {{ Auth::user()->previous_last_login->format('d M Y')}}
                    om {{ Auth::user()->previous_last_login->format('H:i')}} UTC.</p>
                </div>
                <div class="card-footer text-muted">
                    <p>Wat u dit niet? Verander gauw u wachtwoord of trek onmiddelijk aan de bel bij <a href="mailto:luco@lustrumcaligula.com?SUBJECT=Wachtwoord probleem">Webmaster</a></p>
                </div>
            @else
                <div class="card-body">
                    <p>U bent voor het eerst ingelogd</p>
                </div>
                <div class="card-footer text-muted">
                    <p>Kies alstublieft een veilig wachtwoord. Voor vragen stuur een mailje naar <a href="mailto:luco@lustrumcaligula.com?SUBJECT=Wachtwoord probleem">Webmaster</a></p>
                </div>
            @endif
        </div>
    </div>
@endsection