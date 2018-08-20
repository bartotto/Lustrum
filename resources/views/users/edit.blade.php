@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h2>{{ trans('info.edit_user') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <form method="POST" action="/users/{{ $user->id }}">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <button class="btn btn-primary" onclick="goBack()">
                                        {{ trans('info.cancel') }}
                                    </button>
                                    <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                                </div>    
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">{{ trans('info.name') }}</label>
                                    <div class="col-4">
                                        <input type="text" class="form-control" value="{{ $user->first_name }}" id="first_name" name="first_name" placeholder="{{ trans('info.first_name') }}">
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="{{ trans('info.last_name') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 col-form-label">{{ trans('info.dob') }}</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" value="{{ date("d-m-Y", strtotime($user->dob)) }}" id="dob" name="dob" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">{{ trans('info.email_address') }}</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="email" value="{{ $user->email }}" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="home_address" class="col-sm-3 col-form-label">{{ trans('info.home_address') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $user->home_address }}" id="home_address" name="home_address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="home_postalcode" class="col-sm-3 col-form-label">{{ trans('info.home_postalcode') }}</label>
                                    <div class="col-3">
                                        <input type="text" class="form-control" value="{{ $user->home_postalcode }}" id="home_postalcode" name="home_postalcode" placeholder="{{ trans('info.home_postalcode') }}">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" value="{{ $user->home_city }}" id="home_city" name="home_city" placeholder="{{ trans('info.home_city') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="home_country" class="col-sm-3 col-form-label">{{ trans('info.home_country') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $user->home_country }}" id="home_country" name="home_country">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel_numbers" class="col-sm-3 col-form-label">{{ trans('info.tel_numbers') }}</label>
                                    <div class="col-4">
                                        <input type="text" class="form-control" value="{{ $user->mobile }}" id="mobile" name="mobile" placeholder="{{ trans('info.mobile') }}">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" value="{{ $user->home_tel }}" id="home_tel" name="home_tel" placeholder="{{ trans('info.home_tel') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="size" class="col-sm-3 col-form-label">{{ trans('info.size') }}</label>
                                    <div class="col-sm-9">
                                        <select class="form-control col-sm-3" id="size" name="size">
                                            <option>{{ $user->size }}</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>2XL</option>
                                            <option>3XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                                </div>      
                                @include ('layouts.errors')
                            </form>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-left">
                        @if(Auth::user()->user_role = 'Member')
                            {{ trans('info.edit_user_warning') }}
                        @endif
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h2>{{ trans('info.details_partner') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <TABLE BORDER="0" STYLE="border-style: solid">
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner') }}</TD>
                                    <TD>{{ $user->partner }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_first_name') }}</TD>
                                    <TD>{{ $user->partner_first_name }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_email') }}</TD>
                                    <TD>{{ $user->partner_email }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_mobile') }}</TD>
                                    <TD>{{ $user->partner_mobile }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_visible') }}</TD>
                                    <TD>
                                        @if($user->partner_visible=='Yes')
                                            {{ trans('info.yes') }}
                                        @else
                                            {{ trans('info.no') }}
                                        @endif
                                    </TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_login') }}</TD>
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
                    </div>
                    <div class="card-footer text-muted text-left">
                        @if(Auth::user()->user_role = 'Member')
                            <p>{{ trans('info.edit_user_warning2') }}<br>
                            <sup>*</sup>{{ trans('info.edit_user_warning3') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
