@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/News.jpg" alt="News" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.last_news') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Strandborrel donderdag 30 augustus</h5>
                            <p class="card-text">Partners/vriendinnen ook mee!</p>
                            <p class="card-text">Vanaf 18:00 in Standtent Culpepper, Zwarte Pad, Strand Noord, Scheveningen</p>
                        </div> 
                    </div>
                    <div class="card-footer text-muted">
                        <p>12 augustus 2018</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Alex.jpg" alt="Alex" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.kledinglijn') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Commissaris heeft met spoed jullie maten nodig!</h5>
                            <p class="card-text">Zoek jouw maat op in de tabel hieronder en registreer het getal
                                in de eerste kolom bij <a href="/users/{{ Auth::user()->id }}">je profiel</a>. 
                            </p>
                            <p class="card-text">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#maattabel">
                                    Maat tabel
                                </button>
                            </p>
                         </div>
                    </div>
                    <div class="card-footer text-muted">
                        14 augustus 2018
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Passport.jpg" alt="Paspoort" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.prep_passport') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Anders kom je er echt niet in, apekop...</h5>
                            <p class="card-text">Zorg dat jouw paspoort (bij aankomst) nog 3 maanden geldig is.
                                Voor Georgië is geen visum nodig voor een verblijf van maximaal 1 jaar.</p>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <p>13 augustus 2018</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Insurance.jpg" alt="Verzekering" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.prep_insurance') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Wie haalt je van de berg als je je enkel verzwikt?</h5>
                            <p class="card-text">Zorg voor een passende reisverzekering. Als je geen doorlopende
                                reisverzekering hebt, sluit er dan nu 1 af.</p>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <p>13 augustus 2018</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Rugzak.jpg" alt="Paklijst" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.pack_list') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Ik ga op reis en neem mee</h5>
                            <p class="card-text">De gids zorgt voor tenten en matrassen</p>
                            <ul style="list-style-type:none">
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <p>Volgt begin september.<br>Stay tuned.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Question.jpg" alt="Vraag?" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.questions') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Ga naar <a href="/posts">Blog</a> en stel je vraag</h5>
                            <p class="card-text">De Luco probeert binnen 24 uur met een goed antwoord te komen</p>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        14 augustus 2018
                    </div>
                </div>
            </div>
            <div class="modal" id="maattabel">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Echte mannen - maat tabel</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Jouw maat</th>
                                        <th scope="col">EU</th>
                                        <th scope="col">Borst omtrek (cm)</th>
                                        <th scope="col">Taille omtrek (cm)</th>
                                        <th scope="col">Heup omtrek (cm)</th>
                                        <th scope="col">Mouw lengte (cm)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">44</th>
                                        <td>S</td>
                                        <td>89-93</td>
                                        <td>76-80</td>
                                        <td>88-92</td>
                                        <td>62</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">46</th>
                                        <td>M</td>
                                        <td>93-97</td>
                                        <td>80-84</td>
                                        <td>92-99</td>
                                        <td>63</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">48</th>
                                        <td>M</td>
                                        <td>97-101</td>
                                        <td>84-88</td>
                                        <td>96-100</td>
                                        <td>64</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">50</th>
                                        <td>L</td>
                                        <td>101-105</td>
                                        <td>88-92</td>
                                        <td>100-103</td>
                                        <td>65</td>
                                    </tr>
                                       <tr>
                                        <th scope="row">52</th>
                                        <td>L</td>
                                        <td>105-109</td>
                                        <td>92-96</td>
                                        <td>103-106</td>
                                        <td>66</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">54</th>
                                        <td>XL</td>
                                        <td>109-113</td>
                                        <td>96-100</td>
                                        <td>106-109</td>
                                        <td>67</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">56</th>
                                        <td>XL</td>
                                        <td>113-117</td>
                                        <td>101-105</td>
                                        <td>109-112</td>
                                        <td>68</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">58</th>
                                        <td>2XL</td>
                                        <td>117-121</td>
                                        <td>104-108</td>
                                        <td>112-115</td>
                                        <td>69</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">60</th>
                                        <td>3XL</td>
                                        <td>121-125</td>
                                        <td>108-112</td>
                                        <td>115-118</td>
                                        <td>70</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ trans('info.close') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
