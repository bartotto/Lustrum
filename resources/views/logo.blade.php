@extends('layouts.app')
@section('subtitle', '| '.trans('info.underway'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Other/Tamada.jpg" alt="Tamada" height="auto" width="58">
            <div class="card-header">
                <h2>{{ trans('info.logo') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.logo_new') }}</h5>
                <p class="card-text">The choice depends on several factors. There may be a senior person at the table to whom the role naturally falls. In some groups there will be one man who regularly is the tamada because he enjoys it and is good at it. Sometimes groups of friends who gather frequently will rotate the responsibility of being tamada. In many cases, when it comes time to choose, one person — often the oldest member of the table — will propose a candidate for tamada by saying something like, “Kote should be our tamada, shouldn't he?”. Others express agreement and, if Kote raises no serious objections, the person who first suggested the choice raises his glass and proposes the first toast to the tamada – “Kotes Gaumarjos” (to Kote). The supra participants do the same. The newly toasted tamada initiates new toasts from then on.</p>
                
            </div>
            <div class="card-footer text-muted">
                <p>28 aug 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Praat_Slaap.jpg" alt="Slapen" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.ps') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.ps_who') }}</h5>
                <p>{{ trans('info.to_follow') }}</p>
            </div>
            <div class="card-footer text-muted">
                <p>15 aug 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Question.jpg" alt="Vraag?" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.questions') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.questions_go_to') }}<a href="/posts">Blog</a>{{ trans('info.questions_ask') }}</h5>
                <p class="card-text">{{ trans('info.questions_answer') }}</p>
            </div>
            <div class="card-footer text-muted">
                <p>10 aug 18</p>
            </div>
        </div>
    </div>
@endsection
