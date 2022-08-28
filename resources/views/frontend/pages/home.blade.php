@extends('frontend.master')
@section('contents')
    <br><br> <br><br>
    <!-- ======= Banner Section ======= -->
    {{-- <section id="banner" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div id="carouselExampleSlidesOnly"data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('frontend/img/slider1.jpg') }}" class="" alt="...">
                            <div class="carousel-caption">
                                <h1 style="color: rgb(6, 3, 182)">Impel You to Next</h1>
                                <h2 style="color: red">Maxibo Spiritof Quality</h2>
                                <a href="{{ route('booking') }}" class="btn-get-started scrollto">Book Now</a>
                                &nbsp;
                                <a href="#" class="btn-watch-video"><span>Watch Video</span></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('frontend/img/slider2.jpg') }}" class="" alt="...">
                            <div class="carousel-caption">
                                <h1 style="color: rgb(11, 124, 230)">Impel You to Next</h1>
                                <h2 style="color: rgb(40, 155, 5)">Maxibo Spiritof Quality</h2>
                                <a href="{{ route('booking') }}" class="btn-get-started scrollto">Book Now</a>
                                &nbsp;
                                <a href="#" class="btn-watch-video"><span>Watch Video</span></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('frontend/img/slider3.jpg') }}" class="" alt="...">
                            <div class="carousel-caption">
                                <h1 style="color: rgb(201, 11, 175)">Impel You to Next</h1>
                                <h2 style="color: rgb(38, 0, 128)">Maxibo Spiritof Quality</h2>
                                <a href="{{ route('booking') }}" class="btn-get-started scrollto">Book Now</a>
                                &nbsp;
                                <a href="#" class="btn-watch-video"><span>Watch Video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
    <section class="banner-section-two">
        <script src="{{ url('frontend/js/slider.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            jssor_1_slider_init = function() {

                var jssor_1_SlideoTransitions = [
                    [{
                        b: -1,
                        d: 1,
                        o: -1
                    }, {
                        b: 0,
                        d: 1000,
                        o: 1
                    }],
                    [{
                        b: 1900,
                        d: 2000,
                        x: -379,
                        e: {
                            x: 7
                        }
                    }],
                    [{
                        b: 1900,
                        d: 2000,
                        x: -379,
                        e: {
                            x: 7
                        }
                    }],
                    [{
                        b: -1,
                        d: 1,
                        o: -1,
                        r: 288,
                        sX: 9,
                        sY: 9
                    }, {
                        b: 1000,
                        d: 900,
                        x: -1400,
                        y: -660,
                        o: 1,
                        r: -288,
                        sX: -9,
                        sY: -9,
                        e: {
                            r: 6
                        }
                    }, {
                        b: 1900,
                        d: 1600,
                        x: -200,
                        o: -1,
                        e: {
                            x: 16
                        }
                    }]
                ];

                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideDuration: 800,
                    $SlideEasing: $Jease$.$OutQuint,
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_1_SlideoTransitions
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*responsive code begin*/
                /*you can remove responsive code if you don't want the slider scales while window resizing*/
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    } else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*responsive code end*/
            };
        </script>
        <style>
            .carousel-caption {
                position: absolute;
                right: (100% - $carousel-caption-width) * .5;
                bottom: 12.25rem;
                left: (100% - $carousel-caption-width) * .5;
                padding-top: $carousel-caption-padding-y;
                padding-bottom: $carousel-caption-padding-y;
                color: $carousel-caption-color;
                text-align: center;
            }
        </style>
        <div id="jssor_1"style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1920px; height: 750px; overflow: hidden; visibility: hidden;">
            <div data-u="slides"style="cursor: default; position: relative; top: 0px; left: 0px; width: 1920px; height: 750px; overflow: hidden;">

                <div data-p="225.00" style="display: none;">
                    <a href=""> <img data-u="image" src="{{ asset('frontend/img/slider1.jpg') }}" /></a>
                    <div class="carousel-caption">
                        <h1 style="color: rgb(201, 11, 175)">Impel You to Next</h1>
                        <h2 style="color: rgb(38, 0, 128)">Maxibo Spiritof Quality</h2>
                        <a href="{{ route('booking') }}" class="btn btn-primary">Book Now</a>
                        &nbsp;
                        <a href="#" class="btn btn-danger"><span>Watch Video</span></a>
                    </div>
                </div>

                <div data-p="225.00" style="display: none;">
                    <a href=""> <img data-u="image" src="{{ asset('frontend/img/slider2.jpg') }}" /></a>
                    <div class="carousel-caption">
                        <h1 style="color: rgb(5, 48, 141)">Impel You to Next</h1>
                        <h2 style="color: rgb(1, 80, 47)">Maxibo Spiritof Quality</h2>
                        <a href="{{ route('booking') }}" class="btn btn-primary">Book Now</a>
                        &nbsp;
                        <a href="#" class="btn btn-danger"><span>Watch Video</span></a>
                    </div>
                </div>

                <div data-p="225.00" style="display: none;">
                    <a href=""> <img data-u="image" src="{{ asset('frontend/img/slider3.jpg') }}" /></a>
                    <div class="carousel-caption">
                        <h1 style="color: rgb(6, 120, 155)">Impel You to Next</h1>
                        <h2 style="color: rgb(92, 2, 29)">Maxibo Spiritof Quality</h2>
                        <a href="{{ route('booking') }}" class="btn btn-primary">Book Now</a>
                        &nbsp;
                        <a href="#" class="btn btn-danger"><span>Watch Video</span></a>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript">
            jssor_1_slider_init();
        </script>
    </section>
    <!-- End Banner -->

    <main id="main">
        <!-- ======= Product Section ======= -->
        <section id="product" class="product section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Our Products</h2>
                    <p>We have to Providing Wide range of Products</p>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-box text-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('frontend/img/alser1.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/alser2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/alser3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <h4><a href="{{ asset('/frontend/pdf/Alser/Alser.pdf') }}"
                                    target="_blank">Alser</a></h4>
                            <p>Standard roll dimension: 50 cm
                                Standard roll weight : 150 kg
                                Standard laying widht: 160 cm - 220 cm
                                Standard laying height: 25 cm
                                Zigzag laying height: 25 cm
                                Laying height with zigzag apparatus: 25 cm
                                Maximum laying speed: 105 mt / minute
                                General machine weight: 410 kg
                                Electrical requirement: 220 v ac 50 hz 3,5 kw
                            </p>
                            <br><br>
                            <a href="{{ asset('/frontend/pdf/Alser/Alser.pdf') }}" target="_blank"
                                class="readmore-btn">Read More</a>
                        </div>

                    </div>

                    <div class="col-sm-4 ">
                        <div class="icon-box text-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('frontend/img/sipami2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/sipami3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <h4><a href="{{ asset('/frontend/pdf/Sipami/DOUBLE NEEDLE PLC.pdf') }}" target="_blank">Sipami</a></h4>
                            <p>Sewing Head: Lock Stitch Brother T8720 C ( Large hook)
                                : Chain Stitch  Kansai Special DFB 1404 PE
                               Sewing speed: 3,500 rpm
                                Air consumption: 0.6 liters / cycle at a pressure of 5.5 bar;
                                Power supply: 230V mono phase 50/60 Hz, 1.0kW;
                                Productivity depend on the speed of the machine and the length of the seam
                            </p>
                            <br><br>
                            <a href="{{ asset('/frontend/pdf/Sipami/DOUBLE NEEDLE PLC.pdf') }}" target="_blank"
                                class="readmore-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="icon-box text-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('frontend/img/mi1.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/mi2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/mi3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <h4><a href="{{ asset('/frontend/pdf/MI/FABRIC SHRINKING MACHINE_PICTURE (China) (1).pdf') }}" target="_blank">MI</a></h4>
                            <p>National Patent Steam Chamber Design.
                                Internal Unique Structure to Ensure No Water Vapor Dripping.
                                Fully Sealed Unique Design Steam Cover: No Leakage Of Steam, Steam Cyclic Utilization, Reduce The Steam
                                Consumption And Shrinking Effect.Vibration Function Allow The Fiber To Be Fluffy Naturally.</p>
                            <br><br>
                            <a href="{{ asset('/frontend/pdf/MI/FABRIC SHRINKING MACHINE_PICTURE (China) (1).pdf') }}" target="_blank"
                                class="readmore-btn">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End product Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Our Services</h2>
                    <p>We have to Providing Wide range of Services</p>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-box text-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('frontend/img/alser1.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/alser2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/alser3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <h4><a href="{{ asset('/frontend/pdf/Alser/Alser.pdf') }}"
                                    target="_blank">Alser</a></h4>
                            <p>Standard roll dimension: 50 cm
                                Standard roll weight : 150 kg
                                Standard laying widht: 160 cm - 220 cm
                                Standard laying height: 25 cm
                                Zigzag laying height: 25 cm
                                Laying height with zigzag apparatus: 25 cm
                                Maximum laying speed: 105 mt / minute
                                General machine weight: 410 kg
                                Electrical requirement: 220 v ac 50 hz 3,5 kw
                            </p>
                            <br><br>
                            <a href="{{ route('booking') }}" target="_blank"
                                class="readmore-btn">Take Service</a>
                        </div>

                    </div>

                    <div class="col-sm-4 ">
                        <div class="icon-box text-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('frontend/img/sipami2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/sipami3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <h4><a href="{{ asset('/frontend/pdf/Sipami/DOUBLE NEEDLE PLC.pdf') }}" target="_blank">Sipami</a></h4>
                            <p>Sewing Head: Lock Stitch Brother T8720 C ( Large hook)
                                : Chain Stitch  Kansai Special DFB 1404 PE
                               Sewing speed: 3,500 rpm
                                Air consumption: 0.6 liters / cycle at a pressure of 5.5 bar;
                                Power supply: 230V mono phase 50/60 Hz, 1.0kW;
                                Productivity depend on the speed of the machine and the length of the seam
                            </p>
                            <br><br>
                            <a href="{{ route('booking') }}" target="_blank"
                                class="readmore-btn">Take Service</a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="icon-box text-center">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('frontend/img/mi1.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/mi2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('frontend/img/mi3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <h4><a href="{{ asset('/frontend/pdf/MI/FABRIC SHRINKING MACHINE_PICTURE (China) (1).pdf') }}" target="_blank">MI</a></h4>
                            <p>National Patent Steam Chamber Design.
                                Internal Unique Structure to Ensure No Water Vapor Dripping.
                                Fully Sealed Unique Design Steam Cover: No Leakage Of Steam, Steam Cyclic Utilization, Reduce The Steam
                                Consumption And Shrinking Effect.Vibration Function Allow The Fiber To Be Fluffy Naturally.</p>
                            <br><br>
                            <a href="{{ route('booking') }}" target="_blank"
                                class="readmore-btn">Take Service</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Services Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row section-title">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <a href="tel:01766-140491" style="text-decoration: none"><i
                            class="fa-solid fa-phone"></i>&nbspCall:&nbsp &nbsp 01680-329598</a>
                    <br>
                    <a href="mailto:info@maxibobd.com"><i class="fa-solid fa-envelope"></i>&nbsp; Email:
                        info@maxibobd.com</a>
                    <br>
                    <a href="" style="text-decoration: none" target="blank"><i
                            class="fa-solid fa-location-dot"></i>&nbsp Address: &nbsp &nbsp House- 07, Suite- 2A, Road-
                        14/C, Sector- 04, Uttara 1230, Dhaka Division, Bangladesh</a>
                </div>
                <br>
                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.659870755094!2d90.39892121429929!3d23.866208790260842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c425ae395be3%3A0x7a5b26db33a26224!2s7-11%20Road-14%2FC%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1659349636883!5m2!1sen!2sbd"
                        style="border:0"; width="1500" height="450" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
