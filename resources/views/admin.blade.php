@extends('layouts.app')
@section('subtitle', '| '.trans('info.admin'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Other/Alex.jpg" alt="Alex" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.kledinglijn') }} maten</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Al opgegeven:</h5>
                @foreach ($users as $user)
                    @if($user->size)
                        <div>{{ $user->first_name}}  {{$user->size}}</div>
                    @endif
                @endforeach
                <hr>
                <h5 class="card-title">Trage eikels:</h5>
                @foreach ($users as $user)
                    @if($user->joins)
                        @if(!$user->size)
                            <div>{{ $user->first_name}}  {{$user->size}}</div>
                        @endif
                    @endif
                @endforeach
             </div>
            <div class="card-footer text-muted">
                14 aug 18
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Strandborrel.jpg" alt="Strandborrel" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.strand_borrel') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Opgegeven:</h5>
                <ol>
                    @foreach ($users as $user)
                        @if($user->strandborrel=='Yes')
                            <li>
                                <a href="/users/{{ $user->id }}">{{ $user->first_name }}</a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div> 
            <div class="card-footer text-muted">
                <p>17 aug 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Passport.jpg" alt="Passport" height="auto" width="18">
            <div class="card-header">
                <h2>{{ trans('info.last_login') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Voor het laatst ingelogd:</h5>
                @foreach ($users as $user)
                    @if($user->previous_last_login)
                        <div class="row">
                            <div class="col-sm">{{ $user->first_name}}</div>
                            <div class="col-sm">{{ $user->previous_login->format('d/m') }}&nbsp;{{ $user->previous_login->format('H:i') }}</div>
                        </div>
                    @endif
                @endforeach
                <hr>
                <h5 class="card-title">Nog nooit ingelogd:</h5>
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
    </div>
@endsection
