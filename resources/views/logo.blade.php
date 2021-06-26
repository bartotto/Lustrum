@extends('layouts.app')
@section('subtitle', '| '.trans('info.tamada'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Logos/Georgia_new.jpg" alt="Logo Georgia" height="auto" width="48">
            <div class="card-header">
                {{ trans('info.logo_VIIe') }}
            </div>
            <div class="card-body">
                <p class="card-text">Het Lustrumlogo staat zoals altijd symbool voor de unieke kenmerken van de reisbestemming. Georgië wordt ook wel "the cradle of wine culture" genoemd:
                    In de vruchtbare valeien en op de hellingen van de Kaukasus werd volgens archelogen al in Neolitische tijd (8000 v Chr) wijn verbouwd.
                    In de loop van duizenden jaren heeft de wijncultuur een prominente rol ingenomen in de Georgische economie, cultuur en tradities. De tamada vormt de belichaming van deze tradities.
                    Het zal dan ook niemand verbazen dat uw Luco het beeld van de tamada heeft gekozen als logo van onze VIIe Lustrumreis, niet in de laatste plaats vanwege de connectie die wij RSC-ers hebben met de Hoorn des Overvloeds</p>
                <p class="card-text">Voor alle duidelijkheid: het gerucht gaat dat er sprake zou zijn van een ander lustrumlogo, waarin de Georgische minister van Financien belachelijk wordt gemaakt en de Georgische nationale trots wordt gekrenkt.
                    Het is uiteraard volstrekte nonsense te veronderstellen dat uw Luco met een dergelijk logo onnodig risico zou willen nemen.
                    Wij zijn ons terdege bewust van de trotse Georgische volksaard en elke suggestie dat wij deze zouden willen krenken moet dan ook naar het rijk der fabelen worden verwezen.</p>
            </div>
            <div class="card-footer text-muted">
                <p>18 sep 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Tamada.jpg" alt="Tamada" height="auto" width="58">
            <div class="card-header">
                Tamada - An ancient Georgian tradition
            </div>
            <div class="card-body">
                <div class="card-title">As indicated by the President of our Luco Committee,</div>
                <p class="card-text">Georgia is a country with many strong, inspiring traditions.
                    One of these includes the tradition of appointing a tamada, or toastmaster, at every Georgian dinner, supra (feast) or at a wedding.
                    Aart acted as a worthy tamada during our recent get-together on the Scheveningen beach, where he so eloquently (and hilariously!)
                    explained the significance of this tradition.</p>
                <p class="card-text">At all supras regardless of size, there is a tamada, i.e. a person who introduces each toast.
                    Georgians like to say that the tamada is dictator of the table, but it would be more appropriate to compare him to a leader or even a teacher.
                    Tamada traditionally ought to be eloquent, intelligent, smart, sharp−witted and quick−thinking, with a good sense of humor since very often some
                    of the guests might try to compete with him on the toast making. At the Georgian table, a tamada is considered to help bridge the gap between past,
                    present and future, toasting ancestors and descendants as well as the other guests at the table. A toast can be proposed only by a tamada;
                    the rest are to develop the idea. Some toasts take a traditional form; for example, for some toasts all men have to stand up and drink wine in silence.
                    In many cases, however, the guests vie to say something more original and emotional than the previous speaker, and the whole process grows into a sort of oratory contest.</p>
                <p class="card-text">Appropriately for members of our student club RSC, tamadas are usually depicted holding a drinking horn, 'the horn of plenty'.
                    When we are in Tblisi, we'll try to go and see the statue of a real Georgian tamada, see <a href="https://georgiaabout.com/2013/11/19/statues-in-tbilisi/" target=”_blank”>https://georgiaabout.com/2013/11/19/statues-in-tbilisi/</a></p>
                <p class="card-text">Those who wish to be nominated as our next tamadas, please make your selves known to the Luco.</p>
            </div>
            <div class="card-footer text-muted">
                <p>28 aug 18</p>
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
