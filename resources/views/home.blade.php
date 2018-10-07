@extends('layouts.app')
@section('subtitle', '| '.trans('info.home'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Logos/Georgia_new.jpg" alt="Logo Georgia">
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Rugzak.jpg" alt="Paklijst">
            <div class="card-header">
                {{ trans('info.packlist') }}
            </div>
            <div class="card-body">
                <p>Main backpack. Although the horses will carry our luggage during the hikes, you will want something you can carry comfortably if needed. Don’t forget the rain cover; some packs come with one built-in. </p>
                <p>Day pack which can carry some minimal belongings which you may need during the hike, e.g.:</p>
                <ul>
                    <li>Water bottle</li>
                    <li>Sunglasses</li>
                    <li>Sunburn lotion</li>
                    <li>Rain jacket</li>
                    <li>Gloves</li>
                    <li>Piece of plastic to sit on when we take a break during the day – in case it is wet</li>
                    <li>Nordic walking stick (optional)</li>
                    <li>Passport that is still 6 months valid at departure</li>
                    <li>Appropriate travel insurance</li>
                </ul>
                <p>Main backpack:</p>
                <ul>
                    <li>Sleeping bag & pillow (David will provide tents & mattresses)</li>
                    <li>Hiking boots offering sufficient support in rough terrain</li>
                    <li>Clothes suitable for warm, cold, rainy and dry weather conditions</li>
                    <li>swimming trunks</li>
                    <li>Luco Kledinglijn Committee will arrange fleece & cap</li>
                    <li>Toiletries, towel</li>
                    <li>IOUs</li>
                    <li>The Luco will bring a First aid kit. You are responsible for any personal medicine.</li>
                    <li>Knife or multi-purpose tool</li>
                    <li>Torch or headlamp: plus extra batteries</li>
                    <li>Solar battery charger</li>
                    <li>BONUS: Trash Bag. A zip lock bag is a great option</li>
                </ul>
                <p>Water filter not required – the water from the streams is safe to drink</p>
                <p></p>
            </div>
            <div class="card-footer text-muted">
                <p>17 aug 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Strandborrel/2.jpg" alt="Strandborrel">
            <div class="card-header">
                {{ trans('info.strand_borrel') }}
            </div>
            <div class="card-body">
                <div class="card-title">Opkomst boven verwachting</div>
                <p class="card-text">Mooi dat er zoveel dames bij waren in standtent Culpepper in Scheveningen</p>
                <p class="card-text">Goed dat Hennink bij de borrel was en dat Jacqueline erbij was. De club leeft en de spanning voor de komende reis is voelbaar... Dames smeden plannen om tijdens de reis bij elkaar te komen? Wordt vervolgd... Klik op een foto hieronder voor de plaatjes</p>
            </div> 
            <div id="blueimp-gallery-club" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                <div id="links">
                    <a href="img\Strandborrel\1.jpg" title="1" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\1.jpg" alt="1"></a>
                    <a href="img\Strandborrel\2.jpg" title="2" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\2.jpg" alt="2"></a>
                    <a href="img\Strandborrel\3.jpg" title="3" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\3.jpg" alt="3"></a>
                    <a href="img\Strandborrel\4.jpg" title="4" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\4.jpg" alt="4"></a>
                    <a href="img\Strandborrel\5.jpg" title="5" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\5.jpg" alt="5"></a>
                    <a href="img\Strandborrel\6.jpg" title="6" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\6.jpg" alt="6"></a>
                    <a href="img\Strandborrel\7.jpg" title="7" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\7.jpg" alt="7"></a>
                    <a href="img\Strandborrel\8.jpg" title="8" data-gallery="#blueimp-gallery-club"><img src="img\Strandborrel\Thumbnails\8.jpg" alt="8"></a>
                </div>
            <div class="card-footer text-muted">
                <p>17 aug 18</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 7</div>
                    <img src="img/Groep/Kenya.jpg" style="width:100%">
                    <div class="text">Kenya 1989</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 7</div>
                    <img src="img/Groep/Lappland.jpg" style="width:100%">
                    <div class="text">Lappland 1994</div>
                </div>      
                <div class="mySlides fade">
                    <div class="numbertext">3 / 7</div>
                    <img src="img/Groep/Cameroun.jpg" style="width:100%">
                    <div class="text">Cameroun 1999</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 7</div>
                    <img src="img/Groep/Oman.jpg" style="width:100%">
                    <div class="text">Oman 2005</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 7</div>
                    <img src="img/Groep/Carpathians.jpg" style="width:100%">
                    <div class="text">Karpaten 2009</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">6 / 7</div>
                    <img src="img/Groep/Dalarna.jpg" style="width:100%">
                    <div class="text">Dalarna 2014</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">7 / 7</div>
                    <img src="img/Groep/Georgia.jpg" style="width:100%">
                    <div class="text">Georgia 2018</div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <img class="card-img-top" src="img/Other/Aart.jpg" alt="Aart">
            <div class="card-header">
                {{ trans('info.president') }}
            </div>
            <div class="card-body">
                <p>Mijne Heeren,<br>Beste Clubgenoten,</p>
                <p>September 1983 ligt inmiddels bijna 35 jaar achter ons. Het was en blijft een unieke maand met ontelbare nieuwe ervaringen, indrukken, nieuwe vriendjes en met uiteraard als hoogtepunt de mooie en prille conceptie van wat enige maanden zou uitgroeien tot Caligula. Al 35 jaar, 7x5 Caligula. Van jaarclub tot instituut…..een hechte band…..dikke vrienden..!</p>
                <p>35 jaar van mooie momenten en heerlijke gemeenschappelijke herinneringen. 35 jaar van vriendschap op allerlei verschillende niveaus. Ook 35 jaar van verandering, individuele ontwikkeling, nieuwe en andere verwantschappen en prioriteiten. Ook al bewandelen we verschillende paden in het leven, onze wegen blijven elkaar kruisen. Uw Lustrum Commissie is daarom niet verbaasd, maar wel zeer verheugd, dat wij ons VII<sup>e</sup> Lustrum met een indrukwekkend aantal van 14 (wellicht 15) clubgenoten gaan beleven. Dat hebben we in de afgelopen 25 jaar niet meer mee mogen maken! Bij de Lustrumreizen ging kwaliteit altijd voor kwantiteit, echter het is bijzonder waardevol dat wij over enige weken met zo’n grote clubafvaardiging afreizen naar een unieke plek voor een inspirerend en hilarisch samenzijn.</p>
                <p>Ons VII<sup>e</sup> Lustrum is het moment om de herinneringen levend te houden, echter belangrijker, om samen het heden te ervaren en vooruit te kijken naar de toekomst. We gaan gezamenlijk nieuwe en unieke herinneringen creëren en zo onze band onderhouden, opnieuw aanhalen of versterken. De Lustrumreis met het bewezen en onverslaanbare concept van natuur, avontuur en cultuur, biedt hiervoor de ultieme opportuniteit.</p>
                <p>We gaan de uitdaging aan met elkaar nieuwe inspirerende paden te vinden, daar is geen coach voor nodig. We hebben tenslotte in onze groep ‘vrienden voor het leven’ veel talent, ervaring en passie waardoor verdere verdieping en verbinding spontaan kan plaats vinden  Onze VII<sup>e</sup> Lustrumreis gaat wederom naar een unieke ‘say yes’ bestemming, een bestemming die nog niemand van de club kent; een plek aan de uiterste zuidoostelijke grens van Europa en het westen van Azië, in het hart van de Kaukasus, de één na langste bergketen van Europa, aan de voet van de Elbroes, de hoogste berg van Europa: Georgië. Een gebied dat zo ver, hoog en onherbergzaam is dat de machtigste legers van Alexander de Grote, de Romeinse keizers, het Ottomaanse rijk en Nazi-Duitsland er niet in slaagden het in te lijven. In dit bijzondere gebied zullen wij buiten onze comfortzone treden, nieuwe avonturen tegemoet.</p>
                <p>Door zijn bijzondere ligging, ingeklemd tussen Azerbeidzjan, Rusland, Turkije en de Zwarte Zee, is Georgië een kruispunt van culturen maar heeft het niettemin een zeer eigen identiteit. Een land met archaïsche maar ook inspirerende tradities. Elke maaltijd begint bijvoorbeeld met het benoemen van een ‘Tamada’, de toastmaster, degene die de cadans van de borrel-flow bepaald. Tevens worden diner gangen niet afgeruimd, maar dient men deze te laten staan, de volgende gang wordt er bovenop gestapeld. De vrouwen bereiden de maaltijd en komen aan het einde rond de tafel om te zingen. Het is een land met een nog authentieke ‘macho’ cultuur, kortom een land voor Caligula om mee kennis te maken.</p>
                <p>Wij spreken de hoop uit dat de vernieuwde website, ontwikkeld door onze onvolprezen webmaster, er mede toe zal bijdragen dat U hernieuwd bevangen raakt door de Lustrumkoorts. Samen met uw clubgenoten op een gezamenlijke en persoonlijke reis vol ongekende uitdagingen, verdiepende reflecties, eindeloze inspiratie en hilariteit, veel hilariteit.</p>
                <p>Graag sluit ik af met de woorden<br>
                Mijne heren, Say yes to another excess! Geld speelt geen rol ! Lappen Mannen! Caligula Goes Gorilla!
                Wat? Water! Gimme 5 + 18 beer, We will Survive, Kaukasich Hilarisch..…!</p>
                <p>Namens de Lustrum Commissie,<br>
                Aart<br>
                President</p>
            </div>
        </div>
        
        @if(Auth::user()->hasRole('Member'))
            <div class="card">
                <a href="http://www.tabula.ge/en/story/115667-civil-society-activists-protest-lari-depreciation" target="_blank">
                    <img class="card-img-top" src="img/Other/Larikoek.jpg" alt="Larikoek">
                </a>
                <div class="card-header">
                    {{ trans('info.lappen') }}
                </div>
                <div class="card-body">
                    <div class="card-title">{{ trans('info.lappen_descr') }}</div>
                    <p>{{ trans('info.lappen_descr1') }}</p>
                    <p>{{ trans('info.lappen_descr2') }}</p>
                    <p>{{ trans('info.lappen_descr3') }}<a href="budget">{{ trans('info.budget') }}</a></p>
                </div>
            </div>
        @endif
        
        <div class="card">
            <img class="card-img-top" src="img/Other/Pet.jpg" alt="Pet">
            <div class="card-header">
                Sneak preview Kledinglijn
            </div>
            <div class="card-body">
                <p>{{ trans('info.pet_preview') }}</p>
            </div>
        </div>
        
        <div class="card">
            <img class="card-img-top" src="img/Other/Sat_phone.jpg" alt="Sat phone">
            <div class="card-header">
                Satelliet telefoon
            </div>
            <div class="card-body">
                <div class="card-title">Ons bellen</div>
                <p>Het nummer van de Iridium telefoon welke mee gaat = + of 008816 3145 0398.
                    Het is niet aan te raden om rechtstreeks naar de Iridium te bellen, daar bijv. KPN bijna 8 euro per minuut rekent.
                    Staat vervolgens de Iridium niet aan, wordt u doorgeschakeld naar een voicemail menu.
                    Om naar de Iridium toe te bellen is de goedkoopste optie via een switch, het zgn. Two Stage Dialing Access.
                    Bel naar het volgende nummer in de US: + of 001 480 768 2500 en toets daarna het 12 cijferig Iridium nummer: 8816 3145 0398 in.
                    De beller heeft dan de kosten voor het gesprek naar de US (tegenwoordig niet zo duur meer +/- 8 cent/min.).
                    De ontvanger op de Iridium heeft de kosten voor Two Stage Dialing Access.</p>
                <div class="card-title">Ons een bericht sturen</div>
                <p>U kunt ook een voor beide partijen <font color="red">gratis (en onbeperkt) sms-je sturen</font> (met een max. van 5 stuks per 10 minuten).
                    Er kan rechtstreeks een "sms" worden gestuurd naar de telefoon via het volgende emailadres:
                    <a href="mailto:881631450398@msg.iridium.com" target="_top">881631450398@msg.iridium.com</a>.</p>
                <p>De regel "onderwerp" leeg laten, deze wordt niet meegezonden. De tekst van max. 160 karakters (incl. emailadres van afzender) ingeven in het grote tekstblok
                    (waarin u nu aan het lezen bent). Wel zelf even de telling bijhouden. Bij verzending op deze manier is er meestal geen vertraging, maar soms kan er enige
                    tot zelfs flinke vertraging ontstaan in de "bezorgtijd".</p>
                <p>Wilt u dat het bericht vrijwel onmiddellijk aankomt, kunt u beter de link op onze website
                    <a href="http://www.satcomm.nl/pagina/3/service#">http://www.satcomm.nl/pagina/3/service#</a> gebruiken.
                    Klik op het Iridium Logo bij "Stuur Iridium satelliet sms" en u krijgt een nieuw messagescherm van Iridium.</p>
                <p>Of rechtstreeks: <a href="http://messaging.iridium.com/">http://messaging.iridium.com/</a>. In het bovenste vak het nummer aanvullen met de laatste acht cijfers van het telefoonnummer (dus 3145 0398 zonder spaties).
                    Het volgende vak "emailadres" (van de afzender) is belangrijk, zorg dat deze foutloos wordt ingevuld, omdat u als gebruiker van een Iridium 9555 een reply kunt geven.
                    Wordt dit vak ingevuld, dan hoeft u bij een reply zelf het emailadres niet in te geven en staat dit al voor u klaar in het display. 
                    Vervolgens tekst ingeven met een max. van 160 karakters (de telling wordt voor u bijgehouden) en vervolgens op "send " klikken.</p>
                <p>Het versturen naar en het ontvangen van deze "sms" op de Iridium is geheel gratis (systeem handelt max. 5 berichten, per 10 minuten, per nummer af).</p>
                <p>(met dank aan de lustrum communicatie manager Bernard)</p>
            </div>
        </div>
        
        <div class="card">
            <img class="card-img-top" src="img/Other/Departure.jpg" alt="Departure">
            <div class="card-header">
                {{ trans('info.when') }}
            </div>
            <div class="card-body">
                <div class="card-title">{{ trans('info.when_descr') }}</div>
                <p>{{ trans('info.when_descr2') }}</p>
                <p>{{ trans('info.when_descr3') }}<a href="program">{{ trans('info.program') }}</a></p>
            </div>
        </div>
        
        <div class="card">
            <img class="card-img-top" src="img/Other/Passport.jpg" alt="Paspoort">
            <div class="card-header">
                {{ trans('info.passport') }}
            </div>
            <div class="card-block">
                <div class="card-body">
                    <div class="card-title">{{ trans('info.passport_title') }}</div>
                    <p class="card-text">{{ trans('info.passport_text') }}</p>
                    <p class="card-text">{{ trans('info.passport_text2') }}
                        <a href="https://www.anwb.nl/vakantie/georgie/informatie/reisdocumenten">ANWB</a>{{ trans('info.passport_text3') }}
                        <a href="https://www.landenkompas.nl/georgie">Landenkompas</a>{{ trans('info.passport_text4') }}
                    </p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <p>13 aug 18</p>
            </div>
        </div>
        
        <div class="card">
            <img class="card-img-top" src="img/Other/Insurance.jpg" alt="Verzekering">
            <div class="card-header">
                {{ trans('info.insurance') }}
            </div>
            <div class="card-block">
                <div class="card-body">
                    <div class="card-title">{{ trans('info.insurance_title') }}</div>
                    <p class="card-text">{{ trans('info.insurance_text') }}</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <p>13 aug 18</p>
            </div>
        </div>
        
        <div class="card">
            <img class="card-img-top" src="img/Other/Question.jpg" alt="Vraag?">
            <div class="card-header">
                {{ trans('info.questions') }}
            </div>
            <div class="card-block">
                <div class="card-body">
                    <div class="card-title">{{ trans('info.questions_go_to') }}<a href="/posts">Blog</a>{{ trans('info.questions_ask') }}</div>
                    <p class="card-text">{{ trans('info.questions_answer') }}</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                14 aug 18
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
