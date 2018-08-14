@extends('layouts.app')

@section('content')
    <div class="card" style="width: 80rem;">
        <div class="card-header">
            <h2>{{ trans('info.program') }}</h2>
        </div>
        <div class="card-body">
            <p>22/09 Saturday: Arrival – drive to wine area Telavi, traditional Georgian diner & overnight stay.</p>
            <p>23/09 Sunday: AM: visit winecellar & lunch. Driving from Telavi to Omalo 4x4wd (Alexander will catch up in Telavi).</p>
            <p>24/09 Monday: Driving from Omalo to  Dartlo. Part of the way hiking.</p>
            <p>25/09 Tuesday: Driving from Dartlo to Girevi. Hiking from Girevi to camp 1.</p>
            <p>26/09 Wednesday: Hiking from camp 1 to camp 2 (over the Atsunta pass).</p>
            <p>27/09 Thursday: Hiking from camp 2 to camp 3 near village Ardoti (abandoned village).</p>
            <p>28/09 Friday: Hiking from camp 3 to Mutso fortress, visiting. Driving from Mutso to Jomardi rafting camp.</p>
            <p>29/09 Saturday: Driving from Jonardi camp to Tbilisi. On the way visiting old capital, Jvari monastery.</p>
            <p>30/09 Sunday: Daytrip to  Gori / Stalin museum and visit Cave city Uplistsikhe, afternoon relax in Tbilisi.</p>
            <p>01/10 Monday: Departure for Adam.</p>
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
                            <h5>Mamuko Burduli and wife</h5>
                        </div>
                    </div>
                    <div class="col-md-4">   
                        <div class="content">
                            <img id="Mamuko_son" src="img/Mamuko_son.jpg" width="100%" height="auto">
                            <h5>David Burduli</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
