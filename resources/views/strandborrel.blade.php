@extends('layouts.app')
@section('subtitle', '| '.trans('info.admin'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Strandborrel.jpg" alt="Strandborrel" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.strand_borrel') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Op donderdag 30 augustus</h5>
                            <p class="card-text">Partners/vriendinnen ook mee!</p>
                            <p class="card-text">Vanaf 18:00 in Standtent Culpepper, Zwarte Pad, Strand Noord, Scheveningen</p>
                        </div> 
                    </div>
                    <div class="card-footer text-muted">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
