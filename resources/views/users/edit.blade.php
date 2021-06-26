@extends('layouts.app')
@section('subtitle', '| '.trans('info.profile'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                {{ trans('info.edit_user') }}
            </div>
            <div class="card-body">
                <form method="POST" action="/users/{{ $user->id }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button class="btn btn-primary" onclick="goBack()"><i class="fa fa-undo"> {{ trans('info.cancel') }}</i></button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"> {{ trans('info.save') }}</i></button>
                    </div>    
                    @include ('layouts.errors')
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">{{ trans('info.name') }}</label>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{ $user->first_name }}" id="first_name" name="first_name" placeholder="{{ trans('info.first_name') }}">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="{{ trans('info.last_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dob" class="col-sm-4 col-form-label">{{ trans('info.dob') }}</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="date" id="dob" name="dob"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">{{ trans('info.email_address') }}</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="email" value="{{ $user->email }}" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_address" class="col-sm-4 col-form-label">{{ trans('info.home_address') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_address }}" id="home_address" name="home_address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_postalcode" class="col-sm-4 col-form-label">{{ trans('info.home_postalcode') }}</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="{{ $user->home_postalcode }}" id="home_postalcode" name="home_postalcode" placeholder="{{ trans('info.home_postalcode') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_city" class="col-sm-4 col-form-label">{{ trans('info.home_city') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_city }}" id="home_city" name="home_city" placeholder="{{ trans('info.home_city') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_country" class="col-sm-4 col-form-label">{{ trans('info.home_country') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_country }}" id="home_country" name="home_country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="home_tel" class="col-sm-4 col-form-label">{{ trans('info.home_tel') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->home_tel }}" id="home_tel" name="home_tel" placeholder="{{ trans('info.home_tel_ph') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-sm-4 col-form-label">{{ trans('info.mobile') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ $user->mobile }}" id="mobile" name="mobile" placeholder="{{ trans('info.mobile_ph') }}">
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted text-left">
                @if($user->hasRole('Member'))
                    {{ trans('info.edit_user_warning') }}
                @endif
            </div> 
        </div>
        @if($user->hasRole('Member'))
            <div class="card">
                <div class="card-header">
                    {{ trans('info.details_partner') }}
                </div>
                <div class="card-body">
                    @if(Auth::id() == $user->id)
                        <div class="btn btn-light">
                            {{ trans('info.edit') }}
                        </div>
                    @endif
                    <TABLE>
                        <TR>
                            <TD WIDTH="165">{{ trans('info.name') }}</TD>
                            <TD>{{ $user->partner_first_name }} {{ $user->partner }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165">{{ trans('info.partner_email') }}</TD>
                            <TD>{{ $user->partner_email }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165">{{ trans('info.partner_mobile') }}</TD>
                            <TD>{{ $user->partner_mobile }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165">{{ trans('info.partner_visible') }}<sup>*</sup></TD></TD>
                            <TD>
                                @if($user->partner_visible=='Yes')
                                    {{ trans('info.yes') }}
                                @else
                                    {{ trans('info.no') }}
                                @endif
                            </TD>
                        </TR>
                        <TR>
                            <TD WIDTH="165">{{ trans('info.partner_login') }}</TD>
                            <TD>
                                @if($user->partner_login=='Yes')
                                    {{ trans('info.yes') }}
                                @else
                                    {{ trans('info.no') }}
                                @endif
                            </TD>
                        </TR>
                    </TABLE>
                </div>
                <div class="card-footer text-muted text-left">
                    @if(Auth::user()->hasRole('Member'))
                        <p>{{ trans('info.edit_user_warning2') }}<br>
                        <sup>*</sup> {{ trans('info.edit_user_warning3') }}</p>
                    @endif
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                {{ trans('info.details_other') }}
            </div>
            <div class="card-body">
                @if(Auth::id() == $user->id)
                    <a class="btn btn-light">
                        {{ trans('info.edit') }}
                    </a>
                @endif
                <TABLE>
                    @if(Auth::user()->hasRole('Member'))
                        <TR>
                            <TD WIDTH="165">{{ trans('info.size') }}</TD>
                            <TD>{{ $user->size }}</TD>
                        </TR>
                    @endif
                    <TR>
                        <TD WIDTH="165">{{ trans('info.strand_borrel') }}</TD>
                        <TD>
                            @if($user->strandborrel=='Yes')
                                {{ trans('info.yes') }}
                            @else
                                {{ trans('info.no') }}
                            @endif
                        </TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165">{{ trans('info.last_login') }}</TD>
                        <TD>{{ Auth::user()->previous_last_login->format('d M') }} om {{ Auth::user()->previous_last_login->format('H:i') }}</TD>
                    </TR>
                </TABLE>
            </div> 
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->hasRole('Member'))
                    <p>{{ trans('info.edit_user_warning') }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
