@extends('layouts.app')
@section('subtitle', '| '.trans('auth.reset_password'))
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
                {{ trans('auth.reset_password') }}
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">{{ trans('auth.email_give') }}<sup>*</sup></label>
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
