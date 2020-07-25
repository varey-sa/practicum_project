<nav class="navbar navbar-default" style="background: #f0f4f4">
    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <!-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> -->
        <div>
            <a class="navbar-brand logo-brand" style="margin-bottom: 12px" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

        </div>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right" style="margin-right: 30px">
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('login') }}" style="margin-top: 9px; font-size: 20px">Login</a></li>
            <li><a href="{{ route('register') }}" style="margin-top: 9px;  font-size: 20px">Register</a></li>
            @else
            {{--notification--}}
            <notification :userid="{{auth()->id()}}" :unreads="{{auth()->user()->unreadNotifications}}"></notification>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <p class="user-name">{{ Auth::user()->name }}</p>
                    <img src="https://pitcoder.github.io/img/portfolio/thumbnails/avatar.png" alt="Avatar"
                        class="user-image">
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>

                        <a href="{{ route('user_profile',auth()->user()) }}">
                            My Profile
                        </a>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</nav>