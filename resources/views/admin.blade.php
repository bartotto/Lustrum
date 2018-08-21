@extends('layouts.app')
@section('subtitle', '| '.trans('info.admin'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Alex.jpg" alt="Alex" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.kledinglijn') }} maten</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Al opgegeven:</h5>
                            @foreach ($users as $user)
                                @if($user->size)
                                    <div>{{ $user->first_name}}  {{$user->size}}</div>
                                @endif
                            @endforeach
                            <br>
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
                    </div>
                    <div class="card-footer text-muted">
                        14 aug 18
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Strandborrel.jpg" alt="Strandborrel" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.strand_borrel') }} deelname</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
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
                    </div>
                    <div class="card-footer text-muted">
                        <p>17 aug 18</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
