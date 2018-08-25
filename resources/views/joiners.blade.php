@extends('layouts.app')
@section('subtitle', '| '.trans('info.joiners'))
@section('content')
    <div class="card-columns">
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.joiners') }}</h2>
            </div>
            <div class="card-body">
                @foreach ($users as $user)
                    @if($user->joins)
                        <div>
                            @if(Auth::user()->user_role != 'Guide')
                                <a href="/users/{{ $user->id }}">{{ $user->first_name }} {{ $user->name }}</a>
                            @else
                                {{ $user->first_name }} {{ $user->name }}
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="card-footer text-muted">
                @if(Auth::user()->user_role != 'Guide')
                    <p class="card-text">{{ trans('info.members_descr') }}</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('info.matrix') }}</h2>
            </div>
            <div class="card-body">
                <img id="myImg" src="img/Other/Matrix_small.png" alt="Matrix">
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
                <h2>{{ trans('info.trips_descr2') }}</h2>
            </div>
            <div class="card-body"> 
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
            <div class="card-footer text-muted">
                <p class="card-text">Binnenkort een nieuwe groepsfoto...</p>
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
                        <img id="myImg" src="img/Other/Matrix.png" alt="Matrix" style="max-width:1400px">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">{{ trans('info.close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/photo.js') }}"></script>
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
@endsection
