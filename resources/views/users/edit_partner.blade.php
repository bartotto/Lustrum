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
                                    <TD>{{ $user->home_tel }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.mobile') }}</TD>
                                    <TD>{{ $user->mobile }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.size') }}</TD>
                                    <TD>{{ $user->size }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="165" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.last_login') }}</TD>
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
                                <div class="form-group row">
                                    <label for="partner" class="col-sm-3 col-form-label">{{ trans('info.partner') }}</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $user->partner }}" id="partner" name="partner" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="partner_first_name" class="col-sm-3 col-form-label">{{ trans('info.partner_first_name') }}</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="{{ $user->partner_first_name }}" id="partner_first_name" name="partner_first_name" required>
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
                                    <label for="partner_visible" class="radio-inline col-form-label">{{ trans('info.partner_visible') }}
                                            @if($user->partner_visible == 'No')            
                                                <input type="radio" name="partner_visible" value="No" checked>{{ trans('info.no') }}
                                                <input type="radio" name="partner_visible" value="Yes">{{ trans('info.yes') }}  
                                            @else
                                                <input type="radio" name="partner_visible" value="No">{{ trans('info.no') }}
                                                <input type="radio" name="partner_visible" value="Yes" checked>{{ trans('info.yes') }}
                                            @endif
                                    </label>
                                </div>
                                <div class="form-group row">         
                                    <label for="partner_login" class="radio-inline col-sm-9 col-form-label" >{{ trans('info.partner_login') }}
                                        @if($user->partner_login == 'No')            
                                            <input type="radio" name="partner_login" value="No" checked>{{ trans('info.no') }}
                                            <input type="radio" name="partner_login" value="Yes">{{ trans('info.yes') }}  
                                        @else
                                            <input type="radio" name="partner_login" value="No">{{ trans('info.no') }}
                                            <input type="radio" name="partner_login" value="Yes" checked>{{ trans('info.yes') }}
                                        @endif
                                        </label>
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
