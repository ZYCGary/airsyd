<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('theme.home') }}">Air Sydney</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('theme.home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('theme.about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('theme.agent') }}" class="nav-link">Agent</a></li>
                <li class="nav-item"><a href="{{ route('theme.services') }}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ route('theme.properties') }}" class="nav-link">Properties</a></li>
                <li class="nav-item"><a href="{{ route('theme.blog') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('theme.contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
