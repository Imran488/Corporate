<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Maxibo International LTD.</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('frontend/img/maxibo-logo.jpg') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"rel="stylesheet">

    <!-- ======= CSS file ======= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ======= Main CSS file ======= -->
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            {{-- <h1 class="logo me-auto"><a href="{{route('home')}}">Maxibo</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{route('home')}}" class="logo me-auto"><img src="{{url('frontend/img/maxibo-logo.jpg')}}" alt="" class="img-fluid"><span>Maxibo</span></a>


            @include('frontend.partials.navbar')
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    @yield('contents')

    <!-- ======= Footer ======= -->
    @include('frontend.partials.footer')
    <!-- End Footer -->

    <!-- ======= Back-to-Top ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-jet-fighter-up"></i></a>

    <!-- ======= Script file ======= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- =======Main Script file ======= -->
    <script src="{{ url('frontend/js/main.js') }}"></script>

</body>



</html>
