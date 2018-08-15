@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="card card-block">  
                    <div class="card-header">
                        <h2>{{ trans('info.login_start') }}</h2>
                    </div>
                    <img class="card-img-top" src="/img/Club/1_jaarclub_Rdam.jpg" alt="Rotterdam 1983" height="auto" width="48">
                    <br>
                    <img class="card-img-top" src="/img/Club/2_Kenia_vuur.jpg" alt="Kenia 1989" height="auto" width="48">
                    <br>
                    <img class="card-img-top" src="/img/Club/3_Cameroun_voetbal.jpg" alt="Cameroun 1999" height="auto" width="48">
                    <br>
                    <img class="card-img-top" src="/img/Club/5_Oman_kamelen.jpg" alt="Oman 2005" height="auto" width="48">
                    <br>
                    <img class="card-img-top" src="/img/Club/6_Karpaten_brug.jpg" alt="Karpaten 2009" height="auto" width="48">
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="card card-block">
                    <div class="card-header">
                        <h2>{{ trans('info.login') }}</h2>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">{{ trans('info.email_address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">{{ trans('info.password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ trans('info.remember_me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('info.login') }}
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ trans('info.forgot_pw') }}
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Ben jij er weer klaar voor?
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
