@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h2>{{ trans('info.details_all') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <TABLE BORDER="0" STYLE="border-style: solid">
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.name') }}</TD>
                                    <TD WIDTH="250" HEIGHT="30">{{ $user->name }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.first_name') }}</TD>
                                    <TD WIDTH="250" HEIGHT="30">{{ $user->first_name }}</TD>
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
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.size') }}</TD>
                                    <TD>{{ $user->size }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.last_login') }}</TD>
                                    <TD>{{ $user->previous_last_login }}</TD>
                                </TR>
                            </TABLE>
                        </div> 
                    </div>
                    <div class="card-footer text-muted">
                        <p></p>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h2>{{ trans('info.edit_partner') }}</h2> 
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <form method="POST" action="/users/{{ $user->id }}">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <button class="btn btn-primary" onclick="goBack()">
                                        {{ trans('info.back') }}
                                    </button>
                                    <button type="submit" class="btn btn-primary">{{ trans('info.save') }}</button>
                                </div> 
                                <div class="form-horizontal">        
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="partner">{{ trans('info.partner') }}</label>
                                        <input type="text" class="form-control" value="{{ $user->partner }}" id="partner" name="partner">
                                    </div>
                                </div>
                                <div class="form-horizontal">        
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="partner_email">{{ trans('info.partner_email') }}</label>
                                        <input type="text" class="form-control" value="{{ $user->partner_email }}" id="partner_email" name="partner_email">
                                    </div>
                                </div>
                                <div class="form-horizontal">        
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="partner_mobile">{{ trans('info.partner_mobile') }}</label>
                                        <input type="text" class="form-control" value="{{ $user->partner_mobile }}" id="partner_mobile" name="partner_mobile">
                                    </div>
                                </div>
                                <div class="form-horizontal">        
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="partner_visible">{{ trans('info.partner_visible') }}</label>
                                        <select value="{{ $user->partner_visible }}" name="partner_visible" id="partner_visible">
                                            @if($user->partner_visible == 'Yes')
                                                <option value="No">{{ trans('info.no') }}</option>
                                                <option value="Yes" selected>{{ trans('info.yes') }}</option>
                                            @else
                                                <option value="No" selected>{{ trans('info.no') }}</option>
                                                <option value="Yes">{{ trans('info.yes') }}</option>
                                            @endif
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
                    <div class="card-footer text-muted">
                        @if(Auth::user()->user_type = 'Member')
                            <p>{{ trans('info.edit_user_warning2') }}</p>
                        @endif
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection
