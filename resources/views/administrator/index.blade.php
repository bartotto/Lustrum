@extends('layouts.app')
@section('subtitle', '| '.trans('info.administrator'))
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                Users:
            </div>
            <div class="card-body">
                @foreach ($users as $user)
                    <div>
                        <a href="/administrator/{{ $user->id }}">
                            {{ $user->first_name}} {{ $user->name}}
                        </a>
                        @if($user->previous_last_login)
                            ({{ $user->last_login->format('d/m/y') }}&nbsp;{{ $user->last_login->format('H:i') }})
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Roles:
            </div>
            <div class="card-body">
                @foreach ($roles as $role)
                    <div>
                        <a href="/role/{{ $role->id }}">
                            {{ $role->description }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>  
@endsection
