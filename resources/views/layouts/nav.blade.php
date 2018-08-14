<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src= "img/Caligula.png" width="60" height="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ trans('info.login') }}</a>
                        <!-- <li><a href="{{ route('register') }}">{{ trans('info.register') }}</a></li> -->
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('georgia') }}">{{ trans('info.destination') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('program') }}">{{ trans('info.program') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('preparations') }}">{{ trans('info.prep') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts')   }}">{{ trans('info.blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kenia')   }}">{{ trans('info.trips') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="{{ route('users') }}  ">{{ trans('info.club') }}</a>
                            <a class="dropdown-item" href="{{ route('joiners') }}">{{ trans('info.joiners') }}</a>
                            <a class="dropdown-item" href="{{ route('luco') }}   ">{{ trans('info.luco') }}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="/users/{{ Auth::user()->id }}">{{ trans('info.profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ trans('info.logout') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                        </div>
                    </li>
                    <!--
                    @if (app()->getLocale() == 'en')
                        <a class="nav-item nav-link" href="{{ language()->back('nl') }}">
                            <img src='\img\Flags\nl.png' style="width:24px;height:16px;border:0;margin-top:4px;">
                        </a>
                    @elseif (app()->getLocale() == 'nl')
                        <a class="nav-item nav-link" href="{{ language()->back('en') }}">
                            <img src='\img\Flags\gb.png' style="width:24px;height:16px;border:0;margin-top:4px;">
                        </a>
                    @endif
                    -->
                @endguest
            </ul>
        </div>
    </nav>
</div>
