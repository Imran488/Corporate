@extends('frontend.master')
@section('contents')
<section id="product" class="product section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Products</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><img src="{{url('frontend/img/maxibo-logo.jpg')}}" alt="" class="img-fluid"></div>
                    <h4><a href="">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><img src="{{url('frontend/img/maxibo-logo.jpg')}}" alt="" class="img-fluid"></div>
                    <h4><a href="">Sed ut perspici</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
                <div class="icon-box">
                    <div class="icon"><img src="{{url('frontend/img/maxibo-logo.jpg')}}" alt="" class="img-fluid"></div>
                    <h4><a href="">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0">
                <div class="icon-box">
                    <div class="icon"><img src="{{url('frontend/img/maxibo-logo.jpg')}}" alt="" class="img-fluid"></div>
                    <h4><a href="">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
