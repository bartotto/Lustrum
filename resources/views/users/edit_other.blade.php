@extends('layouts.app')
@section('subtitle', '| '.trans('info.profile'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.details_other') }}</h2>
            </div>
            <div class="card-body">
                @if(Auth::id() == $user->id)
                    <div class="btn btn-default">
                        {{ trans('info.edit') }}
                    </div>
                @endif
                <TABLE BORDER="0">
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.name') }}</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->first_name }} {{ $user->name }}</TD>
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
                        <TD>{{ $user->home_address }}<br>{{ $user->home_postalcode }} {{ $user->home_city }}<br>{{ $user->home_country }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.home_tel') }}</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->home_tel }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.mobile') }}</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->mobile }}</TD>
                    </TR>
                    @if(substr(Auth::user()->user_role,0,6) == 'Member')
                        <TR>
                            <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.size') }}</TD>
                            <TD>{{ $user->size }}</TD>
                        </TR>
                    @endif
                </TABLE>
            </div> 
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->user_role = 'Member')
                    <p>{{ trans('info.edit_user_warning') }}</p>
                @endif
            </div>
        </div>
        @if(Auth::user()->user_role = 'Member' || Auth::user()->user_role = 'Member+')
            <div class="card">
                <div class="card-header">
                    <h2>{{ trans('info.details_partner') }}</h2>
                </div>
                <div class="card-body">
                    @if(Auth::id() == $user->id)
                        <div class="btn btn-default">
                            {{ trans('info.edit') }}
                        </div>
                    @endif
                    <TABLE BORDER="0">
                        <TR>
                            <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.name') }}</TD>
                            <TD>{{ $user->partner_first_name }} {{ $user->partner }}</TD>
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
                <div class="card-footer text-muted text-left">
                    @if(Auth::user()->user_role = 'Member')
                        <p>{{ trans('info.edit_user_warning2') }}<br>
                        <sup>*</sup>{{ trans('info.edit_user_warning3') }}</p>
                    @endif
                </div>
            </div>
        @endif
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
                        <label for="strandborrel" class="radio-inline col-sm-9 col-form-label" >{{ trans('info.strand_borrel') }}&nbsp;
                            @if($user->strandborrel == 'No')            
                                <input type="radio" name="strandborrel" value="No" checked> {{ trans('info.no') }}&nbsp;
                                <input type="radio" name="strandborrel" value="Yes"> {{ trans('info.yes') }}  
                            @else
                                <input type="radio" name="strandborrel" value="No"> {{ trans('info.no') }}&nbsp;
                                <input type="radio" name="strandborrel" value="Yes" checked> {{ trans('info.yes') }}
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
    </div>
@endsection
