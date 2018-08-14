@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/Kaart_Aart.png" alt="Kaart" height="auto" width="58">
                <div class="card-header">
                    <h2>{{ trans('info.program') }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Dit gaan we doen</h5>
                    <p class="card-text">22/9 Saturday<br>Arrival – drive to wine area Telavi, traditional Georgian diner & overnight stay.</p>
                    <p class="card-text">23/9 Sunday<br>AM: visit winecellar & lunch. Driving from Telavi to Omalo 4x4wd (Alexander will catch up in Telavi).</p>
                    <p class="card-text">24/9 Monday<br>Driving from Omalo to  Dartlo. Part of the way hiking.</p>
                    <p class="card-text">25/9 Tuesday<br>Driving from Dartlo to Girevi. Hiking from Girevi to camp 1.</p>
                    <p class="card-text">26/9 Wednesday<br>Hiking from camp 1 to camp 2 (over the Atsunta pass).</p>
                    <p class="card-text">27/9 Thursday<br>Hiking from camp 2 to camp 3 near village Ardoti (abandoned village).</p>
                    <p class="card-text">28/9 Friday<br>Hiking from camp 3 to Mutso fortress, visiting. Driving from Mutso to Jomardi rafting camp.</p>
                    <p class="card-text">29/9 Saturday<br>Driving from Jonardi camp to Tbilisi. On the way visiting old capital, Jvari monastery.</p>
                    <p class="card-text">30/9 Sunday<br>Daytrip to  Gori / Stalin museum and visit Cave city Uplistsikhe, afternoon relax in Tbilisi.</p>
                    <p class="card-text">01/10 Monday<br>Departure for Adam.</p>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/Praat_Slaap.jpg" alt="Slapen" height="auto" width="48">
                <div class="card-header">
                    <h2>Praat & Slaap schema</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Wie met wie?</h5>
                    <ul style="list-style-type:none">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ul>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/Burduli_David.jpg" alt="Gids" height="auto" width="48">
                <div class="card-header">
                    <h2>{{ trans('info.our_guide') }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">David Burduli zal ons over de pas leiden</h5>
                    <p class="card-text">De algehele leiding heeft zijn vader Mamuka Burduli, hieronder met zijn vrouw</p>
                </div>
                <div class="card-footer text-muted">
                    <img class="card-img-bottom" src="img/Burduli_Mamuka.jpg" alt="Mamuka" height="auto" width="48">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/Question.jpg" alt="Vraag?" height="auto" width="48">
                <div class="card-header">
                    <h2>{{ trans('info.questions') }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ga naar <a href="/posts">Blog</a> en stel je vraag</h5>
                    <p class="card-text">De Luco probeert binnen 24 uur met een goed antwoord te komen</p>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
