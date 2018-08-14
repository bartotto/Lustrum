@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/News.jpg" alt="News" height="auto" width="48">
                <div class="card-header">
                    <h2>{{ trans('info.last_news') }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Strandborrel donderdag 30 augustus</h5>
                    <p class="card-text">Partners/vriendinnen ook mee!</p>
                    <p class="card-text">Vanaf 18:00 in Standtent Culpepper, Zwarte Pad, Strand Noord, Scheveningen</p>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/Rugzak.jpg" alt="Paklijst" height="auto" width="48">
                <div class="card-header">
                    <h2>{{ trans('info.pack_list') }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ik ga op reis en neem mee</h5>
                    <p class="card-text">De gids zorgt voor tenten en matrassen</p>
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
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/Passport.jpg" alt="Paspoort" height="auto" width="48">
                <div class="card-header">
                    <h2>{{ trans('info.prep_passport') }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Anders kom je er niet in.</h5>
                    Zorg dat jouw paspoort (bij aankomst) nog 3 maanden geldig is. Voor Georgië is geen visum nodig voor een verblijf van maximaal 1 jaar.
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card card-block">
                <img class="card-img-top" src="img/Insurance.jpg" alt="Verzekering" height="auto" width="48">
                <div class="card-header">
                    <h2>{{ trans('info.prep_insurance') }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Wie haalt je van de berg als je je enkel verzwikt?</h5>
                    Zorg voor een passende reisverzekering. Als je geen doorlopende reisverzekering hebt, sluit er dan nu 1 af.
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
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
