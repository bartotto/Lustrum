@extends('layouts.app')
@section('subtitle', '| '.trans('info.profile'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.details_all') }}</h2>
            </div>
            <div class="card-body">
                <div class="btn btn-default">
                    {{ trans('info.back') }}
                </div>
                @if(Auth::id() == $user->id)
                    <div class="btn btn-default">
                        {{ trans('info.edit') }}
                    </div>
                @endif
                <TABLE BORDER="0">
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.name') }}</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->name }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.first_name') }}</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->first_name }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.dob') }}</TD>
                        <TD>{{ date("d-m-y", strtotime($user->dob)) }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.email_address') }}</TD>
                        <TD>{{ $user->email }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.home_address') }}</TD>
                        <TD>{{ $user->home_address }}</TD>
                    </TR>
                    <TR>
                        <TD></TD>
                        <TD>{{ $user->home_postalcode }} &nbsp {{ $user->home_city }}, {{ $user->home_country }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.home_tel') }}</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->home_tel }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.mobile') }}</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->mobile }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.size') }}</TD>
                        <TD>{{ $user->size }}</TD>
                    </TR>
                </TABLE>
            </div> 
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->user_role = 'Member')
                    <p>{{ trans('info.edit_user_warning') }}</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.edit_user') }}</h2> 
            </div>
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
                        <label for="partner" class="col-sm-3 col-form-label">{{ trans('info.name') }}</label>
                        <div class="col-4">
                            <input type="text" class="form-control" value="{{ $user->partner_first_name }}" id="partner_first_name" name="partner_first_name" placeholder="{{ trans('info.first_name') }}">
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" value="{{ $user->partner }}" id="partner" name="partner" placeholder="{{ trans('info.last_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="partner_email" class="col-sm-3 col-form-label">{{ trans('info.partner_email') }}</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $user->partner_email }}" id="partner_email" name="partner_email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="partner_mobile" class="col-sm-3 col-form-label">{{ trans('info.partner_mobile') }}</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="{{ $user->partner_mobile }}" id="partner_mobile" name="partner_mobile" required>
                        </div>
                    </div>
                    <div class="form-group row">        
                        <label for="partner_visible" class="radio-inline col-sm-9 col-form-label">{{ trans('info.partner_visible') }} <sup>*</sup>&nbsp;
                            @if($user->partner_visible == 'No')            
                                <input type="radio" name="partner_visible" value="No" checked> {{ trans('info.no') }}&nbsp;&nbsp;
                                <input type="radio" name="partner_visible" value="Yes"> {{ trans('info.yes') }}  
                            @else
                                <input type="radio" name="partner_visible" value="No"> {{ trans('info.no') }}&nbsp;&nbsp;
                                <input type="radio" name="partner_visible" value="Yes" checked> {{ trans('info.yes') }}
                            @endif
                        </label>
                    </div>
                    <div class="form-group row">         
                        <label for="partner_login" class="radio-inline col-sm-9 col-form-label" >{{ trans('info.partner_login') }}&nbsp;&nbsp;
                            @if($user->partner_login == 'No')            
                                <input type="radio" name="partner_login" value="No" checked> {{ trans('info.no') }}&nbsp;&nbsp;
                                <input type="radio" name="partner_login" value="Yes"> {{ trans('info.yes') }}  
                            @else
                                <input type="radio" name="partner_login" value="No"> {{ trans('info.no') }}&nbsp;&nbsp;
                                <input type="radio" name="partner_login" value="Yes" checked> {{ trans('info.yes') }}
                            @endif
                        </label>
                    </div>    
                    @include ('layouts.errors')
                </form>
            </div>
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->user_role = 'Member')
                    <p>{{ trans('info.edit_user_warning2') }}<br>
                    <sup>*</sup>{{ trans('info.edit_user_warning3') }}</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.details_other') }}</h2>
            </div>
            <div class="card-body">
                @if(Auth::id() == $user->id)
                    <a class="btn btn-default">
                        {{ trans('info.edit') }}
                    </a>
                @endif
                <TABLE BORDER="0">
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.strand_borrel') }}</TD>
                        <TD>
                            @if($user->strandborrel=='Yes')
                                {{ trans('info.yes') }}
                            @else
                                {{ trans('info.no') }}
                            @endif
                        </TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.last_login') }}</TD>
                        <TD>{{ Auth::user()->previous_last_login->format('d M') }} om {{ Auth::user()->previous_last_login->format('H:i') }}</TD>
                    </TR>
                </TABLE>
            </div> 
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->user_role = 'Member')
                    <p>{{ trans('info.edit_user_warning') }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
