@extends('layouts.app')
@section('subtitle', '| '.trans('info.administrator'))
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ $user->first_name }} {{ $user->name }} {{ trans('info.role_has') }}:
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" onclick="goBack()">
                        <i class="fa fa-undo">{{ trans('info.back') }}</i>
                    </button>
                    <br><br>
                    {{ trans('info.roles') }}:
                    <ul>
                        @foreach ($roles as $role)
                            <li>{{ $role->description }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>  
@endsection