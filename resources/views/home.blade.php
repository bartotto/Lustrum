@extends('layouts.app')
@section('subtitle', '| '.trans('info.home'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="img/Other/KaukasischHilarisch.jpeg" alt="Logo Georgia" style="width: 284px">
            <div class="card-header">
                <h2>{{ trans('info.logo_new') }}</h2>
            </div>
            <div class="card-body">

            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Strandborrel.jpg" alt="Strandborrel" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.strand_borrel') }}</h2>
            </div>
            <div class="card-block">
                <div class="card-body">
                    <h5 class="card-title">Op donderdag 30 augustus</h5>
                    <p class="card-text">Partners/vriendinnen ook mee!</p>
                    <p class="card-text">Vanaf 18:00 in Standtent Culpepper, Zwarte Pad, Strand Noord, Scheveningen</p>
                    <a class="btn btn-primary" href="{{ route('profile.edit', ['id'=>Auth::user()->id]) }}">
                        {{ trans('info.join') }}
                    </a>
                </div> 
            </div>
            <div class="card-footer text-muted">
                <p>17 aug 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Alex.jpg" alt="Alex" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.kledinglijn') }}</h2>
            </div>
            <div class="card-block">
                <div class="card-body">
                    <h5 class="card-title">{{ trans('info.kledinglijn_title') }}</h5>
                    <p class="card-text">
                        {{ trans('info.kledinglijn_text') }}<a href="/users/{{ Auth::user()->id }}">{{ trans('info.profile') }}</a>.
                    </p>
                    <p class="card-text">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#maattabel">
                            Maat tabel
                        </button>
                    </p>
                 </div>
            </div>
            <div class="card-footer text-muted">
                14 aug 18
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img src="img/Groep/Kenya.jpg" style="width:100%">
                    <div class="text">Kenya 1989</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img src="img/Groep/Lappland.jpg" style="width:100%">
                    <div class="text">Lappland 1994</div>
                </div>      
                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img src="img/Groep/Cameroun.jpg" style="width:100%">
                    <div class="text">Cameroun 1999</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img src="img/Groep/Oman.jpg" style="width:100%">
                    <div class="text">Oman 2005</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img src="img/Groep/Carpathians.jpg" style="width:100%">
                    <div class="text">Karpaten 2009</div>
                </div>
                 <div class="mySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <img src="img/Groep/Dalarna.jpg" style="width:100%">
                    <div class="text">Dalarna 2014</div>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Question.jpg" alt="Vraag?" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.questions') }}</h2>
            </div>
            <div class="card-block">
                <div class="card-body">
                    <h5 class="card-title">{{ trans('info.questions_go_to') }}<a href="/posts">Blog</a>{{ trans('info.questions_ask') }}</h5>
                    <p class="card-text">{{ trans('info.questions_answer') }}</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                14 aug 18
            </div>
        </div>
        <div class="card" style="width: 100%">
            <img class="card-img-top" src="img/Other/Aart.jpg" alt="Aart" style="width: 284px">
            <div class="card-header">
                <h2>{{ trans('info.president') }}</h2>
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
        <div class="card">
            <img class="card-img-top" src="img/Other/new-100-gel.jpg" alt="Lappen mannen" style="width: 284px">
            <div class="card-header">
                <h2>{{ trans('info.lappen') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.lappen_descr') }}</h5>
                <p>{{ trans('info.lappen_descr1') }}</p>
                <p>{{ trans('info.lappen_descr2') }}</p>
                <p>{{ trans('info.lappen_descr3') }}<a href="budget">{{ trans('info.budget') }}</a></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Departure.jpg" alt="Departure" style="width: 284px">
            <div class="card-header">
                <h2>{{ trans('info.when') }}</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ trans('info.when_descr') }}</h5>
                <p>{{ trans('info.when_descr2') }}</p>
                <p>{{ trans('info.when_descr3') }}<a href="program">{{ trans('info.program') }}</a></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Passport.jpg" alt="Paspoort" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.passport') }}</h2>
            </div>
            <div class="card-block">
                <div class="card-body">
                    <h5 class="card-title">{{ trans('info.passport_title') }}</h5>
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
            <img class="card-img-top" src="img/Other/Insurance.jpg" alt="Verzekering" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.insurance') }}</h2>
            </div>
            <div class="card-block">
                <div class="card-body">
                    <h5 class="card-title">{{ trans('info.insurance_title') }}</h5>
                    <p class="card-text">{{ trans('info.insurance_text') }}</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <p>13 aug 18</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/Other/Rugzak.jpg" alt="Paklijst" height="auto" width="48">
            <div class="card-header">
                <h2>{{ trans('info.packlist') }}</h2>
            </div>
            <div class="card-block">
                <div class="card-body">
                    <h5 class="card-title">{{ trans('info.packlist_title') }}</h5>
                    <p class="card-text">{{ trans('info.packlist_text') }}</p>
                    <p>{{ trans('info.to_follow') }}</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                <p>17 aug 18</p>
            </div>
        </div>
        <div class="modal" tabindex="-1" role="dialog" id="maattabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Echte mannen - maat tabel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Kies:</th>
                                    <th scope="col">Maat</th>
                                    <th scope="col">Borst omtrek (cm)</th>
                                    <th scope="col">Taille omtrek (cm)</th>
                                    <th scope="col">Heup omtrek (cm)</th>
                                    <th scope="col">Mouw lengte (cm)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">S</th>
                                    <td>44</td>
                                    <td>89-93</td>
                                    <td>76-80</td>
                                    <td>88-92</td>
                                    <td>62</td>
                                </tr>
                                <tr>
                                    <th scope="row">M</th>
                                    <td>46</td>
                                    <td>93-97</td>
                                    <td>80-84</td>
                                    <td>92-99</td>
                                    <td>63</td>
                                </tr>
                                <tr>
                                    <th scope="row">M</th>
                                    <td>48</td>
                                    <td>97-101</td>
                                    <td>84-88</td>
                                    <td>96-100</td>
                                    <td>64</td>
                                </tr>
                                <tr>
                                    <th scope="row">L</th>
                                    <td>50</td>
                                    <td>101-105</td>
                                    <td>88-92</td>
                                    <td>100-103</td>
                                    <td>65</td>
                                </tr>
                                   <tr>
                                    <th scope="row">L</th>
                                    <td>52</td>
                                    <td>105-109</td>
                                    <td>92-96</td>
                                    <td>103-106</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <th scope="row">XL</th>
                                    <td>54</td>
                                    <td>109-113</td>
                                    <td>96-100</td>
                                    <td>106-109</td>
                                    <td>67</td>
                                </tr>
                                <tr>
                                    <th scope="row">XL</th>
                                    <td>56</td>
                                    <td>113-117</td>
                                    <td>101-105</td>
                                    <td>109-112</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <th scope="row">2XL</th>
                                    <td>58</td>
                                    <td>117-121</td>
                                    <td>104-108</td>
                                    <td>112-115</td>
                                    <td>69</td>
                                </tr>
                                <tr>
                                    <th scope="row">3XL</th>
                                    <td>60</td>
                                    <td>121-125</td>
                                    <td>108-112</td>
                                    <td>115-118</td>
                                    <td>70</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('info.close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
@endsection
