@extends('frontend.master')
@section('contents')
 <br><br>
    <!-- ======= Banner Section ======= -->
    <section id="banner" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>Maxibo Spiritof Quality</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        &nbsp;
                        <a href="#" class="btn-watch-video"><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 banner-img">
                    <img src="{{url('frontend/img/maxibo-logo.jpg')}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Banner -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="about-container">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row text-center">
                    <div class="text-center">
                        <p style="font-weight: bold">
                            We are designing & manufacturing the spirit of quality. We are providing these services.
                        </p>
                        <ul>
                            <p>(i) MACHINES FOR TEXTILE</p>
                            <p>(ii)CUSTOM SOLUTIONS</p>
                        </ul>
                        <p style="font-weight: bold">
                            Vast Experience With 15 years of textile production process and machine production experience
                        </p>
                        <a href="{{route('about.us')}}" class="readmore-btn">Read More</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>We have to Providing wide range of Services</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><img src="{{url('frontend/img/vast.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><img src="{{url('frontend/img/machine.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Sed ut perspici</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
                        <div class="icon-box">
                            <div class="icon"><img src="{{url('frontend/img/solution.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
                        <div class="icon-box">
                            <div class="icon"><img src="{{url('frontend/img/machine.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Product Section ======= -->
        <section id="product" class="product section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Products</h2>
                    <p>We have to Providing Wide range of Products</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box text-center">
                            <div class="icon"><img src="{{url('frontend/img/vast.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Dyeing Machines</a></h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi, praesentium nulla molestias ratione voluptatum ad eaque fugiat ipsam, laudantium maiores non officia aut, labore iusto voluptate sequi. Aliquid, voluptate?</p>
                            <br><br>
                            <a href="" class="readmore-btn">Read More</a>
                        </div>

                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box text-center">
                            <div class="icon"><img src="{{url('frontend/img/machine.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Pre-Dryer Machines</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum porro reprehenderit dolor fugiat labore impedit, illo error vel. Ducimus dolor laboriosam reprehenderit optio veniam dolorum vel ea voluptas dicta hic!</p>
                            <br><br>
                            <a href="" class="readmore-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
                        <div class="icon-box text-center">
                            <div class="icon"><img src="{{url('frontend/img/solution.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Padder Control Machines</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsa dicta veniam voluptatibus, totam neque illo, debitis dolorum ab, fuga accusantium mollitia vero doloribus nisi modi facilis exercitationem error minima?</p>
                            <br><br>
                            <a href="" class="readmore-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
                        <div class="icon-box text-center">
                            <div class="icon"><img src="{{url('frontend/img/machine.webp')}}" alt="" class="img-fluid"></div>
                            <h4><a href="">Lorem Ipsom</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dicta recusandae incidunt velit maiores debitis iusto veniam culpa hic sequi, aliquam saepe, doloremque perspiciatis quisquam est. Harum quibusdam beatae nostrum?</p>
                            <br><br>
                            <a href="" class="readmore-btn">Read More</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End product Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row section-title">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <a href="tel:01766-140491" style="text-decoration: none"><i class="fa-solid fa-phone"></i>&nbspCall:&nbsp &nbsp   01680-329598</a>
                    <br>
                    <a href="mailto:info@maxibobd.com"><i class="fa-solid fa-envelope"></i>&nbsp; Email: info@maxibobd.com</a>
                    <br>
                    <a href="" style="text-decoration: none" target="blank"><i class="fa-solid fa-location-dot"></i>&nbsp Address: &nbsp &nbsp  House- 07, Suite- 2A, Road- 14/C, Sector- 04, Uttara 1230, Dhaka Division, Bangladesh</a>
                </div>
                <br>
                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.659870755094!2d90.39892121429929!3d23.866208790260842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c425ae395be3%3A0x7a5b26db33a26224!2s7-11%20Road-14%2FC%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1659349636883!5m2!1sen!2sbd" style="border:0"; width="1500" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
