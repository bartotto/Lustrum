@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>{{ trans('info.program') }}</h2>
            </div>
            <div class="panel-body">       
                <ul>
                    <li>{{ trans('info.program1') }}</li>
                    <li>{{ trans('info.program2') }}</li>
                    <li>{{ trans('info.program3') }}</li>
                    <li>{{ trans('info.program4') }}</li>
                    <li>{{ trans('info.program5') }}</li>
                    <li>{{ trans('info.program6') }}</li>
                    <li>{{ trans('info.program7') }}</li>
                    <li>{{ trans('info.program8') }}</li>
                    <li>{{ trans('info.program9') }}</li>
                    <li>{{ trans('info.program10') }}</li>
                </ul>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="content">
                                <h3>{{ trans('info.our_guides') }}</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img id="Mamuko" src="img/Mamuko.jpg" width="100%" height="auto">
                                <h5>Mamuko and wife</h5>
                            </div>
                        </div>
                        <div class="col-md-4">   
                            <div class="content">
                                <img id="Mamuko_son" src="img/Mamuko_son.jpg" width="100%" height="auto">
                                <h5>Mamuko's son</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
