@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button onclick="goBack()">
            {{ trans('info.back') }}
        </button>
 
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ trans('info.all_details') }}</h1>
            </div>
            <div class="panel-body">
                <div class="row">                 
                    <TABLE BORDER="1" STYLE="border-style: solid">
                    <TR>
                        <TD WIDTH="160" HEIGHT="30">{{ trans('info.name') }}:</TD>
                        <TD WIDTH="250" HEIGHT="30">{{ $user->name }}</TD>
                    </TR>
                    <TR>
                        <TD>{{ trans('info.dob') }}:</TD>
                        <TD>{{ $user->dob }}</TD>
                    </TR>
                    <TR>
                        <TD>{{ trans('info.email_address') }}:</TD>
                        <TD>{{ $user->email }}</TD>
                    </TR>
                    <TR>
                        <TD>{{ trans('info.home_address') }}:</TD>
                        <TD>{{ $user->home_address." ".$user->home_number }}</TD>
                    </TR>
                    <TR>
                        <TD>{{ trans('info.home_pc') }}:</TD>
                        <TD>{{ $user->home_postalcode }} &nbsp {{ $user->home_city }}</TD>
                    </TR>
                    <TR>
                        <TD>{{ trans('info.home_country') }}:</TD>
                        <TD>{{ $user->home_country }}</TD>
                    </TR>
                    <TR>
                        <TD>{{ trans('info.home_tel') }}:</TD>
                        <TD>{{ $user->home_tel }}</TD>
                    </TR>
                    <TR>
                        <TD>{{ trans('info.mobile') }}:</TD>
                        <TD>{{ $user->mobile }}</TD>
                    </TR>
                    </TABLE>
                </div>
            </div>
        </div>
    </div>
@endsection
