@extends('layouts.app')
@section('subtitle', '| '.trans('info.budget'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                <a href="http://www.tabula.ge/en/story/115667-civil-society-activists-protest-lari-depreciation" target="_blank">
                    <img class="card-img-top" src="img/Other/Larikoek.jpg" alt="Lariekoek">
                </a>
                {{ trans('info.budget') }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ trans('info.budget_descr') }}</p>
                <div class="row">
                    <TABLE BORDER="1" STYLE="border-style: solid">
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Vliegticket retour AMS - TBI</TD>
                            <TD align="right">€356</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">"Programma Burduli" van aankomst TBI tot zaterdagmiddag (7 nachten, all-in)</TD>
                            <TD align="right">€780</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Hotel Rooms, Tblisi za 29/8 (2 nachten, incl. ontbijt)</TD>
                            <TD align="right">€180</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Borrel, diner en uitgaan zaterdag</TD>
                            <TD align="right">€75</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Programma Gori zondag</TD>
                            <TD align="right">€20</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Programma zondagmiddag/avond incl. diner</TD>
                            <TD align="right">€75</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">EHBO kit dokter Berning</TD>
                            <TD align="right">€6</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Overige 'out-of-pocket expenses'</TD>
                            <TD align="right">€34</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Kosten organisatie (cadeaus, logo, website)</TD>
                            <TD align="right">€14</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Totaal</TD>
                            <TD align="right">€1.540</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Bijgekomen: Sat phone Bernard</TD>
                            <TD align="right">€22</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px"></TD>
                            <TD align="right"></TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">Totaal excl. vliegreis</TD>
                            <TD align="right">€1.184</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">1e storting (voor 31 aug)</TD>
                            <TD align="right">-€600</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 5px">2e storting (voor 21 sept)</TD>
                            <TD align="right">-€584</TD>
                        </TR>
                    </TABLE>
                </div>
                <br>
                <div class="card-footer text-muted">
                    {{ trans('info.budget_descr2') }}
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Lappen.jpg" alt="Lappen">
            <div class="card-header">
                {{ trans('info.lappen') }}
            </div>
            <div class="card-body">
                <div class="card-title">{{ trans('info.lappen_descr') }}</div>
                <p>{{ trans('info.lappen_descr1') }}</p>
                <p>{{ trans('info.lappen_descr2') }}</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Tikkie.jpg" alt="Tikkie">
            <div class="card-header">
                {{ trans('info.lappen_status') }}
            </div>
            <div class="card-body">
                <div class="card-title">{{ trans('info.lappen_gestort') }}</div>
                @foreach ($users as $user)
                    <div class="row">
                        <div class="col-6">{{ $user->first_name}}</div>
                        <div class="col-6 text-right">{{ money_format('%i', $user->paid) }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
