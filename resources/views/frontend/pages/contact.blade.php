@extends('frontend.master')
@section('contents')
<br><br><br><br><br><br>
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact-Us</h2>
            <p>You can Contact Us or Message Us anytime. We can Reply as soon as possible </p>
        </div>

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <p><i class="fa-solid fa-location-dot"></i>&nbsp; Location: House- 07, Suite- 2A, Road- 14/C, Sector- 04, Uttara 1230, Dhaka Division, Bangladesh</p>
                    </div>

                    <div class="email">
                        <p><i class="fa-solid fa-envelope"></i>&nbsp; Email: info@maxibobd.com</p>
                    </div>

                    <div class="phone">
                        <p> <i class="fa-solid fa-phone"></i>&nbsp; Call: 01680-329598</p>
                    </div>

                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.659870755094!2d90.39892121429929!3d23.866208790260842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c425ae395be3%3A0x7a5b26db33a26224!2s7-11%20Road-14%2FC%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1659349636883!5m2!1sen!2sbd" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                <form action="{{ route('message.us') }}" method="post" class="php-email-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                            id="subject">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="10"></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <div class="text-center "><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
@endsection
