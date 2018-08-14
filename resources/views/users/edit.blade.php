@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button class="btn btn-primary" onclick="goBack()">
            {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ trans('info.edit_user') }}</h2>
            </div>     
            <form method="POST" action="/users/{{ $user->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="name">{{ trans('info.name') }}</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" value="{{ $user->name }}" id="title" name="name" required>
                        </div>
                    </div>
                </div>
                <!--
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="dob">{{ trans('info.dob') }}</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" value="{{ $user->dob->format('d/m/Y') }}" id="dob" name="dob" required>
                        </div>
                    </div>
                </div>
                -->
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="email">{{ trans('info.email_address') }}</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="email" value="{{ $user->email }}" id="email" name="email" required>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="home_address">{{ trans('info.home_address') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_address }}" id="home_address" name="home_address">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="home_postalcode">{{ trans('info.home_postalcode') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_postalcode }}" id="home_postalcode" name="home_postalcode">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="home_postalcode">{{ trans('info.home_city') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_city }}" id="home_city" name="home_city">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="home_country">{{ trans('info.home_country') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_country }}" id="home_country" name="home_country">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="home_tel">{{ trans('info.home_tel') }}</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" value="{{ $user->home_tel }}" id="home_tel" name="home_tel">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">        
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="mobile">{{ trans('info.mobile') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->mobile }}" id="mobile" name="mobile">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">        
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="partner">{{ trans('info.partner') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->partner }}" id="partner" name="partner">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">        
                    <div class="form-group form-group-lg">
                        <label class="col-sm-4 control-label" for="partner_mobile">{{ trans('info.partner_mobile') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->partner_mobile }}" id="partner_mobile" name="partner_mobile">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                </div>      
                @include ('layouts.errors')
            </form>
        </div>
    </div>
@endsection
