@extends('layouts.app')
@section('subtitle', '| '.trans('info.budget'))
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-block">
                    <div class="card-header">
                        <h2>{{ trans('info.budget') }}</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ trans('info.budget_descr') }}</p>
                        <div class="row">
                            <TABLE BORDER="1" STYLE="border-style: solid">
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Vliegticket retour AMS - TBI</TD>
                                    <TD align="right">356</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">"Programma Burduli" van aankomst TBI tot zaterdagmiddag (all-in)</TD>
                                    <TD align="right">780</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Hotel Tbishi za 29/8 (2 nachten, incl ontbijt)</TD>
                                    <TD align="right">90</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Borrel, diner en uitgaan zaterdag</TD>
                                    <TD align="right">75</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Programma Gori zondag</TD>
                                    <TD align="right">20</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Programma zondagmiddag/avond incl. diner</TD>
                                    <TD align="right">75</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Overige 'out-of-pocket expenses'</TD>
                                    <TD align="right">40</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Kosten organisatie (Cadeaus, logo, website)</TD>
                                    <TD align="right">14</TD>
                                </TR>
                                <TR>
                                    <TD WIDTH="365" HEIGHT="30" STYLE="padding-left: 10px">Totaal</TD>
                                    <TD align="right">1.450</TD>
                                </TR>
                            </TABLE>
                        </div>
                        <br>
                        <div class="card-footer text-muted">
                            {{ trans('info.budget_descr2') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-block">
                    <div class="card-header">
                        <h2>{{ trans('info.trips_descr2') }}</h2>
                    </div>
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
                    <div class="card-footer text-muted">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
