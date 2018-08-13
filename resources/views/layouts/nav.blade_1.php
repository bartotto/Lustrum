<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <!-- <ul class="nav navbar-nav mx-auto"> -->
            <ul class="nav navbar-nav pull-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">{{ trans('info.login') }}</a></li>
                    <!-- <li><a href="{{ route('register') }}">{{ trans('info.register') }}</a></li> -->
                @else
                    <li><a href="{{ route('georgia') }}">{{ trans('info.destination') }}</a></li>
                    <li><a href="{{ route('program') }}">{{ trans('info.program') }}</a></li>
                    <li><a href="{{ route('posts')   }}">{{ trans('info.blog') }}</a></li>
                    <li><a href="{{ route('joiners') }}">{{ trans('info.joiners') }}</a></li>  
                    <li><a href="{{ route('trips')   }}">{{ trans('info.trips') }}</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            Info<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('users')   }}">{{ trans('info.club') }}</a></li>
                            <li><a href="{{ route('luco')    }}">{{ trans('info.luco') }}</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/users/{{ Auth::user()->id }}">{{ trans('info.profile') }}</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ trans('info.logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>           
                    <!--<li>
                        @if (app()->getLocale() == 'en')
                            <a href="{{ language()->back('nl') }}">
                                <img src='\img\Flags\nl.png' style="width:24px;height:16px;border:0;margin-top:4px;">
                            </a>
                        @elseif (app()->getLocale() == 'nl')
                            <a href="{{ language()->back('en') }}">
                                <img src='\img\Flags\gb.png' style="width:24px;height:16px;border:0;margin-top:4px;">
                            </a>
                        @endif
                    </li>-->
                @endguest
            </ul>
        </div>
    </div>
</nav>