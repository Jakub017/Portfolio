<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset('img/android-chrome-512x512.png')}}">

    <!-- Meta Tags -->
    <title>Jakub Lipiński - Fullstack Developer</title>
    <meta charset="utf-8">
    <meta name="description" content="Jakub Lipiński - Fullstack Developer">
    <meta name="keywords" content="fullstack, developer, jakub lipiński, strony, internetowe responsywne, reklama, dla, firm, sklepy,
            cieszyn">
    <meta name="author" content="Jakub Lipiński" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:description" ccontent="Jakub Lipiński - Fullstack Developer" />
    <meta property='og:image' content="{{asset('img/og-image.png')}}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/77b0ecbb1c.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- JS -->
    <script defer src="{{asset('js/particles.js')}} "></script>
    <script defer src="{{asset('js/app.js')}}"></script>
    <script defer src="{{asset('js/custom.js')}}"></script>

    <!-- Add recaptcha v3 -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {!! RecaptchaV3::initJs() !!}
</head>

<body>
    @include('partials.nav')

    @yield('content')

    @include('partials.footer')
</body>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper2 = new Swiper(".skills__swiper", {
        effect: "cards",
        grabCursor: true,
    });

    var swiper = new Swiper(".panel__swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 10,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

</script>

</html>
