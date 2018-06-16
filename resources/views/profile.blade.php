@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ trans('info.profile') }}</h1>
            </div>
            <div class="panel-body">
                <div>
                    {{ Auth::user()->name }}
                </div>
                <div>
                    {{ Auth::user()->email }}
                </div>
                <div>
                    {{ Auth::user()->dob }}
                </div>
                <div>
                    {{ Auth::user()->home_address }}
                    {{ Auth::user()->home_number }}
                </div>
                <div>
                    {{ Auth::user()->home_postalcode }}
                    {{ Auth::user()->home_city }}
                    {{ Auth::user()->home_country }}
                </div>
                 <div>
                    {{ Auth::user()->home_tel }}
                    {{ Auth::user()->mobile }}
                </div>
            </div>
        </div>
    </div>
@endsection