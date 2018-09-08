@extends('layouts.app')
@section('subtitle', '| '.trans('info.login'))
@section('content')
    <div class="card-columns">
        <div class="card">  
            <div class="card-header">
                {{ trans('info.login_start') }}
            </div>
            <img class="card-img-top" src="/img/Club/Jaarclub_Rdam.jpg" alt="Rotterdam 1983" height="auto" width="48">
            <br>
            <img class="card-img-top" src="/img/Club/Kenya_vuur.jpg" alt="Kenya 1989" height="auto" width="48">
            <br>
            <img class="card-img-top" src="/img/Club/Cameroun_voetbal.jpg" alt="Cameroun 1999" height="auto" width="48">
            <br>
            <img class="card-img-top" src="/img/Club/Oman_kamelen.jpg" alt="Oman 2005" height="auto" width="48">
            <br>
            <img class="card-img-top" src="/img/Club/Carpathians_brug.jpg" alt="Carpathians 2009" height="auto" width="48">
            <br>
            <img class="card-img-top" src="/img/Club/Dalarna_trek.jpg" alt="Dalarna 2014" height="auto" width="48">
        </div>
        <div class="card">
            <div class="card-header">
                {{ trans('info.login') }}
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
@endsection
