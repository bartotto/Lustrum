@extends('layouts.app')
@section('subtitle', '| '.trans('info.program'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Other/Kaart_Aart.png" alt="Kaart" height="auto" width="58">
            <div class="card-header">
                {{ trans('info.program') }}
            </div>
            <div class="card-body">
                <div class="card-title">{{ trans('info.program_do') }}</div>
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
                @if(Auth::user()->user_role == 'Member+')
                    <div class="card-title">22/9 Saturday, Telavi</div>
                    <p>Herman praat min. een uur met Marc, Frans met Eduard, Aart met Bart Jan, Andries met Robert Jan, Bart met Alex, Tuut met Rik Jan en Bernd met Bernard.</p>
                    <p>Bart Jan slaapt met Aart, Rik Jan met Bart, Andries met Eduard, Tuut met Robert-Jan, Marc met Alex, Frans met Bernd, Herman met Bernard.</p>
                    <div class="card-title">23/9 Sunday, Omala</div>
                    <p>De Lustrum Commissie heeft na rijp beraad besloten dat het verantwoord is het Praat schema verder vrij te laten.</p>
                    <p>Bart Jan slaapt met Herman, Bart met Eduard, Tuut met Q, Robert-Jan met Aart, Frans met Bernard, Alex met Bernd , Marc met Rik Jan/Andries.</p>
                    <div class="card-title">24/9 Monday, Dartlo</div>
                    <p>Bart Jan slaapt met Bernard, Marc met Q, Frans met Tuut, Robert Jan met Bart, Rik Jan met Aart, Bernd met Andries, Alex met Herman/Eduard.</p>
                    <div class="card-title">25/9 Tuesday, Camp 1</div>
                    <p>Bart Jan slaapt met Alex, , Eduard met Bernard, Q met Robert-Jan, Herman met Marc, Bernd met Rik Jan, Andries met Tuut, Bart met Aart/Frans.</p>
                    <div class="card-title">26/9 Wednesday, Camp 2</div>
                    <p>Frans slaapt met Alex, Andries met Herman, Aart met Ed, Bart met Q, BJ met Robert Jan, Rik Jan met Bernard, Tuut met Marc/Bernd.</p>
                    <div class="card-title">27/9 Thursday, Camp 3</div>
                    <p>Marc slaapt met Ed, Bart met Bernd, Aart met Tuut, Bart Jan met Rik Jan, Frans met Herman, Robert-Jan met Bernard, Alex met Q/Andries.</p>
                    <div class="card-title">28/9 Friday, Jomardi Rafting camp</div>
                    <p>Marc slaapt met Aart, Bart met Tuut, Frans met Andries, Robert-Jan met Ed, Bernard met Q, Alex met Rik Jan, Herman met Bernd/BJ.</p>
                    <div class="card-title">29+30/9 Saturday & Sunday, Tblisi</div>
                    <p>Bernd slaapt met Ed, Bart met Herman, Aart met Q,  Marc met Bart Jan, Alex met Bernard, Frans met Rik Jan, Robert-Jan met Andries, Tuut met….??</p>
                @else
                    <div class="card-title">{{ trans('info.ps_who') }}</div>
                    <p>{{ trans('info.to_follow') }}</p>
                @endif                
            </div>
            <div class="card-footer text-muted">
                <p>8 sept 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Burduli_David.jpg" alt="Gids" height="auto" width="48">
            <div class="card-header">
                {{ trans('info.our_guide') }}
            </div>
            <div class="card-body">
                <div class="card-title">{{ trans('info.guide_info') }}</div>
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
                <div class="card-title">{{ trans('info.contact_info') }}</div>
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
                <div class="card-title">{{ trans('info.questions_go_to') }}<a href="/posts">Blog</a>{{ trans('info.questions_ask') }}</div>
                <p class="card-text">{{ trans('info.questions_answer') }}</p>
            </div>
            <div class="card-footer text-muted">
                <p>10 aug 18</p>
            </div>
        </div>
    </div>
@endsection
