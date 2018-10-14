@extends('layouts.app')
@section('subtitle', '| '.trans('info.admin'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Other/Passport.jpg" alt="Passport" height="auto" width="18">
            <div class="card-header">
                {{ trans('info.last_login') }}
            </div>
            <div class="card-body">
                <div class="card-title">Voor het laatst ingelogd:</div>
                @foreach ($users as $user)
                    @if($user->previous_last_login)
                        <div class="row">
                            <div class="col-sm">{{ $user->first_name}}</div>
                            <div class="col-sm">{{ $user->last_login->format('d/m') }}&nbsp;{{ $user->last_login->format('H:i') }}</div>
                        </div>
                    @endif
                @endforeach
                <hr>
                <div class="card-title">Nog nooit ingelogd:</div>
                @foreach ($users as $user)
                    @if(!$user->previous_last_login)       
                        <div>{{ $user->first_name}}</div>
                    @endif
                @endforeach
             </div>
            <div class="card-footer text-muted">
                22 aug 18
            </div>
        </div>
        
        <div class="card">
            <img class="card-img-top" src="img/Strandborrel/1.jpg" alt="Strandborrel" height="auto" width="48">
            <div class="card-header">
                Partners eigen login
            </div>
            <div class="card-body">
                <div class="card-title"></div>
                @foreach ($users as $user)
                    @if($user->partner_login=='Yes')
                        <div>{{ $user->first_name }}'s {{ $user->partner_first_name }} (id {{ $user->partner_id }})</div>
                    @endif
                @endforeach
            </div> 
            <div class="card-footer text-muted">
                <p>3 sept 18</p>
            </div>
        </div>
    </div>
@endsection
