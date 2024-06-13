
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>Tester Bee - Creative SEO HTML5 Template by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/frontend/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/frontend/assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="/frontend/assets/css/animated.css">
    <link rel="stylesheet" href="/frontend/assets/css/owl.css">
    <link rel="stylesheet" href="/frontend/assets/css/custom.css">
<!--

TemplateMo 563 Tester Bee

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
@include('front-end.layouts.header')
  <!-- ***** Header Area End ***** -->

@yield('content');

@include('front-end.layouts.footer')

  <!-- Scripts -->
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js"')}}"></script>
  <script src="/frontend/assets/js/owl-carousel.js"></script>
  <script src="/frontend/assets/js/animation.js"></script>
  <script src="/frontend/assets/js/imagesloaded.js"></script>
  <script src="/frontend/assets/js/custom.js"></script>
 @yield('js')

</body>
</html>