@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h2>{{ trans('info.trips_descr') }}</h2>
                {{ trans('info.trips_descr2') }} 
            </div>
    
            <div class="panel-body">
                @foreach ($trips as $trip)
                    <li><a href="/trips/{{ $trip->id }}">{{ $trip->destination }}</a></li>
                @endforeach
            </div>
       
        </div>
    </div>
@endsection