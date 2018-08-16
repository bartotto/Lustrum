@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card" style="height: 100%;">
                    <img class="card-img-top" src="img\KaukasischHilarisch.jpeg" alt="Aart" height="auto" width="48">
                    <div class="card-header">
                        <h2>VII<sup>e</sup> Lustrumreis</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif                 
                            <div class="content">
                                <p>{{ trans('info.home_descr') }}</p>
                                <p>{{ trans('info.home_descr2') }}</p>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="card card-block">
                    <img class="card-img-top" src="img/Aart.jpg" alt="Aart" style="width: 284px">
                    <div class="card-header">
                        <h2>{{ trans('info.president') }}</h2>
                    </div>
                    <div class="card-body">
                        <p>Mijne Heeren,<br>Beste Clubgenoten,</p>
                        <p>September 1983 ligt inmiddels bijna 35 jaar achter ons. Het was en blijft een unieke maand met
                            ontelbare nieuwe ervaringen, indrukken, nieuwe vriendjes en met uiteraard als hoogtepunt de
                            mooie en prille conceptie van wat enige maanden zou uitgroeien tot Caligula. Al 35 jaar,
                            7x5 Caligula. Van jaarclub tot instituut…..een hechte band…..dikke vrienden..!</p>
                        <p>35 jaar van mooie momenten en heerlijke gemeenschappelijke herinneringen. 35 jaar van 
                            vriendschap op allerlei verschillende manieren, van adhoc, ja zelfs opportunities tot door dik en dun. 
                            Ook 35 jaar van verandering, individuele ontwikkeling, nieuwe en andere verwantschappen en prioriteiten.
                            Uw Lustrum Commissie is daarom zo verheugd dat wij ons 7de Lustrum met een indrukwekkend aantal van 14
                        (wellicht 15) clubgenoten gaan beleven. Dat hebben we in de afgelopen 25 jaar niet meer mee mogen maken!
                        Bij de Lustrumreizen ging kwaliteit altijd voor kwantiteit, echter het is bijzonder waardevol dat wij
                        over enige weken met zo’n grote clubafvaardiging afreizen naar een unieke plek voor een inspirerend en
                        hilarisch samenzijn.</p>
                        <p>Ons VII<sup>e</sup> Lustrum is het moment om de herinneringen levend te houden, echter belangrijker,
                            om samen het heden te ervaren en vooruit te kijken naar de toekomst. Laten we gezamenlijk nieuwe
                            en unieke herinneringen creëren en zo onze band onderhouden, opnieuw aan te halen of te versterken.
                            De Lustrumreis met het bewezen en onverslaanbare concept van natuur, avontuur en cultuur, biedt
                            hiervoor de ultieme opportuniteit.</p>
                        <p>We gaan de uitdaging aan met elkaar nieuwe inspirerende paden te vinden, daar is geen coach voor nodig.
                            We hebben tenslotte in onze groep ‘vrienden voor het leven’  veel talent, ervaring en passie waardoor
                            verdere verdieping en verbinding spontaan kan plaats vinden. Plaats kan vinden op een wel heel unieke
                            ‘say yes’ plek, Georgie een verre en hoge uithoek van het Romeinse rijk, ingeklemd tussen Azerbeidzjan,
                            Rusland en Turkije. Een land met achterhaalde maar ook inspirerende tradities. Elke maaltijd begint
                            met het benoemen van een ‘Tamada’, de toastmaster, degene die de cadans van de borrel flow bepaald.
                            Tevens worden diner gangen niet afgeruimd, maar dient men deze te laten staan, de volgende gang wordt
                            er bovenop gestapeld. De vrouwen bereiden de maaltijd en komen aan het einde rond de tafel om te zingen.
                            Het is een land met een nog authentieke ‘macho’ cultuur, kortom een land voor Caligula om mee kennis
                            te maken.</p>
                        <p>Wij spreken de hoop uit dat de vernieuwde website, ontwikkeld door onze webmaster, er mede toe
                            zal bijdrage dat U hernieuwd bevangen raakt door de Lustrumkoorts. Samen met uw clubgenoten op een
                            gezamelijke en persoonlijke reis vol ongekende uitdagingen, verdiepende reflecties, eindeloze
                            inspiratie en lol, veel lol.</p>
                        <p>Graag sluit ik af met de woorden<br>
                        Mijne heren, Say yes to another excess! Geld speelt geen rol ! Lappen Mannen! Caligula Goes Gorilla!
                        Wat? Water! Gimme 5 + 18 beer, We will Survive, Kaukasich Hilarisch..…!</p>
                        <p>Namens de Lustrum Commissie,<br>
                        Aart<br>
                        President</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-block">
                    <br>
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 6</div>
                        <img src="img\Groep\Kenya.jpg" style="width:100%">
                        <div class="text">Kenya 1989</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 6</div>
                        <img src="img\Groep\Lappland.jpg" style="width:100%">
                        <div class="text">Lappland 1994</div>
                    </div>      
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 6</div>
                        <img src="img\Groep\Cameroun.jpg" style="width:100%">
                        <div class="text">Cameroun 1999</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 6</div>
                        <img src="img\Groep\Oman.jpg" style="width:100%">
                        <div class="text">Oman 2005</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                        <img src="img\Groep\Carpathians.jpg" style="width:100%">
                        <div class="text">Karpaten 2009</div>
                    </div>
                     <div class="mySlides fade">
                        <div class="numbertext">6 / 6</div>
                        <img src="img\Groep\Dalarna.jpg" style="width:100%">
                        <div class="text">Dalarna 2014</div>
                    </div>
                    <br>
                    <br>
                    <div class="card-header">
                        <h2>{{ trans('info.past_trips') }}</h2>
                    </div>
                    <div class="card-body"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
