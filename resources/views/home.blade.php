@extends('layouts.app')
@section('subtitle', '| '.trans('info.home'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <a href="/logo">
                <img class="card-img-top" src="img/Logos/Georgia_new.jpg" alt="Logo Georgia">
            </a>
        </div>
        
        <div class="card">
            <div class="card-header">
                <img src="img/Groep/Georgia.jpg" style="width:100%">
                {{ trans('info.beautiful') }}
            </div>
            <div class="card-body">
                <div class="card-title">{{ trans('info.beautiful_descr1') }}</div>
                <p>{{ trans('info.beautiful_descr2') }}</p>
                <p>{{ trans('info.beautiful_descr3') }}<a href="program">{{ trans('info.program') }}</a>{{ trans('info.beautiful_descr4') }}</p>
                <div id="blueimp-gallery-georgia" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                <div id="links">
                    <a href="img\Trips\Georgia\1.jpg" title="1" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\1.jpg" alt="1"></a>
                    <a href="img\Trips\Georgia\2.jpg" title="2" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\2.jpg" alt="2"></a>
                    <a href="img\Trips\Georgia\3.jpg" title="3" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\3.jpg" alt="3"></a>
                    <a href="img\Trips\Georgia\4.jpg" title="4" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\4.jpg" alt="4"></a>
                    <a href="img\Trips\Georgia\5.jpg" title="5" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\5.jpg" alt="5"></a>
                    <a href="img\Trips\Georgia\6.jpg" title="6" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\6.jpg" alt="6"></a>
                    <a href="img\Trips\Georgia\7.jpg" title="7" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\7.jpg" alt="7"></a>
                    <a href="img\Trips\Georgia\8.jpg" title="8" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\8.jpg" alt="8"></a>
                    <a href="img\Trips\Georgia\9.jpg" title="9" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\9.jpg" alt="9"></a>
                    <a href="img\Trips\Georgia\10.jpg" title="10" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\10.jpg" alt="10"></a>
                    <a href="img\Trips\Georgia\11.jpg" title="11" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\11.jpg" alt="11"></a>
                    <a href="img\Trips\Georgia\12.jpg" title="12" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\12.jpg" alt="12"></a>
                    <a href="img\Trips\Georgia\13.jpg" title="13" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\13.jpg" alt="13"></a>
                    <a href="img\Trips\Georgia\14.jpg" title="14" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\14.jpg" alt="14"></a>
                    <a href="img\Trips\Georgia\15.jpg" title="15" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\15.jpg" alt="15"></a>
                    <a href="img\Trips\Georgia\16.jpg" title="16" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\16.jpg" alt="16"></a>
                    <a href="img\Trips\Georgia\17.jpg" title="17" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\17.jpg" alt="17"></a>
                    <a href="img\Trips\Georgia\18.jpg" title="18" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\18.jpg" alt="18"></a>
                    <a href="img\Trips\Georgia\19.jpg" title="19" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\19.jpg" alt="19"></a>
                    <a href="img\Trips\Georgia\20.jpg" title="20" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\20.jpg" alt="20"></a>
                    <a href="img\Trips\Georgia\21.jpg" title="21" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\21.jpg" alt="21"></a>
                    <a href="img\Trips\Georgia\22.jpg" title="22" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\22.jpg" alt="22"></a>
                    <a href="img\Trips\Georgia\23.jpg" title="23" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\23.jpg" alt="23"></a>
                    <a href="img\Trips\Georgia\24.jpg" title="24" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\24.jpg" alt="24"></a>
                    <a href="img\Trips\Georgia\25.jpg" title="25" data-gallery="#blueimp-gallery-georgia"><img src="img\Trips\Georgia\Thumbnails\25.jpg" alt="25"></a>
                </div>
            </div>
        </div>
        
        <div class="card">
            <a href="img\Strandborrel\1.jpg" title="1" data-gallery="#blueimp-gallery-club">
                <img class="card-img-top" src="img/Strandborrel/2.jpg" alt="Strandborrel">
            </a>
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
                 <div class="card-footer text-muted">
                    10 nov 18
                </div>
            </div>
        @endif
        
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
                    <a href="img\Trips\Georgia\1.jpg" title="1" data-gallery="#blueimp-gallery-georgia">
                        <img src="img/Groep/Georgia.jpg" style="width:100%">
                    </a>
                    <div class="text">Georgia 2018</div>
                </div>
                <div id="blueimp-gallery-group" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
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
@endsection

@push('script-for-view')
    <!-- <script src="{{ asset('js/photo.js') }}"></script> -->
    <script>
        window.addEventListener("load", function() {
            document.getElementById('links').onclick = function (event) {
                event = event || window.event
                var target = event.target || event.srcElement
                var link = target.src ? target.parentNode : target
                var options = { index: link, event: event }
                var links = this.getElementsByTagName('a')
                blueimp.Gallery(links, options)
            }
        });
    </script>
@endpush