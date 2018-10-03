@extends('layouts.app')
@section('subtitle', '| '.trans('info.administrator'))
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ trans('info.role') }}: {{ $role->description }}
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" onclick="goBack()">
                        <i class="fa fa-undo"> {{ trans('info.back') }}</i>
                    </button>
                    <br><br>
                    {{ trans('info.role_users') }}:
                    <ol>
                        @foreach ($users as $user)
                            <li>{{ $user->first_name }} {{ $user->name }}</li> 
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>  
@endsection