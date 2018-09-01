@extends('layouts.app')

@section('content')
    <div class="card-columns">
        <div class="card">  
            <div class="card-header">
                <h2>{{ trans('auth.reset_password') }}</h2>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h5 class="card-title">{{ trans('auth.email_give') }}<sup>*</sup></h5>
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('auth.send_link') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                <p><sup>* </sup>{{ trans('auth.email_descr') }}<a href="mailto:luco@lustrumcaligula.com"> Webmaster</a></p>
            </div>
        </div>
    </div>
@endsection
