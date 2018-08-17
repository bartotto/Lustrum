@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <button onclick="goBack()">
           {{ trans('info.back') }}
        </button>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Trips</h2>
            </div>
            <div class="panel-body">             
                <h1>{{ $trip->destination }}</h1>
                {{ $trip->year }}
                <hr>
                <div class="comments">
                    <ul class="list-group">
                        <!-- @foreach ($trip->users as $user)
                            <li class="list-group-item">
                                <strong>
                                    {{ $user->name }}
                                </strong>
                            </li>
                        @endforeach -->
                    </ul>
                </div>     
            </div>
        </div>
    </div>
    @include ('layouts.sidebar')
@endsection
