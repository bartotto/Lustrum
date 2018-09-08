@extends('layouts.app')
@section('subtitle', '| '.trans('info.underway'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Other/Kaart_Aart.png" alt="Kaart" height="auto" width="58">
            <div class="card-header">
                {{ trans('info.program') }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.program_do') }}</h5>
                <p class="card-text">22/9 Saturday<br>AMS 10:40 KL3108 Arrival TBS 17:15. Drive to wine area Telavi, traditional Georgian diner & overnight stay.</p>
                <p class="card-text">23/9 Sunday<br>AM: visit winecellar & lunch. Driving from Telavi to Omalo 4x4wd (Alexander will catch up in Telavi).</p>
                <p class="card-text">24/9 Monday<br>Driving from Omalo to  Dartlo. Part of the way hiking.</p>
                <p class="card-text">25/9 Tuesday<br>Driving from Dartlo to Girevi. Hiking from Girevi to camp 1.</p>
                <p class="card-text">26/9 Wednesday<br>Hiking from camp 1 to camp 2 (over the Atsunta pass).</p>
                <p class="card-text">27/9 Thursday<br>Hiking from camp 2 to camp 3 near village Ardoti (abandoned village).</p>
                <p class="card-text">28/9 Friday<br>Hiking from camp 3 to Mutso fortress, visiting. Driving from Mutso to Jomardi rafting camp.</p>
                <p class="card-text">29/9 Saturday<br>Driving from Jonardi camp to Tbilisi. On the way visiting old capital, Jvari monastery. Check in <a href="/pdf/ROOMS HOTEL_FACT SHEET.pdf">Hotel Rooms</a>. Club diner & Tbilisi nightlife.</p>
                <p class="card-text">30/9 Sunday<br>Daytrip to  Gori / Stalin museum and visit Cave city Uplistsikhe, afternoon relax in Tbilisi.</p>
                <p class="card-text">01/10 Monday<br>TBI 06:30 KL3109 arrival AMS 09:40.</p>
            </div>
            <div class="card-footer text-muted">
                <p>25 aug 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Praat_Slaap.jpg" alt="Slapen" height="auto" width="48">
            <div class="card-header">
                {{ trans('info.ps') }}
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
            <img class="card-img-top" src="img/Other/Burduli_David.jpg" alt="Gids" height="auto" width="48">
            <div class="card-header">
                {{ trans('info.our_guide') }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.guide_info') }}</h5>
                <p class="card-text">{{ trans('info.guide_info2') }}</p>
            </div>
            <div class="card-footer text-muted">
                10 aug 18
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Burduli_Mamuka.jpg" alt="Gids" height="auto" width="48">
            <div class="card-header">
                {{ trans('info.our_contact') }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.contact_info') }}</h5>
                <p class="card-text">{{ trans('info.contact_info2') }}</p>
            </div>
            <div class="card-footer text-muted">
                10 aug 18
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Question.jpg" alt="Vraag?" height="auto" width="48">
            <div class="card-header">
                {{ trans('info.questions') }}
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
