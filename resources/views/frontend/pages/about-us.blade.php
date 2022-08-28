@extends('frontend.master')
@section('contents')
    <br><br><br><br>
    <section id="banner" class="about-us">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h1>About Maxibo</h1>
                    <h2>Maxibo Spirit of Quality</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{route('booking')}}" class="btn-get-started scrollto">Book Now</a>
                        &nbsp;
                        <a href="#" class="btn-watch-video"><span>Watch Video</span></a>
                    </div>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide col-lg-6 order-1 order-lg-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{url('frontend/img/alser1.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h3 style="color: rgb(201, 11, 175)">Impel You to Next</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{url('frontend/img/sipami2.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h3 style="color: rgb(0, 2, 17)">Impel You to Next</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{url('frontend/img/mi1.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h3 style="color: rgb(224, 38, 5)">Impel You to Next</h3>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </section>
    <section>
        <div class="card mb-3">
            <img  src="{{ url('frontend/img/alser1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h4 class="card-title">VAST EXPERIENCE</h4>
              <p class="card-text">With 15 years of textile production process and machine production experience</p>
            </div>
        </div>

        <div class="card mb-3">
            <img  src="{{ url('frontend/img/sipami2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h4 class="card-title">MACHINES FOR TEXTILE</h4>
              <p class="card-text">Machines that increase production by increasing productivity and efficiency</p>
            </div>
        </div>

        <div class="card mb-3">
            <img  src="{{ url('frontend/img/mi1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h4 class="card-title">CUSTOM SOLUTIONS</h4>
              <p class="card-text">According to the needs of the textile production process</p>
            </div>
        </div>
    </section>
@endsection
