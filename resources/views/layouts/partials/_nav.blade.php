<nav class="grey "  role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{ route('home_path') }}" class="brand-logo">Laracarte</a>
        
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home_path') }}">Home</a></li>
            <li><a href="{{ route('about_path') }}">About</a></li>
            <li><a href="#">Artisans</a></li>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">one</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider"></li>
              <li><a href="#!">three</a></li>
            </ul>
                  <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown</a></li>

            <li><a href="#">Contact</a></li>
            <li><a href="#" class="btn grey">Login </a></li>
            <li><a href="#" class="btn grey">Register</a></li>

        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

{{-- <nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
    </div>
</nav> --}}