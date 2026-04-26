<!DOCTYPE html>
<html lang="en">

<head>

  <title>Ben's Resume - Profile HTML Page</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Tooplate">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('front/css/tooplate-ben-resume-style.css') }}">
  <!--
Tooplate 2120 Ben Resume
https://www.tooplate.com/view/2120-ben-resume
-->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

  <!-- MENU BAR -->
  @include('layouts.navbar')


  <!-- HERO -->
  @include('components.hero')


  @include('components.about')


  <!-- TESTIMONIAL -->
  @include('components.testimonials')


  <!-- FAQ -->
  @include('components.faq')


  @include('components.contact')
  <!-- SCRIPTS -->
  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/smoothscroll.js') }}"></script>
  <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/js/custom.js') }}"></script>

</body>

</html>
