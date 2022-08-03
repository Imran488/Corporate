<nav id="navbar" class="navbar">
    <ul>
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        <li><a class=" " href="{{route('about.us')}}">About</a></li>
        <li><a class=" " href="#services">Services</a></li>
        <li class="dropdown"><a class="" href="#product"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Dyeing Machines</a></li>
                <li><a href="#">Pre-Dryer Machines</a></li>
                <li class="dropdown"><a href="#"><span>Padder Control Machines</span></a>
                    <ul>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a class="" href="{{route('contact.us')}}">Contact</a></li>
        <li><a class="getstarted scrollto" href="{{route('booking')}}">Book</a></li>
        <li><a class="getstarted scrollto" href="#">Login</a></li>
    </ul>
    <div class=" mobile-nav-toggle">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only"></span> <i class="fa-solid fa-bars"></i> </button>
    </div>
</nav>
