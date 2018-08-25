@extends('layouts.app')

@section('content')
    <div class="card-columns">
        <div class="card">  
            <div class="card-header">
                <h2>{{ trans('auth.reset_password') }}</h2>
            </div>
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="form-control">{{ trans('info.email_address') }}</label>
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
        </div>
    </div>
@endsection
