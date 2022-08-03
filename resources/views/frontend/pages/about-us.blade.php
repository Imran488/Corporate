@extends('frontend.master')
@section('contents')
    <br>
    <section id="about" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0">
                    <h1>ABOUT MAXIBO</h1>
                    <p>We are designing & manufacturing the spirit of quality.</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 banner-img">
                    <img src="{{ url('frontend/img/maxibo-logo.jpg') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card mb-3">
            <img  src="{{ url('frontend/img/vast.webp') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h4 class="card-title">VAST EXPERIENCE</h4>
              <p class="card-text">With 15 years of textile production process and machine production experience</p>
            </div>
        </div>

        <div class="card mb-3">
            <img  src="{{ url('frontend/img/machine.webp') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h4 class="card-title">MACHINES FOR TEXTILE</h4>
              <p class="card-text">Machines that increase production by increasing productivity and efficiency</p>
            </div>
        </div>

        <div class="card mb-3">
            <img  src="{{ url('frontend/img/solution.webp') }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h4 class="card-title">CUSTOM SOLUTIONS</h4>
              <p class="card-text">According to the needs of the textile production process</p>
            </div>
        </div>
    </section>
@endsection
