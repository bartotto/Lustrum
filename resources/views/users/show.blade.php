@extends('layouts.app')
@section('subtitle', '| '.trans('info.profile'))
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ \Session::get('success') }}
        </div>
    @elseif(session()->get('danger'))
        <div class="alert alert-danger">
            {{ \Session::get('danger') }}
        </div>
    @endif
    <div class="card-columns">
        <div class="card">                                                      <!-- Personal details -->
            <div class="card-header">
                {{ trans('info.details_all') }}
            </div>
            <div class="card-body">
                <button class="btn btn-primary" onclick="goBack()">
                    <i class="fa fa-undo">{{ trans('info.back') }}</i>
                </button>
                @if(Auth::id() == $user->id)
                    <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">
                        <i class="fa fa-edit"> {{ trans('info.edit') }}</i>
                    </a>
                @endif
                <TABLE BORDER="0">
                    <TR>
                        <TD WIDTH="165">{{ trans('info.name') }}</TD>
                        <TD WIDTH="250">{{ $user->first_name }} {{ $user->name }}</TD>
                    </TR>
                    <TR>
                        <TD WIDTH="165">{{ trans('info.dob') }}</TD>
                        <TD>{{ date('d-m-Y', strtotime($user->dob)) }}</TD>
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
                    <TR>
                        <TD WIDTH="165">{{ trans('info.roles') }}</TD>
                        <TD WIDTH="250">
                            @foreach ($roles as $role)
                                {{ $role->description }}@if (!$loop->last),@endif
                            @endforeach
                        </TD>
                    </TR>
                </TABLE>
            </div> 
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->hasRole('Member'))
                    <p>{{ trans('info.edit_user_warning') }}</p>
                @endif
            </div>  
        </div>
        @if($user->hasRole('Member'))
            @if($user->partner_visible == 'Yes' || Auth::id() == $user->id)
                <div class="card">                                                  <!-- Partner details -->
                    <div class="card-header">
                        {{ trans('info.details_partner') }}
                    </div>
                    <div class="card-body">
                        @if(Auth::id() == $user->id)
                            <a class="btn btn-primary" href="{{ route('users.edit_partner', $user->id) }}">
                                <i class="fa fa-edit"> {{ trans('info.edit') }}</i>
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
        <div class="card">                                                                  <!-- Other details -->
            <div class="card-header">
                {{ trans('info.details_other') }}
            </div>
            <div class="card-body">
                @if(Auth::id() == $user->id)
                    <a class="btn btn-primary" href="{{ route('users.edit_other', $user->id) }}">
                        <i class="fa fa-edit"> {{ trans('info.edit') }}</i>
                    </a>
                @endif
                <TABLE BORDER="0">
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
