@extends('layouts.app')
@section('subtitle', '| '.trans('info.budget'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                <img class="card-img-top" src="img/Other/new-100-gel.jpg" alt="Lappen mannen" style="width: 284px">
                <h2>{{ trans('info.budget') }}</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{ trans('info.budget_descr') }}</p>
                <div class="row">
                    <TABLE BORDER="1" STYLE="border-style: solid">
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Vliegticket retour AMS - TBI</TD>
                            <TD align="right">€356</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">"Programma Burduli" van aankomst TBI tot zaterdagmiddag (7 nachten, all-in)</TD>
                            <TD align="right">€780</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Hotel Rooms, Tblisi za 29/8 (2 nachten, incl. ontbijt)</TD>
                            <TD align="right">€180</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Borrel, diner en uitgaan zaterdag</TD>
                            <TD align="right">€75</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Programma Gori zondag</TD>
                            <TD align="right">€20</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Programma zondagmiddag/avond incl. diner</TD>
                            <TD align="right">€75</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Overige 'out-of-pocket expenses'</TD>
                            <TD align="right">€40</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Kosten organisatie (cadeaus, logo, website)</TD>
                            <TD align="right">€14</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Totaal</TD>
                            <TD align="right">€1.540</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px"></TD>
                            <TD align="right"></TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Totaal excl. vliegreis</TD>
                            <TD align="right">€1.184</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">1e storting (voor 31 aug)</TD>
                            <TD align="right">-€600</TD>
                        </TR>
                        <TR>
                            <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">2e storting (voor 21 sept)</TD>
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
            <img class="card-img-top" src="img/Other/Lappen.jpg" alt="Lappen" style="width: 368px">
            <div class="card-header">
                <h2>{{ trans('info.lappen') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.lappen_descr') }}</h5>
                <p>{{ trans('info.lappen_descr1') }}</p>
                <p>{{ trans('info.lappen_descr2') }}</p>
            </div>
        </div>
                <div class="card">
            <div class="card-body"> 
                <div class="row">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 6</div>
                        <img src="img/Groep/Kenya.jpg" style="max-width:100%">
                        <div class="text">Kenya 1989</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 6</div>
                        <img src="img/Groep/Lappland.jpg" style="max-width:100%">
                        <div class="text">Lappland 2004</div>
                    </div>      
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 6</div>
                        <img src="img/Groep/Cameroun.jpg" style="max-width:100%">
                        <div class="text">Cameroun 2009</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 6</div>
                        <img src="img/Groep/Oman.jpg" style="max-width:100%">
                        <div class="text">Oman 2005</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                        <img src="img/Groep/Carpathians.jpg" style="max-width:100%">
                        <div class="text">Carpathians 2009</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">6 / 6</div>
                        <img src="img/Groep/Dalarna.jpg" style="max-width:100%">
                        <div class="text">Dalarna 2014</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Tikkie.jpg" alt="Tikkie" style="width: 350px">
            <div class="card-header">
                <h2>{{ trans('info.lappen_status') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.lappen_gestort') }}</h5>
                <ol>
                    @foreach ($users as $user)
                        <div class="row">
                            <div class="col-sm">{{ $user->first_name}}</div>
                            <div class="col-sm text-right">€ {{ $user->paid }}</div>
                        </div>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
