@extends('frontend.master')
@section('contents')
<section id="banner" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                <h1>Better Solutions For Your Business</h1>
                <h2>Maxibo Spirit of Quality</h2>
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
@endsection
