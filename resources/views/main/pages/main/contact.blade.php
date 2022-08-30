@extends('layouts.layout')

@section('title') Contact @endsection
@section('description') Here you can find out how to contact us. @endsection
@section('keywords') shop, contact, location, clothes @endsection
@section('token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')



    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                If you have any questions you can contact us using the form underneath or via our email or phone.
            </p>
        </div>
    </div>


    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">

            <form action="{{route('contact.store')}}" class="contact-form" method="POST">
                @csrf
                <div class="row">

                        <div class="col-lg-6">
                            <input type="text" id="name" class="form-control" name="name" data-field="name"  placeholder="Your Name">
                            <p class="text-danger msgErrorName"></p>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" data-field="email" class="form-control" id="tbEmailContact" name="email" placeholder="Your Email">
                            <p class="text-danger msgErrorEmail"></p>
                        </div>
                    <div class="col-lg-12">
                        <input type="text" data-field="subject" class="form-control" id="tbSubjectContact" name="subject" placeholder="Subject | Reason for Contact">
                        <p class="text-danger msgErrorSubj"></p>
                    </div>
                    <div class="col-lg-12">
                        <textarea data-field="message" class="form-control" id="taMessageContact" name="message" placeholder="Your Message"></textarea>
                        <p class="text-danger msgErrorMessage"></p>
                        <button id="btnSendMessage" class="form-control btn-success" type="submit">Send message</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
{{--@section('script')--}}
{{--    <script src="{{ asset('assets/js/contact.js') }}"></script>--}}
{{--@endsection--}}

