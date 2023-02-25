<!DOCTYPE html>
<html lang="pl">

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
    <meta name="description"
        content="Profesjonalne, responsywne strony i sklepy internetowe dla osób prywatnych i firm.">
    <meta name="keywords"
        content="strony, internetowe, responsywne, strony, reklama, strony, dla, firm, sklepy, internetowe, cieszyn">
    <meta name="author" content="Jakub Lipiński" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:description"
        content="Profesjonalne, responsywne strony i sklepy internetowe dla osób prywatnych i firm." />
    <meta property='og:image' content="{{asset('img/og-image.png')}}" />

    <!-- Google Fonts -->
    <link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/77b0ecbb1c.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen">

    <!-- Scripts -->
    <script defer src=" {{asset('js/particles.js')}} "></script>
    <script defer src="{{asset('js/app.js')}}"></script>
    <script defer src="{{asset('js/custom.js')}}"></script>
</head>

<body>
    @include('elements.nav')

    @yield('content')

    @include('elements.footer')
</body>

</html>