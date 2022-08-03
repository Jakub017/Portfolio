<!DOCTYPE html>
<html lang="pl">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-63GSYD639X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-63GSYD639X');
  </script>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="assets/img/android-chrome-512x512.png">

  <!-- Meta Tags -->
  <title>Jakub Lipiński - Web Developer</title>
  <meta charset="utf-8">
  <meta name="description" content="Profesjonalne, responsywne strony internetowe.">
  <meta name="keywords"
    content="strony internetowe, responsywne strony, reklama, strony dla firm">
  <meta name="author" content="Jakub Lipiński" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:description"
    content="Profesjonalne, responsywne strony internetowe." />
  <meta property='og:image' content='assets/img/og-image.png' />

  <!-- Google Fonts -->
  <link rel=" preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/77b0ecbb1c.js" crossorigin="anonymous"></script>

  <!-- Styles -->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen">
</head>

<body>
  @include('frontend.nav');
  @include('frontend.homepage.welcome');
  @include('frontend.homepage.about');
  @include('frontend.homepage.skills');
  @include('frontend.homepage.services');
  @include('frontend.homepage.works');
  @include('frontend.homepage.contact');
  @include('frontend.footer')


  <!-- Scripts -->
  <script src=" {{asset('js/particles.js')}} "></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>


</body>

</html>