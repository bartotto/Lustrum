@extends('layouts.app')
@section('subtitle', '| '.trans('info.profile'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                {{ trans('info.details_all') }}
            </div>
            <div class="card-body">
                @if(Auth::id() == $user->id)
                    <a class="btn btn-primary" href="{{ route('profile.edit', ['id'=>$user->id]) }}">
                        {{ trans('info.edit') }}
                    </a>
                @endif
                <TABLE BORDER="0">
                    <TR>
                        <TD WIDTH="165">{{ trans('info.name') }}</TD>
                        <TD WIDTH="250">{{ $user->first_name }} {{ $user->name }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165">{{ trans('info.dob') }}</TD>
                        <TD>{{ date("d-m-y", strtotime($user->dob)) }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165">{{ trans('info.email_address') }}</TD>
                        <TD>{{ $user->email }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165">{{ trans('info.home_address') }}</TD>
                        <TD>{{ $user->home_address }}<br>{{ $user->home_postalcode }} {{ $user->home_city }}<br>{{ $user->home_country }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165">{{ trans('info.home_tel') }}</TD>
                        <TD WIDTH="250">{{ $user->home_tel }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165">{{ trans('info.mobile') }}</TD>
                        <TD WIDTH="250">{{ $user->mobile }}</TD>
                    </TR>
                </TABLE>
            </div> 
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->user_role = 'Member')
                    <p>{{ trans('info.edit_user_warning') }}</p>
                @endif
            </div>  
        </div>
        @if(substr($user->user_role,0,6) == 'Member')
            @if($user->partner_visible == 'Yes' || Auth::id() == $user->id)
                <div class="card">
                    <div class="card-header">
                        {{ trans('info.details_partner') }}
                    </div>
                    <div class="card-body">
                        @if(Auth::id() == $user->id)
                            <a class="btn btn-primary" href="{{ route('profile.edit_partner', ['id'=>$user->id]) }}">
                                {{ trans('info.edit') }}
                            </a>
                        @endif
                        <TABLE BORDER="0">
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
                                <TD WIDTH="165">{{ trans('info.partner_visible') }}<sup>*</sup></TD>
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
                        <p>{{ trans('info.edit_user_warning2') }}<br>
                        <sup>*</sup> {{ trans('info.edit_user_warning3') }}</p>
                    </div>
                </div>
             @endif
        @endif
        <div class="card">
            <div class="card-header">
                {{ trans('info.details_other') }}
            </div>
            <div class="card-body">
                @if(Auth::id() == $user->id)
                    <a class="btn btn-primary" href="{{ route('profile.edit_other', ['id'=>$user->id]) }}">
                        {{ trans('info.edit') }}
                    </a>
                @endif
                <TABLE BORDER="0">
                    @if(substr(Auth::user()->user_role,0,6) == 'Member')
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
                @if(Auth::user()->user_role = 'Member')
                    <p>{{ trans('info.edit_user_warning') }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
