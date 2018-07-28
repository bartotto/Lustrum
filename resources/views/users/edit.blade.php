@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button class="btn btn-primary" onclick="goBack()">
            {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ trans('info.edit_user') }}</h1>
            </div>     
            <form method="POST" action="/users/{{ $user->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">{{ trans('info.name') }}</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" id="title" name="name" required>
                </div>
                <div class="form-group">
                    <label for="dob">{{ trans('info.dob') }}</label>
                    <input type="date" class="form-control" value="{{ date('d-m-y', strtotime($user->dob)) }}"id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('info.email_address') }}</label>
                    <input type="email" class="form-control" value="{{ $user->email }}"id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="home_address">{{ trans('info.home_address') }}</label>
                    <input type="text" class="form-control" value="{{ $user->home_address }}"id="home_address" name="home_address">
                    <input type="text" class="form-control" value="{{ $user->home_number }}"id="home_number" name="home_number">
                </div>
                <div class="form-group">
                    <label for="home_postalcode">{{ trans('info.home_postalcode') }}</label>
                    <input type="text" class="form-control" value="{{ $user->home_postalcode }}"id="home_postalcode" name="home_postalcode">
                    <input type="text" class="form-control" value="{{ $user->home_city }}"id="home_city" name="home_city">
                </div>
                <div class="form-group">
                    <label for="home_country">{{ trans('info.home_country') }}</label>
                    <input type="text" class="form-control" value="{{ $user->home_country }}"id="home_country" name="home_country">
                </div>
                <div class="form-group">
                    <label for="home_tel">{{ trans('info.home_tel') }}</label>
                    <input type="tel" class="form-control" value="{{ $user->home_tel }}"id="home_tel" name="home_tel">
                </div>
                <div class="form-group">
                    <label for="mobile">{{ trans('info.mobile') }}</label>
                    <input type="text" class="form-control" value="{{ $user->mobile }}" id="mobile" name="mobile">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                </div>      
                @include ('layouts.errors')
            </form>
        </div>
    </div>
@endsection
