@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Strandborrel.jpg" alt="Strandborrel" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.strand_borrel') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Op donderdag 30 augustus</h5>
                            <p class="card-text">Partners/vriendinnen ook mee!</p>
                            <p class="card-text">Vanaf 18:00 in Standtent Culpepper, Zwarte Pad, Strand Noord, Scheveningen</p>
                        </div> 
                    </div>
                    <div class="card-footer text-muted">
                        <p>17 aug 18</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Alex.jpg" alt="Alex" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.kledinglijn') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Commissaris heeft met spoed jullie maten nodig!</h5>
                            <p class="card-text">
                                Zoek jouw maat op in de tabel hieronder en registreer deze bij jouw <a href="/users/{{ Auth::user()->id }}">je profiel</a>. 
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
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Passport.jpg" alt="Paspoort" height="auto" width="48">
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
                        <p>13 aug 18</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Insurance.jpg" alt="Verzekering" height="auto" width="48">
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
                        <p>13 aug 18</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="img/Other/Rugzak.jpg" alt="Paklijst" height="auto" width="48">
                    <div class="card-header">
                        <h2>{{ trans('info.pack_list') }}</h2>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            <h5 class="card-title">Ik ga op reis en neem mee</h5>
                            <p class="card-text">De gids zorgt voor tenten en matrassen</p>
                            <p>{{ trans('info.to_follow') }}</p>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <p>17 aug 18</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 100%">
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
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
