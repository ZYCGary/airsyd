<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('theme.home') }}">Air Sydney</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

<<<<<<< HEAD
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('theme.home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('theme.about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('theme.agent') }}" class="nav-link">Agent</a></li>
                <li class="nav-item"><a href="{{ route('theme.services') }}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ route('theme.properties') }}" class="nav-link">Properties</a></li>
                <li class="nav-item"><a href="{{ route('theme.blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('theme.contact') }}" class="nav-link">Contact</a></li>
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">{{ __('profile') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">
                                <button class="btn btn-primary">{{ __('profile-edit') }}</button>
                            </a>
                            <a class="dropdown-item" id="logout" href="javascript:void(0)">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary" type="submit"
                                            name="button">{{ __('Logout') }}</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @endguest
=======
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
>>>>>>> c0f3b8b60686050c5bb38f4d03a04b9cb63c05a9
            </ul>
        </div>
    </div>
</nav>
