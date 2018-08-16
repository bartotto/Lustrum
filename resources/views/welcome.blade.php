@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-block">
                    <img class="card-img-top" src="img/Hilarisch.jpg" alt="Kaukasisch Hilarisch" height="auto" width="58">
                    <div class="card-header">
                        <h2>Welkom op de site!</h2>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <p>{{ trans('info.suggestions') }}<a href="mailto:info@bartotto.com?SUBJECT=Wachtwoord probleem">luco@lustrumcaligula.com</a></p>
                    </div>
                    <div class="card-footer text-muted">
                        <p></p>
                    </div>
                </div>
            </div>
            @if(Auth::user()->previous_last_login)
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="card card-block">
                        <img class="card-img-top" src="img/Login.png" alt="Login safely" height="auto" width="58">
                        <div class="card-header">
                            <h2>Safety first!</h2>
                        </div>
                        <div class="card-body">
                                <p>U was voor het laatst ingelogd op: {{ Auth::user()->previous_last_login->format('d M Y')}}
                                om {{ Auth::user()->previous_last_login->format('H i')}}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <p>Wat u dit niet? Verander gauw u wachtwoord of trek onmiddelijk aan de bel bij <a href="mailto:luco@lustrumcaligula.com?SUBJECT=Wachtwoord probleem">Webmaster</a></p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection