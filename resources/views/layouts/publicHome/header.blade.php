<nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img/taxhubbd_logo.png')}}" alt="TaxhubBD"></a>
        </div>
        
        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item scroll active">
                        <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item scroll ">
                        <a class="nav-link" href="{{ url('/#services') }}">{{ __('Services') }}</a>
                    </li>
                    <li class="nav-item scroll ">
                        <a class="nav-link" href="{{ url('/#about') }}">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item scroll ">
                        <a class="nav-link" href="{{ url('/#contact') }}">{{ __('Contact') }}</a>
                    </li>
                    <li class="nav-item scroll ">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item scroll ">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div><!--/.container-->
</nav>
