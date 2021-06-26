@extends('layouts.app')
@section('subtitle', '| '.trans('info.joiners'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                {{ trans('info.joiners') }}
            </div>
            <div class="card-body">
                <ol>
                    @foreach ($joiners as $joiner)
                        <li>
                            <a href="/users/{{ $joiner->id }}">{{ $joiner->first_name }} {{ $joiner->name }}</a>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="card-footer text-muted">
                @if(Auth::user()->hasRole('Member') || Auth::user()->hasRole('Partner'))
                    <p class="card-text">{{ trans('info.members_descr') }}</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                {{ trans('info.matrix') }}
            </div>
            <div class="card-body">
                <img id="myImg" src="/img/Other/Matrix_small.png" alt="Matrix">
                <p class="card-text">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#matrix">
                        {{ trans('info.matrix_click') }}
                    </button>
                </p>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text">De trend is goed!</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                {{ trans('info.trips_descr2') }}
            </div>
            <div class="card-body"> 
                <div class="mySlides fade">
                    <div class="numbertext">1 / 7</div>
                    <img src="/img/Groep/Kenya.jpg" style="width:100%">
                    <div class="text">Kenya 1989</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 7</div>
                    <img src="/img/Groep/Lappland.jpg" style="width:100%">
                    <div class="text">Lappland 1994</div>
                </div>      
                <div class="mySlides fade">
                    <div class="numbertext">3 / 7</div>
                    <img src="/img/Groep/Cameroun.jpg" style="width:100%">
                    <div class="text">Cameroun 1999</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 7</div>
                    <img src="/img/Groep/Oman.jpg" style="width:100%">
                    <div class="text">Oman 2005</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 7</div>
                    <img src="/img/Groep/Carpathians.jpg" style="width:100%">
                    <div class="text">Karpaten 2009</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">6 / 7</div>
                    <img src="/img/Groep/Dalarna.jpg" style="width:100%">
                    <div class="text">Dalarna 2014</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">7 / 7</div>
                    <img src="/img/Groep/Georgia.jpg" style="width:100%">
                    <div class="text">Georgia 2018</div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text"></p>
            </div>
        </div>
        <div class="modal" tabindex="-1" role="dialog" id="matrix">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>{{ trans('info.matrix') }}</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="myImg" src="/img/Other/Matrix.png" alt="Matrix" style="max-width:1400px">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('info.close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-for-view')
    <!-- <script src="{{ asset('js/photo.js') }}"></script> -->
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
    </script>
@endpush