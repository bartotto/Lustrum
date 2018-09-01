@extends('layouts.app')

@section('content')
    <div class="card-columns">
        <div class="card">  
            <div class="card-header">
                <h2>{{ trans('auth.reset_password') }}</h2>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <h5 class="card-title">{{ trans('auth.email_give') }}</h5>
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">{{ trans('info.email_address') }}</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">{{ trans('info.password') }}</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-4 control-label">{{ trans('info.password_confirm') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('auth.reset_password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection