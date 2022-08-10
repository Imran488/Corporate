<nav id="navbar" class="navbar">
    <ul>
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        <li><a class=" " href="{{ route('about.us') }}">About</a></li>
        <li class="dropdown"><a class="" href="#product"><span>Products</span></a>
            <ul>
                <li><a href="#"><span><i class="fa-solid fa-angle-right"></i>&nbsp;Drying Machines</span></a></li>
                <li><a href="#"><span><i class="fa-solid fa-angle-right"></i>&nbsp;Pre-Drying Control
                            Machines</span></a></li>
                <li><a href="#"><span><i class="fa-solid fa-angle-right"></i>&nbsp;Padder Control
                            Machines</span></a></li>
            </ul>
        </li>
        <li><a class=" " href="#services">Services</a></li>
        <li><a class="" href="{{ route('contact.us') }}">Contact</a></li>
        <li><a class="getstarted scrollto" href="{{ route('booking') }}">Book</a></li>

        @if (auth()->user())
            <li class="dropdown"><a class="" href="#product"><span>{{ auth()->user()->name }}</span></a>
        <ul>
            <li><a href="{{ route('logout') }}"><span><i class="fa-solid fa-angle-right"></i>&nbsp;Logout</span></a></li>
        </ul>
    </li>
        @else
        <li><a class="getstarted scrollto" href="{{ route('user.login') }}">Login</a></li>
        @endif
    </ul>
    <div class=" mobile-nav-toggle">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar"> <span class="sr-only"></span> <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>
