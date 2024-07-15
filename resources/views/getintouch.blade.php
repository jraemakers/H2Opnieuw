@extends('layouts.app')

@section('head')
    <title>H2Opnieuw | Get in touch</title>
    <meta name="title" content="H2Opnieuw | Get in touch" />
    <meta name="description" content="Get in touch with H2Opnieuw. Give us a call at +31 6 38444323 or contact us by email at julian.humblet@student.fontys.nl." />
    <meta property="og:title" content="H2Opnieuw | Get in touch" />
    <meta property="og:description" content="Get in touch with H2Opnieuw. Give us a call at +31 6 38444323 or contact us by email at julian.humblet@student.fontys.nl." />
@endsection

@section('main')
    <div class="mx-auto container">
        <h1 class="text-center mb-4">Get in touch</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:mx-32 h3 text-center mb-8">
            <div class="mt-4">
                <img src="{{ Vite::asset('resources/images/envelope-solid.svg') }}" class="mx-auto h-16 mb-4" alt="Envelope">
                <h2>Email</h2>
                <a href="mailto:julian.humblet@student.fontys.nl"
                    class="h3 anchor inline-block umami--click--mail-link">julian.humblet@<wbr>student.fontys.nl</a>
            </div>
            <div class="mt-4">
                <img src="{{ Vite::asset('resources/images/phone-solid.svg') }}" class="mx-auto h-16 mb-4" alt="Phone">
                <h2>Phone</h2>
                <a href="tel:+31638444323" class="h3 anchor inline-block umami--click--phone-link">+31 6 38444323</a>
            </div>
            <div class="mt-4">
                <img src="{{ Vite::asset('resources/images/location-dot-solid.svg') }}"
                    class="mx-auto h-16 mb-4 inline-block" alt="Location">
                <h2>Address</h2>Fontys Hogeschool ICT<br>Rachelsmolen 1<br>5612 MA Eindhoven
            </div>
        </div>
        <iframe class="mx-auto mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5913.606667898931!2d5.476252887897476!3d51.45144869543943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d9bbf31bd8fb%3A0xbb209e5872fefac8!2sFontys%20R10!5e0!3m2!1sen!2snl!4v1668680817570!5m2!1sen!2snl" width="80%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
