@extends('frontend.master')
@section('contents')
    <br><br>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact for Booking</h2>
            </div>

            <div class="">

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
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
    </section>
@endsection
