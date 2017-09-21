<nav class="grey "  role="navigation">
    <div class="nav-wrapper container">
        <a href="{{ route('home_path') }}" class="brand-logo">{{ config('app.name') }}</a>
        
        <ul class="right hide-on-med-and-down">
            <li class="{{ Request::is('/') ? 'active': '' }}"><a href="{{ route('home_path') }}">Home</a></li>
            <li><a href="{{ route('about_path') }}">About</a></li>
            <li><a href="#">Artisans</a></li>

            <li class="{{ Request::is('/contact') ? 'active': '' }}"><a href="{{ route('contact_path') }}">Contact</a></li>
            <li><a href="#" class="btn grey">Login </a></li>
            <li><a href="#" class="btn grey">Register</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>