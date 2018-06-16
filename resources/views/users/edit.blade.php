@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button onclick="goBack()">
            {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ trans('info.edit_user') }}</h1>
            </div>
            
            <form method="POST" action="/users/{{ $user->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">{{ trans('info.name') }}:</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                </div>
                <div class="form-group">
                    <label for="dob">{{ trans('info.dob') }}:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                </div>      
                @include ('layouts.errors')
            </form>  
            
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
