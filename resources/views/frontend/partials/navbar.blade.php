<nav id="navbar" class="navbar">
    <ul>
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        <li><a class=" " href="{{ route('about.us') }}">About</a></li>
        <li class="dropdown"><a class="" href="#product"><span>Products</span></a>
            <ul>
                <li class="dropdown">
                    <a href="{{asset('/frontend/pdf/Alser/Alser.pdf')}}" target="_blank"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Alser</span></a>
                    <ul class="dropdown">
                        <a href="{{asset('/frontend/pdf/Alser/AKA1 EN.pdf')}}" target="_blank">ROLL FABRIC OPENING MACHINE</a>
                        <a href="{{asset('/frontend/pdf/Alser/Alser Jeans.pdf')}}" target="_blank">AUTOMATIC FABRIC SPREADING MACHINE (JEANS)</a>
                        <a href="{{asset('/frontend/pdf/Alser/Alser Knit.pdf')}}" target="_blank">FABRIC SPREADING MACHINE (KNITTING)</a>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" target="_blank"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Sipami</span></a>
                    <ul class="dropdown">
                        <a href="{{asset('/frontend/pdf/Sipami/DOUBLE NEEDLE PLC.pdf')}}" target="_blank">DOUBLE NEEDLE PLC</a>
                        <a href="{{asset('/frontend/pdf/Sipami/FRONT PLACKET MACHINE.SHIRT.pdf')}}" target="_blank">FRONT PLACKET MACHINE.SHIRT</a>
                        <a href="{{asset('/frontend/pdf/Sipami/FRONT POCKET TAP BINDING.pdf')}}" target="_blank">FRONT POCKET TAP BINDING</a>
                        <a href="{{asset('/frontend/pdf/Sipami/J STITCH.pdf')}}" target="_blank">J STITCH</a>
                        <a href="{{asset('/frontend/pdf/Sipami/POCKET ROLLING.pdf')}}" target="_blank">POCKET ROLLING</a>
                        <a href="{{asset('/frontend/pdf/Sipami/POCKET ROLLING (1).pdf')}}" target="_blank">POCKET ROLLING (1)</a>
                        <a href="{{asset('/frontend/pdf/Sipami/POCKET SETTER SINGLE HEAD.pdf')}}" target="_blank">POCKET SETTER SINGLE HEAD</a>
                        <a href="{{asset('/frontend/pdf/Sipami/POCKET SETTER DOUBLE HEAD.pdf')}}" target="_blank">POCKET SETTER DOUBLE HEAD</a>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="{{asset('/frontend/pdf/MI/FABRIC SHRINKING MACHINE_PICTURE (China) (1).pdf')}}" target="_blank"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;MI</span></a>
                    <ul class="dropdown">
                      <a href="{{asset('/frontend/pdf/MI/FABRIC SHRINKING MACHINE.pdf')}}" target="_blank">FABRIC SHRINKING MACHINE</a>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a class=" " href="#services">Services</a></li>
        <li><a class="" href="{{ route('contact.us') }}">Contact</a></li>
        <li><a class="getstarted scrollto" href="{{ route('booking') }}">Book</a></li>

        @if (auth()->user())
            <li class="dropdown"><a class="" href="#product"><span>{{ auth()->user()->name }}</span></a>
        <ul>
            <li><a href="{{ route('logout') }}"><span>Logout</span></a></li>
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



