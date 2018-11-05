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
                <p class="card-title">{{ trans('info.budget_descr') }}</p>
                <div class="row">
                    <TABLE>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30"><span style="font-weight:bold">{{ trans('info.budgetDescription') }}</span></TD>
                            <TD align="right"><span style="font-weight:bold">{{ trans('info.budgetBudget') }}</span></TD>
                            <TD align="right"><span style="font-weight:bold">{{ trans('info.budgetActual') }}</span></TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Vliegticket retour AMS - TBI</TD>
                            <TD align="right">€356</TD>
                            <TD align="right">€356</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">"Programma Burduli"</TD>
                            <TD align="right">€780</TD>
                            <TD align="right">€793</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Hotel Rooms, Tblisi</TD>
                            <TD align="right">€180</TD>
                            <TD align="right">€210</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Borrel, diner en uitgaan Tblisi</TD>
                            <TD align="right">€150</TD>
                            <TD align="right">€143</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Programma Gori</TD>
                            <TD align="right">€20</TD>
                            <TD align="right">€20</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">'Out-of-pocket expenses'</TD>
                            <TD align="right">€34</TD>
                            <TD align="right">€29</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Organisatie, satphone etc.</TD>
                            <TD align="right">€20</TD>
                            <TD align="right">€53</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Totaal</TD>
                            <TD align="right">€1.540</TD>
                            <TD align="right">€1.604</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Totaal excl. vliegreis</TD>
                            <TD align="right">€1.184</TD>
                             <TD align="right">€1.248</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">1e storting (voor 31 aug)</TD>
                            <TD align="right">€600</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">2e storting (voor 21 sept)</TD>
                            <TD align="right">€584</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30">Verwachte naheffing</TD>
                            <TD align="right"></TD>
                            <TD align="right">€64</TD>
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
            <img class="card-img-top" src="img/Other/Tikkie.jpg" alt="Tikkie">
            <div class="card-header">{{ trans('info.lappen_status') }}</div>
            <div class="card-body">
                <div class="card-title">{{ trans('info.lappen_gestort') }}</div>
                @foreach ($joiners as $joiner)
                    <div class="row">
                        <div class="col-6">{{ $joiner->first_name}}</div>
                        <div class="col-6 text-right">{{ money_format('%i', $joiner->paid) }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
