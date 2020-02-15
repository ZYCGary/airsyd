<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('web.home') }}">Air Sydney</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('web.theme.home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('web.theme.about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('web.theme.agent') }}" class="nav-link">Agent</a></li>
                <li class="nav-item"><a href="{{ route('web.theme.services') }}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ route('web.theme.properties') }}" class="nav-link">Properties</a></li>
                <li class="nav-item"><a href="{{ route('web.theme.blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('web.theme.contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#lang-select">
                        <span
                            class="flaticon-bed mr-1"></span><span>{{ get_app_locale()[app()->getLocale()]['language'] }}</span>
                    </a>
                </li>
                @guest
                    <li class="nav-item"><a href="{{ route('web.login') }}" class="nav-link">{{ __('Login') }}</a></li>
                    <li class="nav-item"><a href="{{ route('web.register') }}" class="nav-link">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="{{ route('web.users.show', ['user' => Auth::user()]) }}">{{ __('users.profile.profile') }}</a>
                            <div class="dropdown-divider"></div>
                            {{--<a class="dropdown-item" href="">
                                <button class="btn btn-primary">{{ __('profile-edit') }}</button>
                            </a>--}}
                            <a class="dropdown-item" id="logout" href="javascript:void(0)">
                                <form action="{{ route('web.logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary" type="submit"
                                            name="button">{{ __('Logout') }}</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div id="lang-select" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('sys.select_lang') }}</h5>
                <a href="" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body row">
                @foreach(get_app_locale() as $local)
                    <div class="col-md-4">{{ $local['language'] }}</div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
