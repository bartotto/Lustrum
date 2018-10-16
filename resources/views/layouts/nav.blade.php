<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/home">
            <img src= "/img/Logos/Caligula.png" width="60" height="60" alt="Logo jaarclub Caligula">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">{{ trans('info.login') }}</a>
                        <!-- <li><a href="{{ route('register') }}">{{ trans('info.register') }}</a></li> -->
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/home">{{ trans('info.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logo">{{ trans('info.logo') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ trans('info.destination') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="destination">{{ trans('info.slides') }}</a>
                            <a class="dropdown-item" href="destination_map">{{ trans('info.map') }}</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/program">{{ trans('info.program') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">{{ trans('info.blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tripPhoto">{{ trans('info.trips') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tripVideo">{{ trans('info.video') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="/users.index">{{ trans('info.club') }}</a>
                            
                            <a class="dropdown-item" href="/joiners/{{ 7 }}">{{ trans('info.joiners') }}</a>
                            <a class="dropdown-item" href="/luco">{{ trans('info.luco') }}</a>          
                            @if(Auth::user()->hasRole('Member'))
                                <a class="dropdown-item" href="/budget">{{ trans('info.budget') }}</a>
                            @endif
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->first_name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="/users/{{ Auth::user()->id }}">{{ trans('info.profile') }}</a>
                            @if(Auth::user()->hasRole('Luco'))
                                <a class="dropdown-item" href="/admin">{{ trans('info.admin') }}</a>
                            @endif
                            @if(Auth::user()->hasRole('Administrator'))
                                <a class="dropdown-item" href="/administrator">{{ trans('info.administrator') }}</a>
                            @endif
                            <a class="dropdown-item" href="logout"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ trans('info.logout') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                        </div>
                    </li>
                    @if (app()->getLocale() == 'en')
                        <a class="nav-item nav-link" href="{{ language()->back('nl') }}">
                            <img src='\img\Flags\nl.png' style="width:24px;height:16px;border:0">
                        </a>
                    @elseif (app()->getLocale() == 'nl')
                        <a class="nav-item nav-link" href="{{ language()->back('en') }}">
                            <img src='\img\Flags\gb.png' style="width:24px;height:16px;border:0">
                        </a>
                    @endif
                @endguest
            </ul>
        </div>
    </nav>
</div>