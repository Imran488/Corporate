<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
        <li><a class="nav-link scrollto " href="#about">About</a></li>
        <li><a class="nav-link scrollto " href="#services">Services</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#product"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Products 1</a></li>
                <li><a href="#">Products 2</a></li>
                <li><a href="#">Products 3</a></li>
                <li><a href="#">Products 4</a></li>
                <li class="dropdown"><a href="#"><span>Products 5</span></a>
                    <ul>
                        <li><a href="#">Products 5.1</a></li>
                        <li><a href="#">Products 5.2</a></li>
                        <li><a href="#">Products 5.3</a></li>
                        <li><a href="#">Products 5.4</a></li>
                        <li><a href="#">Products 5.5</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="getstarted scrollto" href="#about">Book</a></li>
        <li><a class="getstarted scrollto" href="#">Login</a></li>
    </ul>
    <div class=" mobile-nav-toggle">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only"></span> <i class="fa-solid fa-bars"></i> </button>
    </div>
</nav>
