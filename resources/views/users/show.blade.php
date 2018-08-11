@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button class="btn btn-primary" onclick="goBack()">
            {{ trans('info.back') }}
        </button>
        @if(Auth::id() == $user->id)
            <a class="btn btn-primary" href="{{ route('profile.edit', ['id'=>$user->id]) }}">
                {{ trans('info.edit') }}
            </a>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ trans('info.all_details') }} {{ $user->name }}</h2>
            </div>
            <div class="panel-body">
                <div class="row">                 
                    <TABLE BORDER="0" STYLE="border-style: solid">
                        <TR>
                            <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.name') }}</TD>
                            <TD WIDTH="250" HEIGHT="30">{{ $user->name }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.dob') }}</TD>
                            <TD>{{ date("d-m-y", strtotime($user->dob)) }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.email_address') }}</TD>
                            <TD>{{ $user->email }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.home_address') }}</TD>
                            <TD>{{ $user->home_address }}</TD>
                        </TR>
                        <TR>
                            <TD></TD>
                            <TD>{{ $user->home_postalcode }} &nbsp {{ $user->home_city }}, {{ $user->home_country }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.home_tel') }}</TD>
                            <TD>{{ $user->home_tel }}</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.mobile') }}</TD>
                            <TD>{{ $user->mobile }}</TD>
                        </TR>
                    </TABLE>
                </div>
            </div>
        </div>
    </div>
@endsection
