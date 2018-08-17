@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h2>{{ trans('info.edit_user') }}</h2>
                        <br>
                        <button class="btn btn-primary" onclick="goBack()">
                            {{ trans('info.back') }}
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <form method="POST" action="/users/{{ $user->id }}">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="name">{{ trans('info.name') }}</label>
                                        <input class="form-control" type="text" value="{{ $user->name }}" id="title" name="name" required>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="dob">{{ trans('info.dob') }}</label>
                                        <input class="form-control" type="date" value="{{ date("d-m-Y", strtotime($user->dob)) }}" id="dob" name="dob" required>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="email">{{ trans('info.email_address') }}</label>
                                        <input class="form-control" type="email" value="{{ $user->email }}" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="home_address">{{ trans('info.home_address') }}</label>
                                        <div>
                                            <input type="text" class="form-control" value="{{ $user->home_address }}" id="home_address" name="home_address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="home_postalcode">{{ trans('info.home_postalcode') }}</label>
                                        <div>
                                            <input type="text" class="form-control" value="{{ $user->home_postalcode }}" id="home_postalcode" name="home_postalcode">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="home_postalcode">{{ trans('info.home_city') }}</label>
                                        <input type="text" class="form-control" value="{{ $user->home_city }}" id="home_city" name="home_city">
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="home_country">{{ trans('info.home_country') }}</label>
                                        <input type="text" class="form-control" value="{{ $user->home_country }}" id="home_country" name="home_country">
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="home_tel">{{ trans('info.home_tel') }}</label>
                                        <input type="tel" class="form-control" value="{{ $user->home_tel }}" id="home_tel" name="home_tel">
                                    </div>
                                </div>
                                <div class="form-horizontal">        
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="mobile">{{ trans('info.mobile') }}</label>
                                        <input type="text" class="form-control" value="{{ $user->mobile }}" id="mobile" name="mobile">
                                    </div>
                                </div>
                                <div class="form-horizontal">        
                                    <div class="form-group form-group-lg">
                                        <label class="control-label" for="size">{{ trans('info.size') }}</label>
                                        <input type="number" class="form-control" value="{{ $user->size }}" id="size" name="size" min="44" max="60">
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
                            {{ trans('info.edit_user_warning') }}
                        @endif
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h2>{{ trans('info.details_partner') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <TABLE BORDER="0" STYLE="border-style: solid">
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner') }}</TD>
                                    <TD>{{ $user->partner }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_email') }}</TD>
                                    <TD>{{ $user->partner_email }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_mobile') }}</TD>
                                    <TD>{{ $user->partner_mobile }}</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="160" HEIGHT="30" STYLE="padding-left: 10px">{{ trans('info.partner_visible') }}</TD>
                                    <TD>{{ $user->partner_visible }}</TD>
                                </TR>
                            </TABLE>
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
