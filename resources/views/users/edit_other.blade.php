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
                    <div class="btn btn-light">
                        {{ trans('info.edit') }}
                    </div>
                @endif
                <TABLE>
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
            <div class="card">
                <div class="card-header">
                    {{ trans('info.details_partner') }}
                </div>
                <div class="card-body">
                    @if(Auth::id() == $user->id)
                        <div class="btn btn-light">
                            {{ trans('info.edit') }}
                        </div>
                    @endif
                    <TABLE>
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
                            <TD WIDTH="165">{{ trans('info.partner_visible') }}<sup>*</sup></TD></TD>
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
                    @if(Auth::user()->user_role = 'Member')
                        <p>{{ trans('info.edit_user_warning2') }}<br>
                        <sup>*</sup> {{ trans('info.edit_user_warning3') }}</p>
                    @endif
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                {{ trans('info.edit_user') }}
            </div>
            <div class="card-body">
                <form method="POST" action="/users/{{ $user->id }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button class="btn btn-primary" onclick="goBack()"><i class="fa fa-undo"> {{ trans('info.cancel') }}</i></button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"> {{ trans('info.save') }}</i></button>
                    </div>
                    @if(substr(Auth::user()->user_role,0,6) == 'Member')
                        <div class="form-group row">
                            <label for="size" class="col-sm-4 col-form-label">{{ trans('info.size') }}</label>
                            <div class="col-sm-7">
                                <select class="form-control col-sm-5" id="size" name="size">
                                    <option>{{ $user->size }}</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>2XL</option>
                                    <option>3XL</option>
                                </select>
                            </div>
                        </div>
                    @endif
                    <div class="form-group row">
                        <label for="strandborrel" class="radio-inline col-sm-4 col-form-label" >{{ trans('info.strand_borrel') }}</label>
                        <div class="col-sm-8 radio-inline"> 
                            @if($user->strandborrel == 'No')            
                                <input type="radio" name="strandborrel" value="No" checked> {{ trans('info.no') }}&nbsp;
                                <input type="radio" name="strandborrel" value="Yes"> {{ trans('info.yes') }}  
                            @else
                                <input type="radio" name="strandborrel" value="No"> {{ trans('info.no') }}&nbsp;
                                <input type="radio" name="strandborrel" value="Yes" checked> {{ trans('info.yes') }}
                            @endif
                        </div>
                    </div> 
                    @include ('layouts.errors')
                </form>
            </div>
            <div class="card-footer text-muted text-left">
                @if(Auth::user()->user_role = 'Member')
                    <p>{{ trans('info.edit_user_warning') }}<br>
                @endif
            </div>
        </div>
    </div>
@endsection
