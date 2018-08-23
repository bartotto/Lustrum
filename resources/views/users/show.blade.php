@extends('layouts.app')
@section('subtitle', '| '.trans('info.profile'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h2>{{ trans('info.details_all') }}</h2>
                        <br>
                        <button class="btn btn-primary" onclick="goBack()">
                            {{ trans('info.back') }}
                        </button>
                        @if(Auth::id() == $user->id)
                            <a class="btn btn-primary" href="{{ route('profile.edit', ['id'=>$user->id]) }}">
                                {{ trans('info.edit') }}
                            </a>
                        @endif
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <TABLE BORDER="0" STYLE="border-style: solid">
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
                                    <TD>{{ $user->home_address }}</TD>
                                </TR>
                                <TR>
                                    <TD></TD>
                                    <TD>{{ $user->home_postalcode }} &nbsp; {{ $user->home_city }}, {{ $user->home_country }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.tel_numbers') }}</TD>
                                    <TD WIDTH="250" HEIGHT="30">{{ $user->mobile }} &nbsp;&nbsp; {{ $user->home_tel }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.size') }}</TD>
                                    <TD>{{ $user->size }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.strandborrel') }}</TD>
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
                                    <TD>{{ Auth::user()->previous_last_login->format('d M Y') }} om {{ Auth::user()->previous_last_login->format('H:i') }}</TD>
                                </TR>
                            </TABLE>
                        </div> 
                    </div>
                    <div class="card-footer text-muted text-left">
                        @if(Auth::user()->user_role = 'Member')
                            <p>{{ trans('info.edit_user_warning') }}</p>
                        @endif
                    </div>  
                </div>
            </div>
            @if(($user->partner_visible == 'Yes' || Auth::id() == $user->id) && !Auth::user()->user_role = 'Guide')
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card" style="height: 100%">
                        <div class="card-header">
                            <h2>{{ trans('info.details_partner') }}</h2>
                            <br>
                            @if(Auth::id() == $user->id)
                                <a class="btn btn-primary" href="{{ route('profile.edit_partner', ['id'=>$user->id]) }}">
                                    {{ trans('info.edit') }}
                                </a>
                            @endif
                        </div>
                        <div class="card-block">
                            <div class="card-body">
                                <TABLE BORDER="0" STYLE="border-style: solid">
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
                                        <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_visible') }} <sup>*</sup></TD>
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
                                <sup>*</sup> {{ trans('info.edit_user_warning3') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
             @endif
        </div>
    </div>
@endsection
